<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\requests\ServiceRequest;
use App\Models\mechanicservices\MechanicService;
use App\Models\services\Service;

class UserController extends Controller
{
    
    public function getDashBoards(){
        $totalClients = User::where('role',0)->count();
        $totalMechanics = User::where('role',1)->count();
        $totalRequests = ServiceRequest::all()->count();
        $requests = ServiceRequest::all();
        return view('dashboard',compact('totalClients','totalRequests','totalMechanics','requests'));
    }

    public function getIndex(){
        return view('welcome');
    }

    public function getRegister(){
        return view('pages.users.register');
    }

    public function register(Request $request){


        if($request->password != $request->password_confirmation){
            Session::flash('error','sorry password did\'nt match');
            return back();
        }
        if($request->is_mechanic != 0){
            $role = 1;

        }else{
            $role = 0;
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|min:10|max:20',
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone_number = $request->phone_number;
        $user->role = $role;
        $user->save();
        Session::flash('success','Successfully registered');
         return back();
    }

    public function getDashBoard(){
        $customer_id = auth()->user()->id;
        $customerRequests = ServiceRequest::where('customer_id', $customer_id)->orderBy('created_at', 'desc')->get();
        return view('pages.users.dashboard',compact('customerRequests'));
    }

    public function login(Request $request){

            $this->validate($request,[
                "email"=>"required",
                "password"=>"required"
            ]);

            $credentials = [
                "email"=>$request->email,
                "password"=>$request->password
            ];

        if(Auth::attempt($credentials)){
            if(Auth::user()->role==0){
                return redirect('dashboard');
            }elseif(Auth::user()->role==1){
                return redirect('dashboard');
            }
        }
        Session::flash("error","username or password is invalid");
        return back();
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function mechanicRegisterPage(){
        return view('pages.users.mechanics.mechanic_register');
    }

    public function getMechanics(){
        $mechanics = User::where('role',1)->get();
        return view('backend.pages.mechanics.all_mechanics',compact('mechanics'));
    }

    public function activateMechanic(Request $request){
        $mechanic = User::find($request->mechanic_id);
        if($mechanic){
            $mechanic->is_active = 1;
            $mechanic->save();
            Session::flash('success','Mechanic activated successfully');
            return back();
        }
        Session::flash('error','Sorry Mechanic identity was not found');
        return back();
    }

    public function getMechanicServices(){
        $mechanicServices = MechanicService::where('mechanic_id',auth()->user()->id)->get();
        $services = Service::all();
        return view('backend.pages.mechanics.mechanic_services',compact('mechanicServices','services'));
    }

    public function storeMechanicServices(Request $request){
        $checkService = MechanicService::where('mechanic_id',auth()->user()->id)
        ->where('service_id',$request->service_id)->get();
        if($checkService->isEmpty()){
            $mechanicService = new MechanicService();
            $mechanicService->mechanic_id = auth()->user()->id;
            $mechanicService->service_id = $request->service_id;
            $mechanicService->save();
            Session::flash('success','Service Added successfully');
            return back();
        }
        
        Session::flash('error','You have this service already');
        return back();
    }
}

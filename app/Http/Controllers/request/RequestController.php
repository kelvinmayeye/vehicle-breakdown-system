<?php

namespace App\Http\Controllers\request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\requests\ServiceRequest;
use App\Models\services\Service;
use App\Models\User;

class RequestController extends Controller
{
    //
    public function getMakeRequest(){
        $services = Service::whereHas('mechanicServices')->get();
        $mechanics = User::where('role', 1)->get();


        return view('pages.request.make_request',compact('services','mechanics'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'service_id' => 'required',
            'mechanic_id' => 'required',
            'description' => 'required'
        ]);

        $customer_id = auth()->user()->id;
        if(!$customer_id){
            Session::flash('error','user logged in was not found');
        }

        $customerRequest = new ServiceRequest();
        $customerRequest->customer_id = $request->service_id;
        $customerRequest->mechanic_id = $request->mechanic_id;
        $customerRequest->service_id = $request->service_id;
        $customerRequest->description = $request->description;
        $customerRequest->status = "sent";
        $customerRequest->save();
        Session::flash('success','request sent successfully');

        return redirect('home');
    }
}

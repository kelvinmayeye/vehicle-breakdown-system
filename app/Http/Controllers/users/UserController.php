<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getIndex(){
        return view('pages.users.login');
    }

    public function getRegister(){
        return view('pages.users.register');
    }

    public function storeCustomer(Request $request){
        if($request->password != $request->password_confirmation){
            Session::flash('error','sorry password did\'nt match');
            return back();
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|min:10|max:20',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone_number = $request->input('phone_number');
        $user->save();
        Session::flash('success','you\'re successfully registered');
         return back();
    }
}

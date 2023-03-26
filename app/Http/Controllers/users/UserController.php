<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|min:10|max:20',
        ], [
            'password.confirmed' => 'The password confirmation does not match.'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone_number = $request->input('phone_number');
        $user->save();
        return dd('DOne');
    }
}

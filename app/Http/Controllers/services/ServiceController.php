<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\services\Service;

class ServiceController extends Controller
{
    //
    public function getAllservice(){

        return view('pages.service.all_services');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        $service = new Service();
        $service->name = $validatedData['name'];
        $service->price = $validatedData['price'];
        $service->description = $validatedData['description'];
        $service->save();
        Session::flash('success','service added successfully');
        return back();
    }
}

<?php

namespace App\Http\Controllers\request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services\Service;

class RequestController extends Controller
{
    //
    public function getMakeRequest(){
        $services = Service::all();
        return view('pages.request.make_request',compact('services'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'service_id' => 'required',
            'description' => 'required'
        ]);

        $customer_id = auth()->user()->id;

        return back();
    }
}

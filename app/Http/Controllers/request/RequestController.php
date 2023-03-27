<?php

namespace App\Http\Controllers\request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services\Service;

class RequestController extends Controller
{
    //
    public function store(){
        $services = Service::all();
        return view('pages.request.make_request',compact('services'));
    }
}

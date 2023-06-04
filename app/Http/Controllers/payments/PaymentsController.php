<?php

namespace App\Http\Controllers\payments;

use App\Http\Controllers\Controller;
use App\Models\payments\Payment;
use App\Models\requests\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentsController extends Controller
{
    public function store(Request $request){

        $customer_id = auth()->user()->id;
            if(!$customer_id){
                Session::flash('error','user logged in was not found');
                return back();
            }
        $checkControlNumber = ServiceRequest::where('id',$request->request_id)
        ->where('control_number',$request->confirm_control_number)->first();
        
        if(!$checkControlNumber){
            Session::flash('error','sorry this control number didn\'t match');
                return back();
        }

        $payment = new Payment();
        $payment->customer_id = $customer_id;
        $payment->request_id = $request->request_id;
        $payment->amount = $request->amount;
        $payment->save();
        Session::flash('success','request paid successfully');
        return back();
    }
}

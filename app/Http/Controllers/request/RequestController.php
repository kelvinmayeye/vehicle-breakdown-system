<?php

namespace App\Http\Controllers\request;

use App\Http\Controllers\Controller;
use App\Models\mechanicservices\MechanicService;
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

    public function checkUserAuth(){ 
        // Check if user is logged in
        if (!auth()->check()) {
            Session::flash('error', 'Please login');
            return back();
        }else{
            
            return redirect('all-services');
        }
    }

    public function getMechanicServices($id){
        $mechanicService = MechanicService::where('service_id',$id)->get();
        $service = Service::where('id',$id)->first();
        $serviceName = $service->name;
        return view('backend.pages.requestservice.servicesbymechanic',compact('mechanicService','serviceName'));
    }

    public function storeRequest(Request $request){ 
            $customer_id = auth()->user()->id;
            if(!$customer_id){
                Session::flash('error','user logged in was not found');
                return back();
            }
    
            $customerRequest = new ServiceRequest();
            $customerRequest->customer_id = $customer_id;
            $customerRequest->mechanic_service_id = $request->mechanic_service_id;
            $customerRequest->description = $request->description;
            $customerRequest->location = $request->location;
            $customerRequest->status = "sent";
            $customerRequest->save();
            Session::flash('success','request sent successfully');
            return back();
        }

        public function cancelRequest(Request $request){
            $customerRequest = ServiceRequest::find($request->request_id);
            $customerRequest->status = "cancelled";
            $customerRequest->save();
            Session::flash('success','request cancelled successfully');
            return back();
        }
    

    public function getRequestHistory(){
        $customer_id = auth()->user()->id;
        if(!$customer_id){
            Session::flash('error','user logged in was not found');
            return back();
        }
        $allRequests = ServiceRequest::where('customer_id', $customer_id)->orderBy('created_at', 'desc')->get();
        if($allRequests->isEmpty()){
            Session::flash('error','Sorry Youre Dont have any Request yet!');
            return back();
        }
   
        return view('backend.pages.myrequests',compact('allRequests'));
    }

    public function cancel(Request $request){
        $serviceRequest = ServiceRequest::find($request->request_id);
        if(!$serviceRequest){
            Session::flash('error','sorry this service was not found');
            return back();
        }

        // Set the status of the service request to "cancelled"
        $serviceRequest->status = 'cancelled';
        $serviceRequest->save();

        Session::flash('success','Service request was successfully cancelled');
        return redirect('request-history');

    }


}

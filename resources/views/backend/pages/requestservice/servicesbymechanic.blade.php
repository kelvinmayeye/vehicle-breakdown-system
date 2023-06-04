@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">{{$serviceName}} Service</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-end">
                <input type="text" readonly value="Today, {{ strftime('%b %d', strtotime(date('Y-m-d'))) }}" class=" form-control bg-white border-0 custom-shadow custom-radius">   
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Services</h4>
                        <div class="ms-auto">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">#</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Service</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Mechanics</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Amount</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mechanicService as $key=>$mechanicService)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$mechanicService->service->name}}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">
                                        <a href="#" >{{$mechanicService->mechanic->name}}</a>
                                    </td>
                                    
                                    <td class="border-top-0 px-2 py-4">{{$mechanicService->service->price}}</td>
                                    <td class="border-top-0 text-center px-2 py-4">
                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#request-service-modal">Request</a>
                                    </td>
                                </tr>
                                @include('backend.modals.request_service')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
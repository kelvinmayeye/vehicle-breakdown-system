@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <a href="{{url('all-services')}}" class="btn btn-primary">Make Request</a>
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
                    <h4 class="card-title">My Requests</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Mechanic Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Status</th>
                                <th scope="col">When</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $allRequests as $key=>$request )
                                <tr>
                                    <th>{{ $key+1 }}</th>
                                    <td>{{ $request->mechanicService->service->name }}
                                        @if (!$request->payment)
                                            <span class="badge text-bg-danger">Not paid</span>
                                        @endif
                                    </td>
                                    <td>{{ $request->description }}</td>
                                    <td>{{ $request->mechanicService->mechanic->name }}</td>
                                    <td>{{ $request->location }}</td>
                                    <td>{{ $request->status }}</td>
                                    <td>{{ $request->created_at->diffForHumans() }}</td>
                                    
                                    <td>
                                        @if ($request->status != 'cancelled')
                                        <div class="dropdown me-1">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-offset="10,20">
                                                <i class="fa fa-list"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#cancel-request-modal{{$request->id}}">cancel</a>
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#multiple-one">pay</a>
                                            </div>
                                        </div>
                                        @endif
                                    </td>
                                  </tr>
                                  @include('backend.modals.request_cancel_confirm')
                                  @include('backend.modals.service_request_payment')
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('backend.modals.make_request') --}}
@endsection
@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#danger-header-modal">Make Request</a>
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
                                @foreach ( $allRequests as $key=>$Request )
                                <tr>
                                    <th>{{ $key+1 }}</th>
                                    <td>{{ $Request->mechanicService->service->name }}</td>
                                    <td>{{ $Request->description }}</td>
                                    <td>{{ $Request->mechanicService->mechanic->name }}</td>
                                    <td>{{ $Request->location }}</td>
                                    <td>{{ $Request->status }}</td>
                                    <td>{{ $Request->created_at->diffForHumans() }}</td>
                                    @if ($Request->status != 'cancelled' )
                                    <td><a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#cancel-request-modal{{$Request->id}}">cancel</a></td>
                                    @else
                                    <td></td>
                                    @endif
                                  </tr>
                                  @include('backend.modals.request_cancel_confirm')
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
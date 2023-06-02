@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">All Mechanics</a>
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
                    <h4 class="card-title">Mechanics</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-danger">
                            <thead class="text-white">
                                <tr>
                                    <th class="bg-danger" scope="col">#</th>
                                    <th class="bg-danger" scope="col">Name</th>
                                    <th class="bg-danger" scope="col">Services</th>
                                    <th class="bg-danger" scope="col">Email</th>
                                    <th class="bg-danger" scope="col">Phone</th>
                                    <th class="bg-danger" scope="col">Status</th>
                                    <th class="bg-danger" scope="col">Created</th>
                                    <th class="bg-danger" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $mechanics as $key=>$mechanic )
                <tr>
                    <th>{{ $key+1 }}</th>
                    <td>{{ $mechanic->name }}</td>
                    <td><a href="#" class="btn waves-effect waves-light btn-rounded btn-outline-dark">{{$mechanic->mechanicServices->count()}} {{ Illuminate\Support\Str::plural('Service', $mechanic->mechanicServices->count()) }}</a></td>
                    <td>{{ $mechanic->email }}</td>
                    <td>{{ $mechanic->phone_number }}</td>
                    @if ($mechanic->is_active == 0)
                        <td>inactive</td>
                    @else
                        <td>active</td>
                    @endif
                    <td>{{ $mechanic->created_at->diffForHumans() }}</td>
                    @if ($mechanic->is_active == 0)
                        <td> <a href="#" class="btn waves-effect waves-light btn-rounded btn-success" data-bs-toggle="modal"
                            data-bs-target="#warning-header-modal{{ $mechanic->id }}">activate</a> </td>
                    @else
                    <td></td>
                    @endif
                  </tr>
                  @include('backend.modals.confirm_mechanic_activation')
                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
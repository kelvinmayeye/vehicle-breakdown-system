@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hellow</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
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
        <div class="col-sm-4 col-lg-4">
            <div class="card border-end">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                                <span
                                    class="badge bg-primary font-12 text-white font-weight-medium rounded-pill ms-2 d-lg-block d-md-none">+30</span>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">All Clients
                            </h6>
                        </div>
                        <div class="ms-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4">
            <div class="card border-end ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller">$</sup>198</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Requests
                            </h6>
                        </div>
                        <div class="ms-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4">
            <div class="card border-end ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">123</h2>
                                <span
                                    class="badge bg-danger font-12 text-white font-weight-medium rounded-pill ms-2 d-md-none d-lg-block">-2%</span>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Mechanics
                            </h6>
                        </div>
                        <div class="ms-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Latest Requests</h4>
                        <div class="ms-auto">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">#
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Customer name
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Service</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Amount</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                        Status
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                        Requested At
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Mechanic</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td></td>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="me-3"><img
                                                    src="{{asset(url('backend/assets/images/user.jpg'))}}"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                    Gover</h5>
                                                <span class="text-muted font-14">hgover@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-top-0 text-muted px-2 py-4 font-14">Battery</td>
                                    <td class="border-top-0 px-2 py-4"> 2000 Tsh
                                    </td>
                                    <td class="border-top-0 text-center px-2 py-4"><i
                                            class="fa fa-circle text-primary font-12"
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="In Testing"></i></td>
                                    <td
                                        class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                        3 hours ago
                                    </td>
                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">Nduvini Service
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
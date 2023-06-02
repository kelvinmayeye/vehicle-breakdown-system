@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Add Service</a>
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
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Input Service Information</h4>
                    </h6>
                    <form action="{{url('store-service')}}" method="POST" class="mt-4">
                        @csrf
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="placeholder"
                                        placeholder="Service name">
                                </div>
                            </div>

                            <div class="col mt-4">
                                <div class="form-group">
                                    <textarea rows="" name="description" cols="" class="form-control" placeholder="Service description"></textarea>
                                </div>
                            </div>

                            <div class="col mt-4">
                                <div class="form-group">
                                    <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="col mt-4">
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-primary" value="Add Service">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.master')
@section('content')
<div class="container">
    <h1 class="text-center">Dashboard</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Recent Requests
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Request #1</li>
            <li class="list-group-item">Request #2</li>
            <li class="list-group-item">Request #3</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Pending Payments
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Payment #1</li>
            <li class="list-group-item">Payment #2</li>
            <li class="list-group-item">Payment #3</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Recent Activity
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Request #1 completed</li>
            <li class="list-group-item">Payment #2 submitted</li>
            <li class="list-group-item">Request #3 assigned to mechanic</li>
          </ul>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Quick Links</h3>
      </div>
    </div>
    <div class="row">
        <div class="col">
            <h4 class="">Service</h4>
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#addServiceModal">Add Service</a></li>
                {{-- show service and number of mechanics that offers the service --}}
                <li><a href="{{ url('all-services') }}">All Services</a></li>
                <li><a href="#">Delete Service</a></li>
                <li><a href="#">Update Service</a></li>
              </ul>
        </div>
        <div class="col">
            <h4 class="">Request</h4>
            <ul>
                <li><a href="#">Make Request</a></li>
                <li><a href="#">Request History</a></li>
                <li><a href="#">Cancel Request</a></li>
              </ul>
        </div>
        <div class="col">
            <h4 class="">Mechanics</h4>
            <ul>
                <li><a href="#">Approve Mechanic</a></li>
                <li><a href="#">All Mechanic</a></li>
                <li><a href="#">Disable Mechanic</a></li>
              </ul>
        </div>
    </div>

  </div>
  @include('partials.modals.add_service')
  @endsection

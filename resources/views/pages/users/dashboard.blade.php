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
        <h4>Quick Links:</h4>
        <ul>
          <li><a href="#">New Request</a></li>
          <li><a href="#">Request History</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>

  </div>
  @endsection

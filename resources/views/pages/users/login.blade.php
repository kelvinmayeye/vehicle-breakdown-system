@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            <form>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <a href="{{ url('dashboard') }}" class="btn btn-primary btn-block">Login</a>
            </form>
            <div class="text-center mt-4">
              <a href="{{ url('register') }}">Register Here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

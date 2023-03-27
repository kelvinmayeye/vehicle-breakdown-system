@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            <form action="{{ url('login') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Login">
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

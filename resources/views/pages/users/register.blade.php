@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center mb-4">Register</h3>
            <form action="{{ url('register-customer') }}" method="POST">
                @csrf
              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your full name">
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                      </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone number">
                     </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block mx-2">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

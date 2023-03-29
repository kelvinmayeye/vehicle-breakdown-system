@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-10 m-3 mx-auto">
        <h3 class="text-center">Service Request History</h3>
        <table class="table table-hover">
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
                    <td>{{ $Request->service->name }}</td>
                    <td>{{ $Request->service->description }}</td>
                    <td>{{ $Request->mechanic->name }}</td>
                    <td>{{ $Request->location }}</td>
                    <td>{{ $Request->status }}</td>
                    <td>{{ $Request->created_at->diffForHumans() }}</td>
                    @if ($Request->status != 'cancelled' )
                    <td><a href="#" data-toggle="modal" data-target="#staticBackdrop{{ $Request->id }}" class="badge badge-danger">Cancel</a>
                    </td>
                    @endif
                  </tr>
                  @include('partials.modals.request_cancel_confirm')
                @endforeach
            </tbody>
          </table>

    </div>
</div>

@endsection

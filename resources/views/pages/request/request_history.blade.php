@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col m-3">
        <h3 class="text-center">Request History</h3>
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
              </tr>
            </thead>
            <tbody>
                @foreach ( $allRequests as $key=>$allRequest )
                <tr>
                    <th>{{ $key+1 }}</th>
                    <td>{{ $allRequest->service->name }}</td>
                    <td>{{ $allRequest->service->description }}</td>
                    <td>{{ $allRequest->mechanic->name }}</td>
                    <td>{{ $allRequest->location }}</td>
                    <td>{{ $allRequest->status }}</td>
                    <td>{{ $allRequest->created_at->diffForHumans() }}</td>

                  </tr>
                @endforeach
            </tbody>
          </table>

    </div>
</div>

@endsection

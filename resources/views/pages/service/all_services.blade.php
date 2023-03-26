@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col m-3">
        <h3 class="text-center">All Services</h3>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Mechanics</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $services as $key=>$service )
                <tr>
                    <th>{{ $key+1 }}</th>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->mechanicServices->count() }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>

    </div>
</div>

@endsection

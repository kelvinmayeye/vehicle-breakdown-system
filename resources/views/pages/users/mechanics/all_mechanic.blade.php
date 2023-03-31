@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-8 m-3 mx-auto">
        <h3 class="text-center">All Mechanic</h3>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $mechanics as $key=>$mechanic )
                <tr>
                    <th>{{ $key+1 }}</th>
                    <td>{{ $mechanic->name }}</td>
                    <td>{{ $mechanic->email }}</td>
                    <td>{{ $mechanic->phone_number }}</td>
                    @if ($mechanic->is_active == 0)
                        <td>inactive</td>
                    @else
                        <td>active</td>
                    @endif
                    <td>{{ $mechanic->created_at->diffForHumans() }}</td>
                    @if ($mechanic->is_active == 0)
                        <td> <a href="#" data-toggle="modal" data-target="#confirmActivateModal{{ $mechanic->id }}" class="badge badge-danger">activate</a> </td>
                    @else
                    <td></td>
                    @endif
                  </tr>
                  @include('partials.modals.activate_mechanic_confirm')
                @endforeach
            </tbody>
          </table>

    </div>
</div>

@endsection

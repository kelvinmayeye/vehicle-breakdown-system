@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h4>Make Request</h4>
            <form method="POST" action="{{ url('make-request') }}">
                @csrf
                <div class="form-group">
                    <label for="service">Service</label>
                    <select class="form-control" name="service_id" id="service_id" required>
                        @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="service">Mechanics</label>
                    <select class="form-control" name="mechanic_id" required>
                        @foreach($mechanics as $mechanic)
                        <option value="{{ $mechanic->id }}">{{ $mechanic->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" id="location" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

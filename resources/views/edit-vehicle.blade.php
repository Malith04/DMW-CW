@extends('layout.master')
@section('custom_styles')
@endsection
@section('content')
<!-- Top Bar -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Vehicle</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="index.html" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Back to Vehicles
        </a>
    </div>
</div>

<!-- Edit vehicle Form -->
<div class="card">
    <div class="card-body">
        <form action="{{ url('/vehicles/update/'.$vehicle->id) }}" method="POST">

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Vehicle Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $vehicle->name }}" required>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $vehicle->brand }}" required>
            </div>

            <div class="mb-3">
                <label for="chassis_number" class="form-label">Chassis Number</label>
                <input type="text" class="form-control" id="chassis_number" name="chassis_number"
                    value="{{ $vehicle->chassis_number }}" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $vehicle->color }}" required>
            </div>

            <div class="mb-3">
                <label for="passenger_count" class="form-label">Passenger Count</label>
                <input type="number" class="form-control" id="passenger_count" name="passenger_count"
                    value="{{ $vehicle->passenger_count }}" required>
            </div>

            <div class="mb-3">
                <label for="model_year" class="form-label">Model Year</label>
                <input type="date" class="form-control" id="model_year" name="model_year"
                    value="{{ $vehicle->model_year }}" required>
            </div>

            <div class="mb-3">
                <label for="owned_by" class="form-label">Owned By</label>
                <input type="text" class="form-control" id="owned_by" name="owned_by" value="{{ $vehicle->owned_by }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Update Vehicle</button>
        </form>
    </div>
</div>
@endsection

@section('custom_scripts')
@endsection

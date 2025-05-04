@extends('layout.master')
@section('custom_styles')
@endsection
@section('content')
    <!-- Top Bar -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{url ('/users') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>Back to Users
            </a>
        </div>
    </div>
<!--Add Company form-->
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/branch/add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" id="brand" required>
                </div>
                <div class="mb-3">
                    <label for="chassis_number" class="form-label">Chassis Number</label>
                    <input type="text" name="chassis_number" class="form-control" id="chassis_number" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" class="form-control" id="color" required>
                </div>
                <div class="mb-3">
                    <label for="passenger_count" class="form-label">Passenger Count</label>
                    <input type="number" name="passenger_count" class="form-control" id="passenger_count" min="1" required>
                </div>
                <div class="mb-3">
                    <label for="model_year" class="form-label">Model Year</label>
                    <input type="date" name="model_year" class="form-control" id="model_year" required>
                </div>
                <div class="mb-3">
                    <label for="owned_by" class="form-label">Owned By</label>
                    <input type="text" name="owned_by" class="form-control" id="owned_by" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Vehicle</button>
            </form>
        </div>
    </div>

@endsection
@section('custom_scripts')
@endsection



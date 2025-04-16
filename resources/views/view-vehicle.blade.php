@extends('layout.master')
@section('custom_styles')
@endsection
@section('content')
    <!-- Top Bar -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vehicle Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ url('/vehicles/edit'.$vehicle->id) }}" class="btn btn-warning me-2">
                <i class="bi bi-pencil me-1"></i>Edit
            </a>
            <a href="{{ url('/vehicles') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>Back to Vehicles
            </a>
        </div>
    </div>

    <!-- User Details -->
    <div class="card vehicle-details">
        <div class="card-body">
            <div class="text-center mb-4">
                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center"
                     style="width: 100px; height: 100px; font-size: 2.5rem;">
                    {{$vehicle->name}}
                </div>
            </div>
            <table class="table">
                <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $vehicle->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Brand</th>
                    <td>{{ $vehicle->brand }}</td>
                </tr>
                <tr>
                    <th scope="row">Chassis Number</th>
                    <td>{{ $vehicle->chassis_number }}</td>
                </tr>
                <tr>
                    <th scope="row">Color</th>
                    <td>{{ $vehicle->color }}</td>
                </tr>
                <tr>
                    <th scope="row">Passenger Count</th>
                    <td>{{ $vehicle->passenger_count }}</td>
                </tr>
                <tr>
                    <th scope="row">Model Year</th>
                    <td>{{ $vehicle->model_year }}</td>
                </tr>
                <tr>
                    <th scope="row">Owned By</th>
                    <td>{{ $vehicle->owned_by }}</td>
                </tr>
                <tr>
                    <th scope="row">Vehicle Added </th>
                    <td>{{ $vehicle->created_at }}</td>
                </tr>
                <tr>
                    <th scope="row">Last Updated</th>
                    <td>{{ $vehicle->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('custom_scripts')
@endsection

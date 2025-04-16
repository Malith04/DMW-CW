@extends('layout.master')
@section('custom_styles')
@endsection
@section('content')
<!-- Top Bar -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Vehicle Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{url ('/vehicles/new') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i>Add vehicle
        </a>
    </div>
</div>

<!-- Vehicle Table -->
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vehicle Name</th>
                <th>Brand</th>
                <th>Chassis Number</th>
                <th>Color</th>
                <th>Passenger Count</th>
                <th>Model Year</th>
                <th>Owned By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->vehicle_id }}</td>
                <td>{{ $vehicle->name }}</td>
                <td>{{ $vehicle->brand }}</td>
                <td>{{ $vehicle->chassis_number }}</td>
                <td>{{ $vehicle->color }}</td>
                <td>{{ $vehicle->passenger_count }}</td>
                <td>{{ $vehicle->model_year }}</td>
                <td>{{ $vehicle->owned_by }}</td>
                <td class="table-actions">
                    <a href="{{ url('/vehicles/view/'.$vehicle->vehicle_id) }}" class="btn btn-sm btn-info">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ url('/vehicles/edit/'.$vehicle->vehicle_id) }}" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="{{ url('/vehicles/delete/'.$vehicle->vehicle_id) }}" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<!-- Pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
@endsection

@section('custom_scripts')
@endsection
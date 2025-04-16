@extends('layout.master')
@section('custom_styles')

{{--Any additional styles/content that needs to be available in head section--}}
@endsection

@section('content')
<!-- Top Bar -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle me-1"></i>Admin
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Dashboard Content -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <h2 class="card-text">124</h2>
                <a href="index.html" class="btn btn-primary">View All</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Recent Activity</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">User "john_doe" updated</li>
                    <li class="list-group-item">New user "jane_smith" added</li>
                    <li class="list-group-item">User "mike_jones" deleted</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom_scripts')

@endsection

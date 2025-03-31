@extends('layout.master')
@section('custom_scripts')
@endsection
@section('content')
<!-- Top Bar -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Employee</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ url('/users') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Back to Employees
        </a>
    </div>
</div>

<!-- Add User Form -->
<div class="card">
    <div class="card-body-2">
        <form action="{{ url('/users/add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age" min="1" max="120">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" name="re-password" class="form-control" id="confirmPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
</div>
@endsection
@section('custom_scripts')
@endsection

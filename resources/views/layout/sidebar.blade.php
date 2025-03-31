<!-- Sidebar -->
<div class="col-md-3 col-lg-2 d-md-block sidebar collapse bg-dark">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}">
                    <i class="bi bi-speedometer2 me-2">  Dashboard</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/users') }}">
                    <i class="bi bi-people me-2">  Employees</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/vehicles') }}">
                    <i class="bi bi-car-front-fill">  Vehicles</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/branches') }}">
                    <i class="bi bi-buildings">  Branches</i>
                </a>
            </li>
        </ul>
    </div>
</div>

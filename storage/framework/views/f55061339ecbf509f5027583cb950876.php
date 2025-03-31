<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/style.css')); ?>">
    <?php echo $__env->yieldContent('custom_styles'); ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="<?php echo e(url('/users')); ?>" class="nav-link">
                                <i class="bi bi-people-fill"></i> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/vehicles/add')); ?>" class="nav-link">
                                <i class="bi bi-car-front-fill"></i> Add Vehicle
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('custom_scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\Mihiranga Rathnayake\Desktop\Languages\Web development\laravel-sessions\crud-app\crud-app\resources\views/layout/master.blade.php ENDPATH**/ ?>
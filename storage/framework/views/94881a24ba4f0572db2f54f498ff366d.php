<?php $__env->startSection('custom_styles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Top Bar -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Details</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="<?php echo e(url('/users/edit/'.$user->id)); ?>" class="btn btn-warning me-2">
            <i class="bi bi-pencil me-1"></i>Edit
        </a>
        <a href="<?php echo e(url('/users')); ?>" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Back to Users
        </a>
    </div>
</div>

<!-- User Details -->
<div class="card user-details">
    <div class="card-body">
        <div class="text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px; font-size: 2.5rem;">
                <?php echo e($user->username); ?>

            </div>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Username</th>
                    <td><?php echo e($user->username); ?></td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td><?php echo e($user->email); ?></td>
                </tr>
                <tr>
                    <th scope="row">Age</th>
                    <td><?php echo e($user->age); ?></td>
                </tr>
                <tr>
                    <th scope="row">Account Created</th>
                    <td><?php echo e($user->created_at); ?></td>
                </tr>
                <tr>
                    <th scope="row">Last Updated</th>
                    <td><?php echo e($user->updated_at); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Mihiranga Rathnayake\Desktop\Languages\Web development\laravel-sessions\crud-app\crud-app\resources\views/view-user.blade.php ENDPATH**/ ?>
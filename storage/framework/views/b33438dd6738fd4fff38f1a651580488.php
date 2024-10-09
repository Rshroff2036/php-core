<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Insurance Management</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('policies.index')); ?>">Policies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('claims.index')); ?>">Claims</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\Insurance-Management\InsuranceManagement\resources\views/layouts/app.blade.php ENDPATH**/ ?>
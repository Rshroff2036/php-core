<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Create New Policy</h2>

    <form action="<?php echo e(route('policies.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group mb-3">
            <label for="policy_name">Policy Name</label>
            <input type="text" name="policy_name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="premium">Premium</label>
            <input type="number" step="0.01" name="premium" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="duration">Duration (Months)</label>
            <input type="number" name="duration" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Policy</button>
        <a href="<?php echo e(route('policies.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Insurance-Management\InsuranceManagement\resources\views/policies/create.blade.php ENDPATH**/ ?>
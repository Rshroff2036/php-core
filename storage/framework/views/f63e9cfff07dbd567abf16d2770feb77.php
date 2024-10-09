<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Insurance Policies</h2>
    <a href="<?php echo e(route('policies.create')); ?>" class="btn btn-primary mb-3">Add New Policy</a>

    <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Policy Name</th>
                <th>Description</th>
                <th>Premium</th>
                <th>Duration (Months)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($policy->id); ?></td>
                <td><?php echo e($policy->policy_name); ?></td>
                <td><?php echo e($policy->description); ?></td>
                <td><?php echo e($policy->premium); ?></td>
                <td><?php echo e($policy->duration); ?></td>
                <td>
                    <a href="<?php echo e(route('policies.edit', $policy->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('policies.destroy', $policy->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Insurance-Management\InsuranceManagement\resources\views/policies/index.blade.php ENDPATH**/ ?>
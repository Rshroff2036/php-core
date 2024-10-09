<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Claims</h2>
    <a href="<?php echo e(route('claims.create')); ?>" class="btn btn-primary mb-3">File a New Claim</a>

    <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Policy</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $claims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $claim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($claim->id); ?></td>
                <td><?php echo e($claim->policy->policy_name); ?></td>
                <td><?php echo e($claim->claim_reason); ?></td>
                <td><?php echo e($claim->claim_status); ?></td>
                <td>
                    <?php if(auth()->user()->role == 'agent' || auth()->user()->role == 'admin'): ?>
                    <form action="<?php echo e(route('claims.updateStatus', [$claim->id, 'approved'])); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                    <form action="<?php echo e(route('claims.updateStatus', [$claim->id, 'rejected'])); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                    <?php else: ?>
                    <button class="btn btn-secondary" disabled>Pending Approval</button>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Insurance-Management\InsuranceManagement\resources\views/claims/index.blade.php ENDPATH**/ ?>
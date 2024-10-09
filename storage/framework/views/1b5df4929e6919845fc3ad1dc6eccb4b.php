<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>File a New Claim</h2>

    <form action="<?php echo e(route('claims.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group mb-3">
            <label for="policy_id">Policy</label>
            <select name="policy_id" class="form-control" required>
                <option value="">Select Policy</option>
                <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($policy->id); ?>"><?php echo e($policy->policy_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="claim_reason">Claim Reason</label>
            <textarea name="claim_reason" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Claim</button>
        <a href="<?php echo e(route('claims.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Insurance-Management\InsuranceManagement\resources\views/claims/create.blade.php ENDPATH**/ ?>
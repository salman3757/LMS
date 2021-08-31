

<?php $__env->startSection('content'); ?>

<form action="verify_code" method="POST" class="card p-5 shadow-sm">

<?php echo csrf_field(); ?>


  <div class="mb-3">
    <label for="code" class="form-label">Enter 6-Digit Code</label>
    <input type="text" name="users_code" class="form-control" id="code">
  </div>

  <input type="hidden" name="code" value="<?php echo e($code); ?>">
  <input type="hidden" name="id" value="<?php echo e($admin->id); ?>">

  <button type="submit" class="btn btn-info my-3">Submit</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/verify_code.blade.php ENDPATH**/ ?>
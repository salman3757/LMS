

<?php $__env->startSection('content'); ?>

<form action="update_password" method="POST" class="card p-5 shadow-sm">

<?php echo csrf_field(); ?>


  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" >
  </div>

  <button type="submit" class="btn btn-info my-3">Reset Password</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/edit_password_view.blade.php ENDPATH**/ ?>
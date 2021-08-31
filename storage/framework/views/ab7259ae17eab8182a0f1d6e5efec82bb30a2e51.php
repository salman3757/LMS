

<?php $__env->startSection('content'); ?>

<form action="admin_forgot_password" method="POST" class="card p-5 shadow-sm">

<?php echo csrf_field(); ?>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-info my-3">Submit Email</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/forgot_password.blade.php ENDPATH**/ ?>
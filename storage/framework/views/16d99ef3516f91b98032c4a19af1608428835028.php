

<?php $__env->startSection('content'); ?>


<div class="container">
  <h3 class="text-dark text-center my-5">Client Login</h3>
</div>

<form action="client_login" method="POST" class="card p-5 shadow-sm">

<?php echo csrf_field(); ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-info my-3">Login</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/client/client_login.blade.php ENDPATH**/ ?>
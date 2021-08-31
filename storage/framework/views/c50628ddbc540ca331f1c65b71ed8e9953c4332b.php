

<?php $__env->startSection('content'); ?>

<div class="container align-center align-items-center">
<form action="/update_client" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="name">Client Name</label>
    <input type="text" name="name" value="<?php echo e($client->name); ?>" class="form-control" id="name"  required>
  </div>
  <div class="form-group">
    <label for="description">Client Email</label>
    <input type="text"  name="email" value="<?php echo e($client->email); ?>" class="form-control"  required>
  </div>
  <input type="hidden" name="id" value="<?php echo e($client->id); ?>">
  <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/edit_client_view.blade.php ENDPATH**/ ?>
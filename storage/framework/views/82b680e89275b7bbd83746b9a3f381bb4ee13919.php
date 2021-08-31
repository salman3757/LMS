

<?php $__env->startSection('content'); ?>

<div class="container align-center align-items-center">
<form action="/update_course" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="name">Course Name</label>
    <input type="text" name="name" value="<?php echo e($course->name); ?>" class="form-control" id="name" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="description">Course Description</label>
    <input type="text"  rows="5" name="description" value="<?php echo e($course->description); ?>" class="form-control" id="description" required>
  </div>
  <input type="hidden" name="id" value="<?php echo e($course->id); ?>">
  <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/edit_course_view.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>


<div class="container align-center align-items-center">
<form action="/update_video" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="name">Video Name</label>
    <input type="text" name="name" value="<?php echo e($video->name); ?>" class="form-control" id="name"  required>
  </div>
  <div class="form-group">
    <label for="description">Video URL</label>
    <input type="text"  name="url" value="<?php echo e($video->url); ?>" class="form-control"  required>
  </div>
  <input type="hidden" name="video_id" value="<?php echo e($video->id); ?>">
  <input type="hidden" name="course_id" value="<?php echo e($video->course_id); ?>">
  <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/edit_video_view.blade.php ENDPATH**/ ?>
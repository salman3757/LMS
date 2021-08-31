

<?php $__env->startSection('content'); ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Course Videos</th>
      <th scope="col" colspan="2">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php if(isset($courses)): ?>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($course->name); ?></th>
      <td><?php echo e($course->description); ?></td>
      <td><a href="/show_videos/<?php echo e($course->id); ?>" class="btn text-light btn-course">Videos</a></td>
      <td><a href="/show_course_edit_form/<?php echo e($course->id); ?>" class="btn btn-primary">Update</a></td>
      <td><a href="/delete_course/<?php echo e($course->id); ?>" class="btn btn-danger">Delete</a></td>
    </tr>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</tbody>
  </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/view_courses.blade.php ENDPATH**/ ?>
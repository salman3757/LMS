

<?php $__env->startSection('content'); ?>

<?php
$client = Session::get('client');
?>

<h1 class="text-center my-5">WELCOME TO Client Section - <?php echo e($client['name']); ?></h1>


<?php if(isset($courses)): ?>
<?php if($courses): ?>
<div class="container p-5 border border-dark border-2 text-center">
<h3 class="mb-4 border-bottom border-dark border-2 pb-2">Assigned Courses</h3>
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="show_course_client/<?php echo e($course->id); ?>"><h5 class="btn-primary py-3"><?php echo e($course->name); ?></h5></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/client/client_home.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Course name</th>
    </tr>
  </thead>
  <tbody>
  <?php if(isset($courses) && !empty($courses)): ?>
  <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td scope="row" class="table-info"><?php echo e($course->name); ?></td>

      <td> <form action="/de_assign_course" method="POST" class="">
                 <?php echo csrf_field(); ?>
                <input type="submit" class="btn btn-warning" Value="De - Assign Course">
                
                <input type="hidden" name="course_id" value=<?php echo e($course->id); ?>>
                <input type="hidden" name="client_courses" value=<?php echo e($courses); ?>> <?php //$courses is the Array of Courses Already assigned to the client ?>

            </form>
       </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </tbody>
</table>

<div class="container align-items-center align-center my-5">
    <h3 class="pb-3 border-bottom border-dark text-center border-2">Search Courses</h3>
    <form class="form-inline" action="/search_client_courses" method="GET">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="search" class="form-control" id="search" placeholder="Search Courses">
        </div>
        <input type="hidden" name="client_courses" value=<?php echo e($courses); ?>>
            <button type="submit" class="btn btn-primary mb-2 search_btn">Search</button>
    </form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Course name</th>
    </tr>
  </thead>
  <tbody>
  <?php if(isset($searched_courses)): ?>
  <?php $__currentLoopData = $searched_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr >
      <td scope="row" class="table-info"><?php echo e($course->name); ?></td>

      <td scope="row" class="table-info" >
           <form action="/assign_course" method="POST" class="">
                 <?php echo csrf_field(); ?>
                <input type="submit" class="btn btn-primary" Value="Assign Course">
                <input type="hidden" name="course_id" value=<?php echo e($course->id); ?>>

                <input type="hidden" name="client_courses" value=<?php echo e($courses); ?>> <?php //$courses is the Array of Courses Already assigned to the client ?>

            </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/client/client_courses.blade.php ENDPATH**/ ?>
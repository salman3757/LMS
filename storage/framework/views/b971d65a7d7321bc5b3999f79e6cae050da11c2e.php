

<?php $__env->startSection('content'); ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Courses</th>
      <th scope="col" colspan="2">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php if(isset($clients)): ?>
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($client->name); ?></th>
      <td><?php echo e($client->email); ?></td>
      <td><a href="/client_courses/<?php echo e($client->id); ?>" class="btn btn-secondary btn-course">Courses</a></td>
      <td><a href="/show_client_edit_form/<?php echo e($client->id); ?>" class="btn btn-primary">Update</a></td>
      <td><a href="/delete_client/<?php echo e($client->id); ?>" class="btn btn-danger">Delete</a></td>
    </tr>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</tbody>
  </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/view_clients.blade.php ENDPATH**/ ?>
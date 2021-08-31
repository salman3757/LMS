

<?php $__env->startSection('content'); ?>

<h2 class="card container text-center my-5 py-3"><?php echo e($course->name); ?></h2>

<!--Course Videos Section - START -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">URL Link</th>
      <th scope="col" colspan="2">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php if(isset($videos)): ?>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($video->name); ?></th>
      <td><?php echo e($video->url); ?></td>
      <td><a href="/show_video_edit_form/<?php echo e($video->id); ?>" class="btn btn-primary">Update</a></td>
      <td>  
            <!--Delete form, Here Not using anchor tag and Making a Form For Using DELETE method -->
            <form action = "/delete_video" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
                <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                <input type="hidden" name="video_id" value="<?php echo e($video->id); ?>">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
      </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</tbody>
</table>
<!--Course Videos Section - END -->


<!--Add New Video Section - START -->
<h3 class="text-center mt-5 mb-3">Add New Video To Course</h3>

<form action="/create_video" method="POST" class="card p-4 my-3 mb-5 shadow-sm admin_add_form">

    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="name" class="form-label">Video Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="url" class="form-label">Video URL</label>
    <input type="text" name="url" class="form-control" required>
  </div>

  <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">

  <button type="submit" class="btn btn-info text-light my-3">Add Video</button>
</form>
<!--Add New Video Section - END -->

<!--Comments Section - START -->
<h3 class="container text-center">Comments</h3>
<div class="container comments my-5" style="margin-bottom:200px !important">
    <?php if(isset($comments)): ?>
        <?php if($comments): ?>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="container card p-3 my-2">
                    <h5>
                        <?php echo e($comment->client_name); ?> 
                        <span style="font-size:0.8rem; font-family:courier"> at - <?php echo e($comment->created_at); ?></span>
                    </h5>
                    <p>
                        <?php echo e($comment->comment_text); ?>

                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endif; ?>
<div>
<!--Comments Section - END -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/admin/view_videos.blade.php ENDPATH**/ ?>
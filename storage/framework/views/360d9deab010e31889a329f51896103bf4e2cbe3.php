

<?php $__env->startSection('content'); ?>

<div class="container">
    <?php if(isset($course) && $course): ?>
        <h5><?php echo e($course->name); ?></h5>
        <p><?php echo e($course->description); ?></p>
        <?php if(isset($videos)): ?>
            <?php if($videos): ?>
                <div class="d-flex flex-wrap">
                    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="m-3">
                            <?php   
                                    $url = $video->url;    
                                    $video_id = substr($url, strpos($url, "=") + 1);    
                            ?>
                            <h5><?php echo e($video->name); ?></h5>
                            <iframe width="320" height="215"
                            src="https://www.youtube.com/embed/<?php echo e($video_id); ?>" >
                            </iframe>
                            <br>
                            <a href="<?php echo e($video->url); ?>" target="_blank" class="btn btn-outline-dark" style="width:320px;">Play Video</a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>


<!--Comments Section-->
<form action="/create_comment" method="POST" class="container comments p-2 card mt-5">

<?php echo csrf_field(); ?>

  <div class="mb-3">
    <h3>Comments</h3>
    <textarea name="comment_text" class="form-control" placeholder="Enter your Comments here..."></textarea>
    <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
  </div>
  <button type="submit" class="btn btn-outline-primary my-3">Post Comment</button>
</form>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salman\Desktop\LMS\LMS\resources\views/client/show_course_client.blade.php ENDPATH**/ ?>
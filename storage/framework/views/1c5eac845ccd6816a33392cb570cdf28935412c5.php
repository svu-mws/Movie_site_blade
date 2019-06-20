<?php $__env->startSection('title'); ?>
  User comments
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">User comments</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">content</th>
                      <th scope="col">movie</th>
                      <th scope="col">created_at</th>
                      <th scope="col"> action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $__currentLoopData = Auth::user()->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       <!-- <th scope="row">3</th> -->
                      <td><?php echo e($comment->id); ?></td>
                      <td><?php echo e($comment->content); ?></td>
                      <td><a href="<?php echo e(Route('movie',$comment->id)); ?>"><?php echo e($comment->movie->title); ?></a></td>
                      <td><?php echo e(\Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?></td>

                      <td>
                        <form id="deletecomment-<?php echo e($comment->id); ?>" action="<?php echo e(Route('deletecomment',$comment->id)); ?>" method="movie">
                          <?php echo csrf_field(); ?>
                        </form>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deletecomment-<?php echo e($comment->id); ?>').submit()">X</a>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
            </table>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/user/comments.blade.php ENDPATH**/ ?>
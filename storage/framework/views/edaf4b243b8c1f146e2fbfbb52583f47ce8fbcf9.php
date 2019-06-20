<?php $__env->startSection('title'); ?>
  Admin movies
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Admin movies</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">title</th>
                      <th scope="col">description</th>
                      <th scope="col">content</th>
                      <th scope="col">comments number</th>

                      <th scope="col">image</th>

                      <th scope="col">created_at</th>
                      <th scope="col">updated_at</th>
                      <th scope="col"> action</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       <!-- <th scope="row">3</th> -->
                      <td><?php echo e($movie->id); ?></td>
                      <td><?php echo e($movie->name); ?></td>
                      <td><?php echo e($movie->description); ?></td>
                      <td><a href="<?php echo e(Route('movie',$movie->id)); ?>"><?php echo e($movie->name); ?></a></td>
                      <td><?php echo e($movie->comments->count()); ?></td>
                      <td><img src="<?php echo e(asset('moviesPhotos/'.$movie->thumbnail)); ?>"></td>
                      <td><?php echo e(\Carbon\Carbon::parse($movie->created_at)->diffForHumans()); ?></td>
                      <td><?php echo e(\Carbon\Carbon::parse($movie->updated_at)->diffForHumans()); ?></td>

                      <td>
                        <form id="deletemovie-<?php echo e($movie->id); ?>" action="<?php echo e(Route('admindeletemovie',$movie->id)); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                        </form>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deletemovie-<?php echo e($movie->id); ?>').submit()">X</a>
                        </button>
                        <a type="button" class="btn btn-warning" href="<?php echo e(route('admineditmovie',$movie->id)); ?>">Edit</a>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
            </table>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/movies1.blade.php ENDPATH**/ ?>
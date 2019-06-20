<?php $__env->startSection('title'); ?>
  Admin Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Users</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">user name</th>
                      <th scope="col">email</th>

                      <th scope="col">downloaded movies numbers</th>
                      <th scope="col">comments numbers</th>
                      <th scope="col">created_at</th>
                      <th scope="col">updated_at</th>
                      <th scope="col">action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       <!-- <th scope="row">3</th> -->
                      <td><?php echo e($user->id); ?></td>
                      <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e(Count($user->comments)); ?></td>
                            <td><?php echo e(Count($user->Fav_movies)); ?></td>


                      <td><?php echo e(\Carbon\Carbon::parse($user->created_at)->diffForHumans()); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($user->updated_at)->diffForHumans()); ?></td>
                      <td>
                        <form id="deleteuser-<?php echo e($user->id); ?>" action="<?php echo e(Route('admindeleteuser',$user->id)); ?>" method="post">
                          <?php echo csrf_field(); ?>
                        </form>


                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteuser-<?php echo e($user->id); ?>').submit()">X</button>
                          <a class="btn btn-warning" class="icon icon-pencil" href="<?php echo e(route('adminedituser',$user->id)); ?>"></i>edit</a>

                      </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
            </table>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/users.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    actors
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('addnewactors')); ?>" class="btn btn-primary">Add movie type</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">actors</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">description</th>

                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col"> action</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- <th scope="row">3</th> -->
                            <td><?php echo e($actor->id); ?></td>
                            <td><?php echo e($actor->name); ?></td>


                            <td><?php echo e($actor->description); ?></td>


                            <td><?php echo e(\Carbon\Carbon::parse($actor->created_at)->diffForHumans()); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($actor->updated_at)->diffForHumans()); ?></td>

                            <td>
                                <form id="deleteactor-<?php echo e($actor->id); ?>" action="<?php echo e(Route('Admindeleteactor',$actor->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteactor-<?php echo e($actor->id); ?>').submit()">X</a>
                                </button>
                                <a type="button" class="btn btn-warning" href="<?php echo e(route('Admineditactor',$actor->id)); ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/actors.blade.php ENDPATH**/ ?>
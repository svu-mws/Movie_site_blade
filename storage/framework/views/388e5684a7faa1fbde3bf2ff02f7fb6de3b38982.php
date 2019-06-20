<?php $__env->startSection('title'); ?>
    movies types
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('addnewtype')); ?>" class="btn btn-primary">Add movie type</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">movie type</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>

                        <th scope="col">created_at</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $moviestypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moviestype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- <th scope="row">3</th> -->
                            <td><?php echo e($moviestype->id); ?></td>
                            <td><?php echo e($moviestype->name); ?></td>

                            <td><?php echo e(\Carbon\Carbon::parse($moviestype->created_at)->diffForHumans()); ?></td>
                            <td>
                                <form id="deletemovietype-<?php echo e($moviestype->id); ?>" action="<?php echo e(Route('Admindeletemoviestype',$moviestype->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deletemovietype-<?php echo e($moviestype->id); ?>').submit()">X</button>
                                <>
                                <a href="<?php echo e(route('Admineditmoviestype',$moviestype->id)); ?>" >  Edit </a>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/moviestypes.blade.php ENDPATH**/ ?>
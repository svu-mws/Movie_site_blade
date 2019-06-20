<?php $__env->startSection('title'); ?>
    Producers
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('addnewproducer')); ?>" class="btn btn-primary">Add Producer</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">producers</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">photo</th>
                        <th scope="col">created_at</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $producers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- <th scope="row">3</th> -->
                            <td><?php echo e($producer->id); ?></td>
                            <td><?php echo e($producer->name); ?></td>
                            <td><img src="<?php echo e($producer->thumnail); ?>"></img></td>
                            <td><?php echo e(\Carbon\Carbon::parse($producer->created_at)->diffForHumans()); ?></td>
                            <td>
                                <form id="deleteproducer-<?php echo e($producer->id); ?>" action="<?php echo e(Route('Admindeleteproducer',$producer->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteproducer-<?php echo e($producer->id); ?>').submit()">X</button>
    <>
                           <a href="<?php echo e(route('Admineditproducer',$producer->id)); ?>" >  Edit </a>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/producers.blade.php ENDPATH**/ ?>
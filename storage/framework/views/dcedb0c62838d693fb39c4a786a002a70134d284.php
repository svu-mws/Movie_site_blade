use Illuminate\Support\Facades\Session;


<?php $__env->startSection('title'); ?>
    New producer
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <?php if(Session::has('success')): ?>
                    <div class= "alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>;
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($error); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                        </ul>
                    </div>
                <?php endif; ?>;
                <form id="Add_producer" class="form-horizontal" action="<?php echo e(route('addnewproducerpost')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <h4 class="card-title">New producer</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">producer name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="fname" placeholder="producer name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="thumbnail"  class="form-control" >
                            </div>
                        </div>


                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" >Add Producer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/addproducer.blade.php ENDPATH**/ ?>
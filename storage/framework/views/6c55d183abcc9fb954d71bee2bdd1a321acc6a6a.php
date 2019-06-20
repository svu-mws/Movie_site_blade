use Illuminate\Support\Facades\Session;


<?php $__env->startSection('title'); ?>
    editing<?php echo e($actor->name); ?>

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
                <form  method="post" id="editactor_id" class="form-horizontal" action="<?php echo e(route('Admineditactor',$actor->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <h4 class="card-title">editing : <?php echo e($actor->name); ?></h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">actors name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text"  class="form-control" id="fname" value="<?php echo e($actor->name); ?>"></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">actor description</label>
                            <div class="col-sm-9">
                                <textarea name="description" type="email"  class="form-control" ><?php echo e($actor->description); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">image</label>
                            <input name="thumbnail" type="file" value="<?php echo e(asset('moviesPhotos'.$actor->name)); ?>"> </input>
                            <br>

                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" >edit actor</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/editactor.blade.php ENDPATH**/ ?>
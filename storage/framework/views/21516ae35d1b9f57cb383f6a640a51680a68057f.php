use Illuminate\Support\Facades\Session;


<?php $__env->startSection('title'); ?>
  New movie
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
            <form id="Createmovie_id" class="form-horizontal" action="<?php echo e(route('uploadmoviepost')); ?>" method="POST">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                    <h4 class="card-title">New movie</h4>
                    <div class="form-group row">
                        <label for="fname"  class="col-sm-3 text-right control-label col-form-label">movie title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="fname" placeholder="movie title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">content</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="thumbnail"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">price</label>
                        <div class="col-sm-9">
                            <input name="price" type="double" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">producer_id</label>
                        <div class="col-sm-9">
                                <select name="prodicer_id" multiple style="width: 600px";>
                                    <?php $__currentLoopData = $producers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value ="<?php echo e($producer->id); ?>" data-width=100>Id :   <?php echo e($producer->id); ?> , Name : <?php echo e($producer->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>



                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary" >Create movie</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/uploadnewmovie.blade.php ENDPATH**/ ?>
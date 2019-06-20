<?php $__env->startSection('title'); ?>
  Admin movies
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form id="report" action="<?php echo e(route('reports')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <input type="date" name="start_date">

  <input type="date" name="end_date">

  <div class="card-body">
      <button type="submit" class="btn btn-primary" >generate report</button>
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/report.blade.php ENDPATH**/ ?>
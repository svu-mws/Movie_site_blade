<?php $__env->startSection('title'); ?>
  Admin movies
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form id="report" action="route('reports')" method="POST">
  <?php echo csrf_field(); ?>
  <input type="date" name="start_date">

  <input type="date" name="end_date">

  <div class="card-body">
      <button type="submit" class="btn btn-primary" >generate report</button>
  </div>
</form>

<table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">content</th>
          <th scope="col">comments number</th>
            <th scope="col">price</th>




        </tr>
      </thead>


  <div class= "alert alert-success">

          <div >
             <ul>


                      <tbody>

                      <?php $__currentLoopData = $Downloaded_movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <!-- <th scope="row">3</th> -->
                          <td><?php echo e($order->id); ?></td>
                          <td><?php echo e($order->movies()->name); ?></td>
                          <td><?php echo e($order->movies()->description); ?></td>
                          <td><a href="<?php echo e(Route('movie',$order->movies()->id)); ?>"><?php echo e($order->movies()->name); ?></a></td>
                          <td><?php echo e($order->movies()->comments->count()); ?></td>
                            <td><?php echo e($order->movies()->price); ?></td>



                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </tbody>



             </ul>
          </div>

  </div>
</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/admin/generatedreport.blade.php ENDPATH**/ ?>
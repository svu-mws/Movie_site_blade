<?php $__env->startSection('title'); ?>
  buy movie
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header class="masthead" style="background-image: url(<?php echo e(asset('/assets/img/post-bg.jpg')); ?>)">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo e($movie->name); ?></h1>


        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php echo nl2br($movie->description); ?>

      </div>
    </div>
      <h2> movie rate is : <?php echo e($movie->rates()->avg('rate')); ?> </h2>

    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

      <img src="<?php echo e(asset('moviesPhotos/'.$movie->thumbnail)); ?>">
      </div>
    </div>
</div>
<div class="paymetn">

  <?php if(($haveitt===false) and (Auth::user()->admin===false)): ?>

  <form id="payment" action="<?php echo e(route('buymovie',$movie->id)); ?>" method="POST" >
    <?php echo csrf_field(); ?>
    <input type="text" name="card_owner" placeholder="Card Owner">
      <input type="text" name="card_number" placeholder="cardnumber">
      <input type="text" name="expireddate" placeholder="expired date">
      <input type="number" name="VCC" placeholder="security code">


  </form>
<button class="btn btn_primary" type="button" onclick="document.getElementById('payment').submit()" >pay</button>
</div>
  <?php else: ?>
    <h2>$haveit<h2>
<h2> You Can download this movie without payment ></h2>
<form id="downlaodlink_id" method="POST" action="<?php echo e(route('downloadToBrowser',$movie->thumbnail)); ?>">

  <?php echo csrf_field(); ?>
</form>>
<button class="btn btn_primary" type="button" onclick="document.getElementById('downlaodlink_id').submit()" >download now</button>

  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/user/buymovie.blade.php ENDPATH**/ ?>
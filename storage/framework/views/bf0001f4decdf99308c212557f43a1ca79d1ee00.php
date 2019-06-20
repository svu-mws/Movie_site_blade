


































































































































































<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $__env->yieldContent('title' , 'laravel'); ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo e(asset ('/assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset ('/assets/css/clean-blog.min.css')); ?>" rel="stylesheet">

  </head>

  <body>
<?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
        <!-- Footer -->
        <?php if(auth::user()!=null): ?>

        <?php if(auth::user()->admin=1): ?>

          <h2> Your are admin </h2>

        <?php else: ?>
          <h2> Your are user </h2>
          <?php endif; ?>
          <?php endif; ?>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
              </div>
            </div>
          </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo e(asset('/assets/vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

        <!-- Custom scripts for this template -->
        <script src="<?php echo e(asset('/assets/js/clean-blog.min.js')); ?>"></script>

      </body>

    </html>
<?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/master/master1.blade.php ENDPATH**/ ?>
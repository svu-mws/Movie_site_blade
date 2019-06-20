<?php $__env->startSection('content'); ?>


    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Login</h4>
                    <div class="login-form">
                        <form action="<?php echo e(route('login1')); ?>" method="post">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="LOGIN NOW">
                            </div>
                            <div class="forgot-grid">
                                <div class="log-check">
                                    <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                                </div>
                                <div class="forgot">
                                    <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Register</h4>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" required="">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <input type="password" name="conform password" placeholder="Confirm Password" required="">
                            <div class="signin-rit">
														<span class="agree-checkbox">
														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a
                                                                    class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a
                                                                    class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
													</span>
                            </div>
                            <div class="tp">
                                <input type="submit" value="REGISTER NOW">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- breadcrumb -->
    <div class="w3_breadcrumb">
        <div class="breadcrumb-inner">
            <ul>
                <li><a href="index.html">Home</a><i>//</i></li>

                <li>Single</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumb -->
    <!--/content-inner-section-->
    <div class="agile_featured_movies">
        <div class="inner-agile-w3l-part-head">
            <h3 class="w3l-inner-h-title"><?php echo e($movie->name); ?></h3>
            <p class="w3ls_head_para"></p>
        </div>
        <div class="latest-news-agile-info">
            <div class="col-md-8 latest-news-agile-left-content">
                <!--Image-->
                <img src="<?php echo e(asset('Templates/template_2/images/'.$movie->thumbnail)); ?>" alt="" class="img-responsive"/>

                <!--Comments-->


            </div>
            <div class="col-md-4 latest-news-agile-right-content">
                <!--MovieDetails-->
                <div class="player-text side-bar-info">
                    <p class="fexi_header"><?php echo e($movie->name); ?></p>
                    <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span><?php echo e($movie->description); ?></p>
                    <p class="fexi_header_para"><span>added since<label>:</label></span><?php echo e(\Carbon\Carbon::parse($movie->created_at)->diffForHumans()); ?></p>
                    <p class="fexi_header_para">

                        <span>Genres<label>:</label> </span>
                        <?php $__currentLoopData = $movie->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="genre.html">$type->name</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>

                    <p class="fexi_header_para fexi_header_para1"><span>Star Index<label>:</label></span>
                        <a href="<?php echo e(url('user/moviee/'.$movie->id.'/'. 1 )); ?>"><i class="fa fa-star" aria-hidden="true">1</i></a>
                        <a href="<?php echo e(url('user/moviee/'.$movie->id.'/'. 2 )); ?>"><i class="fa fa-star" aria-hidden="true">2</i></a>
                        <a href="<?php echo e(url('user/moviee/'.$movie->id.'/'. 3 )); ?>"><i class="fa fa-star-half-o" aria-hidden="true">3</i></a>
                        <a href="<?php echo e(url('user/moviee/'.$movie->id.'/'. 4 )); ?>"><i class="fa fa-star-o" aria-hidden="true">4</i></a>
                        <a href="<?php echo e(url('user/moviee/'.$movie->id.'/'. 5 )); ?>"><i class="fa fa-star-o" aria-hidden="true">5</i></a>
                    </p>
                    <p style="color:white">rate : <?php echo e($movie->rates()->avg('rate')); ?></p>
                </div>

            </div>
        </div>
    </div>
    <div class="download_movie">
        <form id="download_movie" method="get" action="<?php echo e(url('user/movie/'. $movie->id . '/download')); ?>">
            <?php echo csrf_field(); ?>
        </form>

        <button type="button" onclick="document.getElementById('download_movie').submit()">download movie</button>
    </div>



                <div class="comments">

                    <div class="response">
                        <h4>Comments</h4>
                        <div class="media response-info">
                            <?php $__currentLoopData = $movie->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo e(asset('Templates/template_2/images/images/admin.jpg')); ?>" alt="">
                                    </a>
                                    <h5><a href="#"><?php echo e($comment->user->name); ?></a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p> <?php echo e(nl2br($comment->description)); ?></p>
                                    <ul>
                                        <li><?php echo e(\Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?></li>
                                    </ul>
                                </div>
                            <?php if((Auth::check())&&(Auth::user()->id === $comment->user->id)): ?>

                                <div>
                                    <a href="<?php echo e(url('user/comment/'. $comment->id .'/delete')); ?>">delete</a>
                                </div>
                                <?php endif; ?>
                        </div>


    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <div class="all-comments-info">
                        <h5>LEAVE A COMMENT</h5>
                        <div class="agile-info-wthree-box">
                            <form id="addcomment_id" method="POST" action="<?php echo e(Route('addcomment',$movie->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <textarea name="comment"  placeholder="Add Comment" required=""></textarea>
                                <input type="submit" value="SEND">

                            </form>
                        </div>
                    </div>
                </div>
                <div class="agile-info-recent">
                    <h4 class="side-t-w3l-agile">More <span>Like</span> This</h4>
                    <div class="w3ls-recent-grids">
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href="single.html"><img src="<?php echo e(asset('Templates/template_2/images/images/m12.jpg')); ?>" alt=" " class="img-responsive"></a>
                            </div>
                            <div class="wom-right">
                                <h5><a href="single.html">Lorem Integer rutrum</a></h5>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                    Ut tellus dolor, dapibus eget.</p>
                                <ul class="w3l-sider-list">
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>On Jan 12, 2016</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <!--//content-inner-section-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/movies.blade.php ENDPATH**/ ?>
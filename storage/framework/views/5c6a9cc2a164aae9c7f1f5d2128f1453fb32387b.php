<?php $__env->startSection('content'); ?>

    <div class="w3_agilits_banner_bootm">
        <section class="search-sec">
            <div class="container">
                <form id="serachformovie"  method="get" action="<?php echo e(route('search')); ?>" novalidate="novalidate">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input name="moviename" type="text" class="form-control search-slt" placeholder="Enter Movie Name">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input name="producersname" type="text" class="form-control search-slt" placeholder="Enter Producer Name">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input name="actorsname" type="text" class="form-control search-slt" placeholder="Enter Actor Name">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select name="$typesname" class="form-control search-slt" id="exampleFormControlSelect1">
                                        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($Genre->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                </br>
                                <div  align="center">
                                    <button type="button"  class="btn btn-danger wrn-btn" onclick="document.getElementById('serachformovie').submit()">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="w3_agilits_banner_bootm">
            <section class="search-sec">
                <div class="container">
                    <h2>movie</h2>
                    <a href="<?php echo e(url('searchmovie/a')); ?>"><i  aria-hidden="true">A  |</i></a>
                    <a href="<?php echo e(url('searchmovie/b')); ?>"><i  aria-hidden="true"></i>B   |  </a>
                            <a href="<?php echo e(url('searchmovie/c')); ?>"><i  aria-hidden="true">C   |</i></a>
                            <a href="<?php echo e(url('searchmovie/d')); ?>"><i  aria-hidden="true">D   |</i></a>
                            <a href="<?php echo e(url('searchmovie/e')); ?>"><i  aria-hidden="true">E   |</i></a>
                            <a href="<?php echo e(url('searchmovie/f')); ?>"><i  aria-hidden="true">F   |</i></a>
                            <a href="<?php echo e(url('searchmovie/g')); ?>"><i  aria-hidden="true">G   |</i></a>
                            <a href="<?php echo e(url('searchmovie/h')); ?>"><i  aria-hidden="true">H   |</i></a>
                            <a href="<?php echo e(url('searchmovie/i')); ?>"><i  aria-hidden="true">I   |</i></a>
                            <a href="<?php echo e(url('searchmovie/j')); ?>"><i  aria-hidden="true">j   |</i></a>
                            <a href="<?php echo e(url('searchmovie/k')); ?>"><i  aria-hidden="true">K   |</i></a>
                            <a href="<?php echo e(url('searchmovie/l')); ?>"><i  aria-hidden="true">L   |</i></a>
                            <a href="<?php echo e(url('searchmovie/m')); ?>"><i  aria-hidden="true">M   |</i></a>
                            <a href="<?php echo e(url('searchmovie/n')); ?>"><i  aria-hidden="true">N   |</i></a>
                            <a href="<?php echo e(url('searchmovie/o')); ?>"><i  aria-hidden="true">O   |</i></a>

                            <a href="<?php echo e(url('searchmovie/p')); ?>"><i  aria-hidden="true">P   |</i></a>
                            <a href="<?php echo e(url('searchmovie/q')); ?>"><i  aria-hidden="true">Q   |</i></a>
                            <a href="<?php echo e(url('searchmovie/r')); ?>"><i  aria-hidden="true">R   |</i></a>
                            <a href="<?php echo e(url('searchmovie/s')); ?>"><i  aria-hidden="true">S   |</i></a>
                            <a href="<?php echo e(url('searchmovie/t')); ?>"><i  aria-hidden="true">T   |</i></a>
                            <a href="<?php echo e(url('searchmovie/u')); ?>"><i  aria-hidden="true">U   |</i></a>
                            <a href="<?php echo e(url('searchmovie/v')); ?>"><i  aria-hidden="true">V   |</i></a>
                            <a href="<?php echo e(url('searchmovie/w')); ?>"><i  aria-hidden="true">W   |</i></a>
                            <a href="<?php echo e(url('searchmovie/x')); ?>"><i  aria-hidden="true">X   |</i></a>
                            <a href="<?php echo e(url('searchmovie/y')); ?>"><i  aria-hidden="true">Y   |</i></a>
                    <a href="<?php echo e(url('searchmovie/z')); ?>"><i  aria-hidden="true">Z   |</i></a>

                </div>
                <div class="container">
                    <h2>producer</h2>
                    <a href="<?php echo e(url('searchproducer/a')); ?>"><i  aria-hidden="true">A  |</i></a>
                    <a href="<?php echo e(url('searchproducer/b')); ?>"><i  aria-hidden="true"></i>B   |  </a>
                    <a href="<?php echo e(url('searchproducer/c')); ?>"><i  aria-hidden="true">C   |</i></a>
                    <a href="<?php echo e(url('searchproducer/d')); ?>"><i  aria-hidden="true">D   |</i></a>
                    <a href="<?php echo e(url('searchproducer/e')); ?>"><i  aria-hidden="true">E   |</i></a>
                    <a href="<?php echo e(url('searchproducer/f')); ?>"><i  aria-hidden="true">F   |</i></a>
                    <a href="<?php echo e(url('searchproducer/g')); ?>"><i  aria-hidden="true">G   |</i></a>
                    <a href="<?php echo e(url('searchproducer/h')); ?>"><i  aria-hidden="true">H   |</i></a>
                    <a href="<?php echo e(url('searchproducer/i')); ?>"><i  aria-hidden="true">I   |</i></a>
                    <a href="<?php echo e(url('searchproducer/j')); ?>"><i  aria-hidden="true">j   |</i></a>
                    <a href="<?php echo e(url('searchproducer/k')); ?>"><i  aria-hidden="true">K   |</i></a>
                    <a href="<?php echo e(url('searchproducer/l')); ?>"><i  aria-hidden="true">L   |</i></a>
                    <a href="<?php echo e(url('searchproducer/m')); ?>"><i  aria-hidden="true">M   |</i></a>
                    <a href="<?php echo e(url('searchproducer/n')); ?>"><i  aria-hidden="true">N   |</i></a>
                    <a href="<?php echo e(url('searchproducer/o')); ?>"><i  aria-hidden="true">O   |</i></a>

                    <a href="<?php echo e(url('searchproducer/p')); ?>"><i  aria-hidden="true">P   |</i></a>
                    <a href="<?php echo e(url('searchproducer/q')); ?>"><i  aria-hidden="true">Q   |</i></a>
                    <a href="<?php echo e(url('searchproducer/r')); ?>"><i  aria-hidden="true">R   |</i></a>
                    <a href="<?php echo e(url('searchproducer/s')); ?>"><i  aria-hidden="true">S   |</i></a>
                    <a href="<?php echo e(url('searchproducer/t')); ?>"><i  aria-hidden="true">T   |</i></a>
                    <a href="<?php echo e(url('searchproducer/u')); ?>"><i  aria-hidden="true">U   |</i></a>
                    <a href="<?php echo e(url('searchproducer/v')); ?>"><i  aria-hidden="true">V   |</i></a>
                    <a href="<?php echo e(url('searchproducer/w')); ?>"><i  aria-hidden="true">W   |</i></a>
                    <a href="<?php echo e(url('searchproducer/x')); ?>"><i  aria-hidden="true">X   |</i></a>
                    <a href="<?php echo e(url('searchproducer/y')); ?>"><i  aria-hidden="true">Y   |</i></a>
                    <a href="<?php echo e(url('searchproducer/z')); ?>"><i  aria-hidden="true">Z   |</i></a>

                </div>
                <div class="container">
                    <h2>actor</h2>
                    <a href="<?php echo e(url('searchactor/a')); ?>"><i  aria-hidden="true">A  |</i></a>
                    <a href="<?php echo e(url('searchactor/b')); ?>"><i  aria-hidden="true"></i>B   |  </a>
                    <a href="<?php echo e(url('searchactor/c')); ?>"><i  aria-hidden="true">C   |</i></a>
                    <a href="<?php echo e(url('searchactor/d')); ?>"><i  aria-hidden="true">D   |</i></a>
                    <a href="<?php echo e(url('searchactor/e')); ?>"><i  aria-hidden="true">E   |</i></a>
                    <a href="<?php echo e(url('searchactor/f')); ?>"><i  aria-hidden="true">F   |</i></a>
                    <a href="<?php echo e(url('searchactor/g')); ?>"><i  aria-hidden="true">G   |</i></a>
                    <a href="<?php echo e(url('searchactor/h')); ?>"><i  aria-hidden="true">H   |</i></a>
                    <a href="<?php echo e(url('searchactor/i')); ?>"><i  aria-hidden="true">I   |</i></a>
                    <a href="<?php echo e(url('searchactor/j')); ?>"><i  aria-hidden="true">j   |</i></a>
                    <a href="<?php echo e(url('searchactor/k')); ?>"><i  aria-hidden="true">K   |</i></a>
                    <a href="<?php echo e(url('searchactor/l')); ?>"><i  aria-hidden="true">L   |</i></a>
                    <a href="<?php echo e(url('searchactor/m')); ?>"><i  aria-hidden="true">M   |</i></a>
                    <a href="<?php echo e(url('searchactor/n')); ?>"><i  aria-hidden="true">N   |</i></a>
                    <a href="<?php echo e(url('searchactor/o')); ?>"><i  aria-hidden="true">O   |</i></a>

                    <a href="<?php echo e(url('searchactor/p')); ?>"><i  aria-hidden="true">P   |</i></a>
                    <a href="<?php echo e(url('searchactor/q')); ?>"><i  aria-hidden="true">Q   |</i></a>
                    <a href="<?php echo e(url('searchactor/r')); ?>"><i  aria-hidden="true">R   |</i></a>
                    <a href="<?php echo e(url('searchactor/s')); ?>"><i  aria-hidden="true">S   |</i></a>
                    <a href="<?php echo e(url('searchactor/t')); ?>"><i  aria-hidden="true">T   |</i></a>
                    <a href="<?php echo e(url('searchactor/u')); ?>"><i  aria-hidden="true">U   |</i></a>
                    <a href="<?php echo e(url('searchactor/v')); ?>"><i  aria-hidden="true">V   |</i></a>
                    <a href="<?php echo e(url('searchactor/w')); ?>"><i  aria-hidden="true">W   |</i></a>
                    <a href="<?php echo e(url('searchactor/x')); ?>"><i  aria-hidden="true">X   |</i></a>
                    <a href="<?php echo e(url('searchactor/y')); ?>"><i  aria-hidden="true">Y   |</i></a>
                    <a href="<?php echo e(url('searchactor/z')); ?>"><i  aria-hidden="true">Z   |</i></a>

                </div>
            </section>
        </div>
    </div>
    </div>
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <!--/agileinfo_tabs-->
            <div class="agileinfo_tabs">
                <!--/tab-section-->
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Recent</li>
                        <li>Popularity</li>
                        <li>Top Index</li>

                    </ul>

                    <div class="resp-tabs-container">


                        <div class="tab3">
                            <?php if(isset($details)): ?>
                                <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab_movies_agileinfo">

                                        <div class="w3_agile_featured_movies">
                                            <div class="col-md-2 video_agile_player " >

                                                <a href="<?php echo e(route('movie',$movie->id)); ?>" class="hvr-sweep-to-bottom"><img src="<?php echo e(asset('Templates/template_2/images/'.$movie->thumbnail)); ?>"
                                                                                                                         title="Movies Pro"
                                                                                                                         class="img-responsive" alt="" align="left" >
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <h6><a href="<?php echo e(route('movie',$movie->id)); ?>"><?php echo e($movie->name); ?> </a></h6>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p><?php echo e(\Carbon\Carbon::parse($movie->created_at)->diffForHumans()); ?></p>
                                                        <div class="block-stars">
                                                            <ul class="w3l-ratings" >
                                                                price: <?php echo e($movie->price .'$'); ?>

                                                                rate: <?php echo e($movie->rates()->avg('rate')); ?>

                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="ribben">

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                    <div class="clearfix"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                            <?php $__currentLoopData = $allmovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab_movies_agileinfo">

                                    <div class="w3_agile_featured_movies">
                                        <div class="col-md-2 video_agile_player " >

                                            <a href="<?php echo e(route('movie',$movie->id)); ?>" class="hvr-sweep-to-bottom"><img src="<?php echo e(asset('Templates/template_2/images/'.$movie->thumbnail)); ?>"
                                                                                                                           title="Movies Pro"
                                                                                                                           class="img-responsive" alt="" align="left" >
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="<?php echo e(route('movie',$movie->id)); ?>"><?php echo e($movie->name); ?> </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p><?php echo e(\Carbon\Carbon::parse($movie->created_at)->diffForHumans()); ?></p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings" >
                                                            price: <?php echo e($movie->price .'$'); ?>

                                                            rate: <?php echo e($movie->rates()->avg('rate')); ?>

                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">

                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="clearfix"></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                        </div>
                        <div class="cleafix"></div>

                    </div>
                </div>


            </div>
        </div>

    </div>


    <!--//tab-section-->
    <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>
    <!--/movies-->


    <!--//top-movies-->
    </div>
    </div>
    <!--//content-inner-section-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/welcome.blade.php ENDPATH**/ ?>
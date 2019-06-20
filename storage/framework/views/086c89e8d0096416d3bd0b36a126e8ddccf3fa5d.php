
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="<?php echo e(asset('/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
    <!-- pop-up -->
    <link href="<?php echo e(asset('/css/popuo-box.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <link href="<?php echo e(asset('/css/easy-responsive-tabs.css')); ?>" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/zoomslider.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>"/>
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('/js/modernizr-2.6.2.min.js')); ?>"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>
<body>
<!--/main-header-->
<!--/banner-bottom-->
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="col-md-6 wthree_agile_login">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</li>
                <?php if(Auth::check()): ?>
                    <?php if(Auth::user()->admin===1): ?>
                    <li >
                        <a class="login"  href= "<?php echo e(route('dashboard')); ?>">Dashboard</a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <form method="POST" id="logoutform" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                        </form>
                        <a class="login"  onclick="document.getElementById('logoutform').submit();" href= "#">logout</a>
                    </li>
                <?php else: ?>
                <li>
                    <a class="login" class="login"   data-target="#myModal4" href= "<?php echo e(route('login')); ?>">login</a>
                </li>
                <li >
                    <a class="login reg" class="login reg"  href= "<?php echo e(route('register')); ?>">register</a>
                </li>
                <?php endif; ?>



            </ul>
        </div>
        <div class="col-md-6 wthree_share_agile">

            <div class="single-agile-shar-buttons">
                <ul>
                    <li>
                        <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count"
                             data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                    </li>
                    <li>
                        <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts"
                             data-layout="button_count" data-size="small" data-mobile-iframe="true"><a
                                    class="fb-xfbml-parse-ignore" target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a>
                        </div>
                    </li>
                    <li class="news-twitter">
                        <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow
                            @w3layouts</a>
                        <script async src="<?php echo e(asset('//platform.twitter.com/widgets.js')); ?>" charset="utf-8"></script>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button"
                           data-show-count="false">Tweet to @w3layouts</a>
                        <script async src="<?php echo e(asset('//platform.twitter.com/widgets.js')); ?>" charset="utf-8"></script>
                    </li>
                    <li>
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone" data-size="medium"></div>

                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                            (function () {
                                var po = document.createElement('script');
                                po.type = 'text/javascript';
                                po.async = true;
                                po.src = 'https://apis.google.com/js/platform.js';
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--//banner-bottom-->
<!-- Modal1 -->































<!-- //Modal1 -->
<!-- Modal1 -->






























<!-- //Modal1 -->
<!--/content-inner-section-->
<div>
    <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</div>



<!--/footer-bottom-->
<div class="contact-w3ls" id="contact">
    <div class="footer-w3lagile-inner">
        <h2>Sign up for our <span>Newsletter</span></h2>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus
            tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
        <div class="footer-contact">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Enter your email...." required=" ">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="footer-grids w3-agileits">
            <div class="col-md-2 footer-grid">
                <h4>Release</h4>
                <ul>
                    <li><a href="#" title="Release 2016">2016</a></li>
                    <li><a href="#" title="Release 2015">2015</a></li>
                    <li><a href="#" title="Release 2014">2014</a></li>
                    <li><a href="#" title="Release 2013">2013</a></li>
                    <li><a href="#" title="Release 2012">2012</a></li>
                    <li><a href="#" title="Release 2011">2011</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Movies</h4>
                <ul>

                    <li><a href="genre.html">ADVENTURE</a></li>
                    <li><a href="comedy.html">COMEDY</a></li>
                    <li><a href="series.html">FANTASY</a></li>
                    <li><a href="series.html">ACTION </a></li>
                    <li><a href="genre.html">MOVIES </a></li>
                    <li><a href="horror.html">HORROR </a></li>

                </ul>
            </div>


            <div class="col-md-2 footer-grid">
                <h4>Review Movies</h4>
                <ul class="w3-tag2">
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="series.html">Historical</a></li>
                    <li><a href="series.html">Romantic</a></li>
                    <li><a href="series.html">Love</a></li>
                    <li><a href="genre.html">Action</a></li>
                    <li><a href="single.html">Reviews</a></li>
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="series.html">Historical</a></li>
                    <li><a href="series.html">Romantic</a></li>
                    <li><a href="genre.html">Love</a></li>
                    <li><a href="comedy.html">Comedy</a></li>
                    <li><a href="horror.html">Horror</a></li>
                    <li><a href="genre.html">Historical</a></li>

                </ul>


            </div>
            <div class="col-md-2 footer-grid">
                <h4>Latest Movies</h4>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/1.jpg')); ?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">eveniet ut molesti</a>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/2.jpg')); ?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">earum rerum tenet</a>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="footer-grid1">

                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/4.jpg')); ?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">eveniet ut molesti</a>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/3.jpg')); ?>" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="single.html">earum rerum tenet</a>

                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
            <div class="col-md-2 footer-grid">
                <h4 class="b-log"><a href="index.html"><span>M</span>ovies <span>P</span>ro</a></h4>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/m1.jpg')); ?>" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/m2.jpg')); ?>" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/m3.jpg')); ?>" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/m4.jpg')); ?>" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/m5.jpg')); ?>" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="single.html"><img src="<?php echo e(asset('/Templates/template_2/images/m6.jpg')); ?>" alt=" " class="img-responsive"></a>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <ul class="bottom-links-agile">
                <li><a href="icons.html" title="Font Icons">Icons</a></li>
                <li><a href="short-codes.html" title="Short Codes">Short Codes</a></li>
                <li><a href="contact.html" title="contact">Contact</a></li>

            </ul>
        </div>
        <h3 class="text-center follow">Connect <span>Us</span></h3>
        <ul class="social-icons1 agileinfo">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

    </div>

</div>
<div class="w3agile_footer_copy">
    <p>© 2017 Movies Pro. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>

<script src="<?php echo e(asset('/js/jquery-1.11.1.min.js')); ?>"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="<?php echo e(asset('js/jquery.zoomslider.min.js')); ?>"></script>
<!-- search-jQuery -->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<script src="<?php echo e(asset('js/simplePlayer.js')); ?>"></script>
<script>
    $("document").ready(function () {
        $("#video").simplePlayer();
    });
</script>
<script>
    $("document").ready(function () {
        $("#video1").simplePlayer();
    });
</script>
<script>
    $("document").ready(function () {
        $("#video2").simplePlayer();
    });
</script>
<script>
    $("document").ready(function () {
        $("#video3").simplePlayer();
    });
</script>

<!-- pop-up-box -->
<script src="<?php echo e(asset('js/jquery.magnific-popup.js')); ?>" type="text/javascript"></script>
<!--//pop-up-box -->

<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<script>
    $(document).ready(function () {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="<?php echo e(asset('js/easy-responsive-tabs.js')); ?>"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<link href="<?php echo e(asset('css/owl.carousel.css')); ?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay: true,
            navigation: true,

            items: 5,
            itemsDesktop: [640, 4],
            itemsDesktopSmall: [414, 3]

        });

    });
</script>

<!--/script-->
<script type="text/javascript" src="<?php echo e(asset('js/move-top.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/easing.js')); ?>"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!--end-smooth-scrolling-->
<script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>


</body>
</html>
<?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/master/master.blade.php ENDPATH**/ ?>
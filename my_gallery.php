<!DOCTYPE html>

<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->

<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

<head>

    <meta charset="utf-8" />

    <title>Водограй галерея</title>

    <meta name="keywords" content="HTML5,CSS3,Template" />

    <meta name="description" content="" />

    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />



    <!-- mobile settings -->

    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->



    <!-- WEB FONTS : use %7C instead of | (pipe) -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />



    <!-- CORE CSS -->

    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->

    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />



    <!-- PAGE LEVEL SCRIPTS -->

    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

</head>

<body class="smoothscroll enable-animation">


<!-- wrapper -->

<div id="wrapper">
    <?php include 'my_header.php'; ?>

    <section>
        <div class="container">
            <div id="blog" class="clearfix blog-isotope blog-isotope-3">

                <!-- POST ITEM -->

                <div class="blog-post-item">



                    <!-- IMAGE -->

                    <figure class="margin-bottom-20">

                        <img class="img-responsive" src="assets/images/demo/content_slider/3-min.jpg" alt="">

                    </figure>



                    <h2><a href="blog-single-default.html">BLOG IMAGE POST</a></h2>



                </div>

                <!-- /POST ITEM -->





                <!-- POST ITEM -->

                <div class="blog-post-item">



                    <!-- IMAGE -->

                    <figure class="margin-bottom-20">

                        <img class="img-responsive" src="assets/images/demo/mockups/600x399/5-min.jpg" alt="">

                    </figure>



                    <h2><a href="blog-single-default.html">ANOTHER BLOG POST</a></h2>



                </div>

                <!-- /POST ITEM -->





                <!-- POST ITEM -->

                <div class="blog-post-item">



                    <!-- IMAGE -->

                    <figure class="margin-bottom-20">

                        <img class="img-responsive" src="assets/images/demo/720x400/5-min.jpg" alt="">

                    </figure>



                    <h2><a href="blog-single-default.html">BLOG IMAGE POST</a></h2>


                </div>

                <!-- /POST ITEM -->





                <!-- POST ITEM -->

                <div class="blog-post-item">



                    <!-- IMAGE -->

                    <figure class="margin-bottom-20">

                        <img class="img-responsive" src="assets/images/demo/720x400/6-min.jpg" alt="">

                    </figure>



                    <h2><a href="blog-single-default.html">ANOTHER BLOG POST</a></h2>


                </div>

                <!-- /POST ITEM -->





                <!-- POST ITEM -->

                <div class="blog-post-item">



                    <!-- IMAGE -->

                    <figure class="margin-bottom-20">

                        <img class="img-responsive" src="assets/images/demo/720x400/7-min.jpg" alt="">

                    </figure>



                    <h2><a href="blog-single-default.html">ANOTHER BLOG POST</a></h2>


                </div>

                <!-- /POST ITEM -->

                <!-- POST ITEM -->

                <div class="blog-post-item">



                    <!-- IMAGE -->

                    <figure class="margin-bottom-20">

                        <img class="img-responsive" src="assets/images/demo/content_slider/lake.jpg" alt="">

                    </figure>



                    <h2><a href="blog-single-default.html">ANOTHER BLOG POST</a></h2>


                </div>

                <!-- /POST ITEM -->


            </div>







            <!-- PAGINATION -->

<!--            <div class="text-left">-->
<!---->
<!--                 Pagination Default -->
<!---->
<!--                <ul class="pagination nomargin">-->
<!---->
<!--                    <li><a href="#">&laquo;</a></li>-->
<!---->
<!--                    <li class="active"><a href="#">1</a></li>-->
<!---->
<!--                    <li><a href="#">2</a></li>-->
<!---->
<!--                    <li><a href="#">3</a></li>-->
<!---->
<!--                    <li><a href="#">4</a></li>-->
<!---->
<!--                    <li><a href="#">5</a></li>-->
<!---->
<!--                    <li><a href="#">&raquo;</a></li>-->
<!---->
<!--                </ul>-->
<!---->
<!--                <!-- /Pagination Default -->-->
<!---->
<!--            </div>-->

            <!-- /PAGINATION -->



        </div>

    </section>


    <?php include 'my_footer.php'; ?>
</div>

<!-- /wrapper -->





<!--

    SIDE PANEL



        sidepanel-dark 			= dark color

        sidepanel-light			= light color (white)

        sidepanel-theme-color		= theme color



        sidepanel-inverse		= By default, sidepanel is placed on right (left for RTL)

                        If you add "sidepanel-inverse", will be placed on left side (right on RTL).

-->

<div id="sidepanel" class="sidepanel-light">

    <a id="sidepanel_close" href="#"><!-- close -->

        <i class="glyphicon glyphicon-remove"></i>

    </a>



    <div class="sidepanel-content">

        <h2 class="sidepanel-title">Explore Smarty</h2>



        <!-- SIDE NAV -->

        <ul class="list-group">



            <li class="list-group-item">

                <a href="#">

                    <i class="ico-category et-heart"></i>

                    ABOUT US

                </a>

            </li>

            <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->

                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">

                    <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>

                    <i class="ico-category et-strategy"></i>

                    PORTFOLIO

                </a>

                <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->

                    <li><a href="#"><i class="fa fa-angle-right"></i> 1 COLUMN</a></li>

                    <li class="active">

                        <span class="badge">New</span>

                        <a href="#"><i class="fa fa-angle-right"></i> 2 COLUMNS</a>

                    </li>

                    <li><a href="#"><i class="fa fa-angle-right"></i> 3 COLUMNS</a></li>

                </ul>

            </li>

            <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->

                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">

                    <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>

                    <i class="ico-category et-trophy"></i>

                    PORTFOLIO

                </a>

                <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->

                    <li><a href="#"><i class="fa fa-angle-right"></i> SLIDER</a></li>

                    <li class="active"><a href="#"><i class="fa fa-angle-right"></i> HEADERS</a></li>

                    <li><a href="#"><i class="fa fa-angle-right"></i> FOOTERS</a></li>

                </ul>

            </li>

            <li class="list-group-item">

                <a href="#">

                    <i class="ico-category et-happy"></i>

                    BLOG

                </a>

            </li>

            <li class="list-group-item">

                <a href="#">

                    <i class="ico-category et-beaker"></i>

                    FEATURES

                </a>

            </li>

            <li class="list-group-item">

                <a href="#">

                    <i class="ico-category et-map-pin"></i>

                    CONTACT

                </a>

            </li>



        </ul>

        <!-- /SIDE NAV -->



        <!-- social icons -->

        <div class="text-center margin-bottom-30">



            <a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">

                <i class="icon-facebook"></i>

                <i class="icon-facebook"></i>

            </a>



            <a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">

                <i class="icon-twitter"></i>

                <i class="icon-twitter"></i>

            </a>



            <a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">

                <i class="icon-linkedin"></i>

                <i class="icon-linkedin"></i>

            </a>



            <a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">

                <i class="icon-rss"></i>

                <i class="icon-rss"></i>

            </a>



        </div>

        <!-- /social icons -->



    </div>



</div>

<!-- /SIDE PANEL -->





<!-- SCROLL TO TOP -->

<a href="#" id="toTop"></a>





<!-- PRELOADER -->

<div id="preloader">

    <div class="inner">

        <span class="loader"></span>

    </div>

</div><!-- /PRELOADER -->





<!-- JAVASCRIPT FILES -->

<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>

<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>



<script type="text/javascript" src="assets/js/scripts.js"></script>


<!-- REVOLUTION SLIDER -->

<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>



</body>

</html>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Lust Studio</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="preload" href="/css/app.css" as="style">
    <link rel="preload" href="/css/main.css" as="style">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animations.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/main.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-custom.js"></script>

    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

{{--    <script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}


</head>

<body>

<div class="preloader">
    <div class="preloader_image pulse"></div>
</div>

<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->


        <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
        <header class="page_header ds bottom_mask_add affix-top top-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                        <a href="/" class="logo">
                            <img src="images/logo_1.jpeg" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-7 col-1">
                        <div class="nav-wrap">

                            <!-- main nav start -->
                            <nav class="top-nav">
                                <ul class="nav sf-menu">
                                    <li class="{{ request()->routeIs('index') ? 'active' : ''}}">
                                        <a href="{{ route('index') }}">INICIO</a>
                                    </li>

                                    <li class="{{ request()->routeIs('about') ? 'active' : ''}}">
                                        <a href="{{ route('about') }}">NOSOTROS</a>
                                    </li>

                                    <li class="{{ request()->routeIs('faqs') ? 'active' : ''}}">
                                        <a href="{{ route('faqs') }}">PREGUNTAS FRECUENTES</a>
                                    </li>

                                    <li class="{{ request()->routeIs('contactanos.index') ? 'active' : ''}}">
                                        <a href="{{ route('contactanos.index') }}">CONTACTO</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                        <div class="top-includes">
                                    <div class="btn-contact">
                                    <a href="{{ route('contactanos.index') }}" class="btn btn-header-maincolor">contactar</a>
									</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header toggler -->
            <span class="toggle_menu"><span></span></span>
        </header>



        @yield('content')




        <footer class="page_footer ds top_mask_add s-pb-10 s-pt-70 s-pb-md-40 s-pt-md-85 s-pb-xl-140 s-pt-xl-145">
            <div class="container">
                <div class="row">
                    <div class="divider-20 d-none d-xl-block"></div>

                    <div class="col-12 text-center animate" data-animation="fadeInUp">

                        <div class="widget widget_social_buttons">
                            <a href="#" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
                            <a href="#" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
                            <a href="#" class="fa fa-google color-bg-icon rounded" title="google"></a>
                        </div>

                        <div class="widget logo">
                            <img class="footer__logo" src="images/logo_1.jpeg" alt="logo">
                        </div>

                        <div class="widget copyright">
                            <p>&copy; Copyright <span class="copyright_year">2023</span> All Rights Reserved</p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<script src="js/compressed.js"></script>
<script src="/js/main.js"></script>


</body>

</html>

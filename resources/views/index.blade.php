@extends('layouts.app')

@section('content')

    {{-- Section carousel --}}
    <section class="page_slider bottom_mask_subtract">
        <div class="flexslider nav-true">
            <ul class="slides">
                <li class="ds cover-image video-bg text-center">
                    <img src="images/home_4.jpeg" alt="img">
                    <div class="soc-buttons">
                        <span>follow:</span>
                        <span><a href="#" class="fa fa-facebook"></a></span>
                        <span><a href="#" class="fa fa-twitter"></a></span>
                        <span><a href="#" class="fa fa-google-plus"></a></span>
                        <span><a href="#" class="fa fa-youtube-play"></a></span>
                        <span><a href="#" class="fa fa-instagram"></a></span>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="d-inline-block">
                                                <h2 class="text-uppercase intro_featured_word">
                                                    lust studio
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="intro_layer mt-30" data-animation="fadeInUp">
                                            <div class="intro_after_featured_word">
                                                <a href="{{ route('contactanos.index') }}">Convierte en una modelo
                                                    webcam</a>
                                            </div>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>

                <li class="cover-image ds s-overlay text-center">
                    <img src="images/home_8.jpeg" alt="img">
                    <div class="soc-buttons">
                        <span>follow:</span>
                        <span><a href="#" class="fa fa-facebook"></a></span>
                        <span><a href="#" class="fa fa-twitter"></a></span>
                        <span><a href="#" class="fa fa-google-plus"></a></span>
                        <span><a href="#" class="fa fa-youtube-play"></a></span>
                        <span><a href="#" class="fa fa-instagram"></a></span>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="d-inline-block">
                                                <h2 class="text-uppercase intro_featured_word">
                                                    lust studio
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="intro_layer mt-30" data-animation="fadeInUp">
                                            <div class="intro_after_featured_word">
                                                <a href="{{ route('contactanos.index') }}">Convierte en una modelo
                                                    webcam</a>
                                            </div>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>

                <li class="cover-image ds s-overlay text-center">
                    <img src="images/home_2.jpeg" alt="img">
                    <div class="soc-buttons">
                        <span>follow:</span>
                        <span><a href="#" class="fa fa-facebook"></a></span>
                        <span><a href="#" class="fa fa-twitter"></a></span>
                        <span><a href="#" class="fa fa-google-plus"></a></span>
                        <span><a href="#" class="fa fa-youtube-play"></a></span>
                        <span><a href="#" class="fa fa-instagram"></a></span>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="d-inline-block">
                                                <h2 class="text-uppercase intro_featured_word">
                                                    lust studio
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="intro_layer mt-30" data-animation="fadeInUp">
                                            <div class="intro_after_featured_word">
                                                <a href="{{ route('contactanos.index') }}">Convierte en una modelo
                                                    webcam</a>
                                            </div>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
                <li class="cover-image ds s-overlay text-center">
                    <img src="images/home_3.jpeg" alt="img">
                    <div class="soc-buttons">
                        <span>follow:</span>
                        <span><a href="#" class="fa fa-facebook"></a></span>
                        <span><a href="#" class="fa fa-twitter"></a></span>
                        <span><a href="#" class="fa fa-google-plus"></a></span>
                        <span><a href="#" class="fa fa-youtube-play"></a></span>
                        <span><a href="#" class="fa fa-instagram"></a></span>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="d-inline-block">
                                                <h2 class="text-uppercase intro_featured_word">
                                                    lust studio
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="intro_layer mt-30" data-animation="fadeInUp">
                                            <div class="intro_after_featured_word">
                                                <a href="{{ route('contactanos.index') }}">Convierte en una modelo
                                                    webcam</a>
                                            </div>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
            </ul>
        </div> <!-- end of flexslider -->
    </section>


    {{-- Section card sliders --}}
    <section class="card-section post overflow-visible">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="owl-carousel" data-autoplay="true" data-margin="4" data-responsive-lg=""
                         data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="1" data-nav=""
                         data-loop="true">
                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-sack-dollar"></i>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <h4 class="entry-title">
                                    GENERA GRANDES CANTIDADES DE DINERO.
                                </h4>
                            </div>
                        </div>


                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-camera"></i>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <h4 class="entry-title">
                                    NO NECESITAS EXPERIENCIA PREVIA.
                                </h4>
                            </div>
                        </div>


                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-user-secret"></i>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <h4 class="entry-title">
                                    OFRECEMOS ABSOLUTA RESERVA Y SEGURIDAD.
                                </h4>
                            </div>
                        </div>


                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-bed"></i>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <h4 class="entry-title">
                                    AREAS CONFORTABLES PARA TRABAJAR.
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="quote"
             class="blockquote-section s-parallax s-overlay ds s-pt-85 s-pb-140 s-pb-md-170 s-pb-lg-80 s-pt-md-70 s-pt-xl-200 s-pb-xl-190">
        <div class="container animate" data-animation="fadeIn">
            <div class="row">
                <div class="col-xs-12 col-lg-10 offset-lg-1">
                    <div class="owl-carousel buttons-type home" data-loop="true" data-margin="0" data-nav="true"
                         data-dots="false" data-themeclass="entry-thumbnail-carousel" data-center="false" data-items="1"
                         data-autoplay="false" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1"
                         data-responsive-lg="1">
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<span class="title">MISIÓN</span>
                                                <a class="url fn n" href="{{ route('about') }}">LUST STUDIO</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    Somos una empresa comprometida con la dignificación del modelaje webcam como
                                    profesión, por eso formamos profesionales con los más altos estándares de calidad
                                    desde un enfoque humano.
                                </p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<span class="title">VISIÓN</span>
                                                <a class="url fn n" href="{{ route('about') }}">LUST STUDIO</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    <strong>LUST STUDIOS</strong> se proyecta a ser una de las empresas líderes del
                                    sector a nivel mundial y un
                                    referente importante para la evolución de la industria.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fw-divider-space hidden-below-lg pt-90"></div>
    </section>

    <section id="become-model" class="become-model s-py-115 s-pt-md-80 s-pb-md-90 s-pt-xl-155 s-pb-xl-145">
        <div class="fw-divider-space hidden-below-md mt-65"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-lg-8 text-center">
                    <h5 class="subtitle">únete</h5>
                    <h4 class="title">ahora</h4>
                    <p>
                        Trabaja con nosotros desde cualquiera de nuestras sedes.
                    </p>
                    <p>
                        Te facilitamos desempeñar tu trabajo en ambientes súper agradables que cuentan con total
                        privacidad, permitiéndote generar altos ingresos.
                    </p>
                    <a href="{{ route('contactanos.index') }}" class="btn btn-maincolor">únete ahora</a>
                </div>
            </div>
        </div>
    </section>

    <section class="card-section post overflow-visible">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="owl-carousel" data-autoplay="false" data-margin="4" data-responsive-lg="3"
                         data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="1" data-nav=""
                         data-loop="true">

                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-location-pin"></i>
                                                <h4 class="entry-title">Ubicación</h4>
												<a class="url fn n" href="https://goo.gl/maps/Ktf95r8pM9uijBiT6">Bogotá, d.c.</a>
											</span>
										</span>
                            </div>
                        </div>

                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-mail-bulk"></i>
                                                <h4 class="entry-title">Email</h4>
												<a class="url fn n" href="{{ route('contactanos.index') }}">luststudios2023@gmail.com</a>
											</span>
										</span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="entry-meta">
										<span class="byline">
											<span class="author vcard d-flex flex-column align-items-center">
												<i class="fa fa-phone"></i>
                                                <h4 class="entry-title">Teléfonos</h4>
												<a class="url fn n" href="#">+57 3225481295</a>
											</span>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maps-locations" class="ds ms page_map top_mask_subtract" data-draggable="false"
             data-scrollwheel="false">
        <div class="markers-locations">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2364.711816852219!2d-74.16066731611056!3d4.602014138890541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ef1d6390cb7%3A0xd9434057ade05f3f!2sCl.%2055a%20Sur%20%2368b-23%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1677791136461!5m2!1ses!2sco"
                width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- .marker -->
    </section>

@endsection

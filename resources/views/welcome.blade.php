<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('frontend.include._header')
    </head>
    <body>
     
    <div>
        @include('frontend.include._navbar')

        <!--============================
        =            Banner            =
        =============================-->

        <section class="banner-two bg-banner-two overlay-white-slant text-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Content Block -->
                        <div class="block">
                            <h4 style="margin-top:-120px;line-height: 35px;">Jutaan Sumber Daya Alam <br> untuk mewujudkan mimpi <br> bersama </h4>
                            <h6>Jutaan bisnis menggunakan Desaku untuk membuat ide-ide mereka jadi kenyataan</h6>
                            <!-- Action Button -->
                            <a href="#" class="btn btn-main-md">ayo mulai!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====  End of Banner  ====-->

        <!--===========================
        =            About            =
        ============================-->

        <section class="section about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 align-self-center">
                        <div class="image-block two bg-about">
                            <img class="img-fluid" src="{{ asset('assets/images/desaku/about.png')}}" alt="" style="border-radius:20px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 align-self-center ml-lg-auto">
                        <div class="content-block">
                            <h2>Tentang <span class="alternate">Desaku</span></h2>
                            <div class="description-one">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad
                                </p>
                            </div>
                            <div class="description-two">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim</p>
                            </div>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route('landing-page.about.index')}}" class="btn btn-main-md">Baca Selengkapnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====  End of About  ====-->

       <!--===========================
        =        cara kerja          =
        ============================-->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Cara Kerja <span class="alternate">Desaku</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <!--====  End of cara kerja  ====-->


       <!--===========================
        =           Album            =
        ============================-->

        <section class="speakers-full-width">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>Album <span class="alternate">Desaku</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Speaker Slider -->
                        <div class="speaker-slider">
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-one.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-two.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-three.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-four.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-five.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-one.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-two.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-two.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-four.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/speakers/speaker-full-five.jpg')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>GEORGE G. HERNANDEZ</h5>
                                    <p>CEO Rancom Motor</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====  End of Album  ====-->



        <!--==========================
        =            News            =
        ===========================-->

        <section class="news-hr section mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>Popular <span class="alternate">Desaku</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/news/post-thumb-hr-one.jpg')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents border-top">
                                <div class="post-title"><h6><a href="news-single.html">Default title here</a></h6></div>
                                <div class="post-exerpts">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                                    </p>
                                </div>
        
                                <div class="date">
                                    <h4>20<span>May</span></h4>
                                </div>
                                <div class="more">
                                    <a href="news-single.html">Show more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/news/post-thumb-hr-two.jpg')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents border-top">
                                <div class="post-title"><h6><a href="news-single.html">Default title here</a></h6></div>
                                <div class="post-exerpts">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                                    </p>
                                </div>
                                
                                <div class="date">
                                    <h4>20<span>May</span></h4>
                                </div>
                                <div class="more">
                                    <a href="news-single.html">Show more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/news/post-thumb-hr-three.jpg')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents">
                                <div class="post-title"><h6><a href="news-single.html">Default title here</a></h6></div>
                                <div class="post-exerpts">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                                    </p>
                                </div>
                                
                                <div class="date">
                                    <h4>20<span>May</span></h4>
                                </div>
                                <div class="more">
                                    <a href="news-single.html">Show more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/news/post-thumb-hr-four.jpg')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents">
                                <div class="post-title"><h6><a href="news-single.html">Default title here</a></h6></div>
                                <div class="post-exerpts">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                                    </p>
                                </div>
                                
                                <div class="date">
                                    <h4>20<span>May</span></h4>
                                </div>
                                <div class="more">
                                    <a href="news-single.html">Show more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
            
    <!--====  End of News  ====-->

        <!--=============================
        =            Feature            =
        ==============================-->

        <section class="ticket-feature">
            <div class="container-fluid m-0 p-0">
                <div class="row p-0 m-0">
                    <div class="col-lg-7 p-0 m-0">
                        <div class="block bg-timer overlay-dark text-center">
                            <div class="section-title white m-0">
                                <h3>Limited Audience <span class="alternate">Seats</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm</p>
                            </div>
                            <!-- Coundown Timer -->
                            <div class="timer"></div>
                            <a href="#" class="btn btn-main-md">Buy Ticket</a>
                        </div>
                    </div>
                    <div class="col-lg-5 p-0">
                        <div class="block-2">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <i class="fa fa-microphone"></i>
                                        <h5>8 Speakers</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <i class="fa fa-flag"></i>
                                        <h5>500 + Seats</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <i class="fa fa-ticket"></i>
                                        <h5>300 tickets</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <i class="fa fa-calendar"></i>
                                        <h5>3 days event</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====  End of Feature  ====-->


        
        @include('frontend.include._footer')
    </div>

      <!-- JAVASCRIPTS -->
      <!-- jQuey -->
      <script src="{{ asset('assets/eventre/plugins/jquery/jquery.js')}}"></script>
      <!-- Popper js -->
      <script src="{{ asset('assets/eventre/plugins/popper/popper.min.js')}}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('assets/eventre/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <!-- Smooth Scroll -->
      <script src="{{ asset('assets/eventre/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>  
      <!-- Isotope -->
      <script src="{{ asset('assets/eventre/plugins/isotope/mixitup.min.js')}}"></script>  
      <!-- Magnific Popup -->
      <script src="{{ asset('assets/eventre/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <!-- Slick Carousel -->
      <script src="{{ asset('assets/eventre/plugins/slick/slick.min.js')}}"></script>  
      <!-- SyoTimer -->
      <script src="{{ asset('assets/eventre/plugins/syotimer/jquery.syotimer.min.js')}}"></script>
      <!-- Custom Script -->
      <script src="{{ asset('assets/eventre/js/custom.js')}}"></script>

      @stack('footer-scripts')
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('frontend.include._header')
    </head>
    <body>
     
    <div>
        @include('frontend.include._navbar')

        <section class="banner bg-banner-one overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Content Block -->
                        <div class="block">
                            <!-- Coundown Timer -->
                            <div class="timer"></div>
                            <h1>Business</h1>
                            <h2>Conference 2017</h2>
                            <h6>02-05 July 2017 California</h6>
                            <!-- Action Button -->
                            <a href="#" class="btn btn-white-md">get ticket now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===========================
        =            About            =
        ============================-->

        <section class="section about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 align-self-center">
                        <div class="image-block bg-about">
                            <img class="img-fluid" src="{{ asset('assets/images/speakers/featured-speaker.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 align-self-center">
                        <div class="content-block">
                            <h2>About The <span class="alternate">Eventre</span></h2>
                            <div class="description-one">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
                                </p>
                            </div>
                            <div class="description-two">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                            </div>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-main-md">Buy ticket</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-transparent-md">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====  End of About  ====-->
        
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

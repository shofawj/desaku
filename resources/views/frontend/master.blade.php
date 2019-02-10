<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('frontend.include._header')
    </head>
    <body>
     
    <div>
        @include('frontend.include._navbar')

        <div>
          @yield('content')
        </div>
      
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

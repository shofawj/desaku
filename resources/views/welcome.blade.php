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
                                    Desaku merupakan membantu para petani menjual hasil sawah atau hasil kebun mereka. Jadi kami mengembangkan sebuah platform yang menjembatani antara petani (penjual) dan orang yang membutuhkan SDA (pembeli).
                                </p>
                            </div>
                            <div class="description-two">
                                <p></p>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" style="min-height:420px;box-shadow: 2px 13px 29px -8px rgba(194,194,194,1);">
                            <h3 class="text-center"> Pembelian </h3>
                            <div class="container mt-5">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-3">
                                        <p class="text-center">Cari Kebutuhan</p>
                                        <img src="{{ asset('assets/images/komponen/seo.svg')}}" class="ml-5 mt-3" alt="" width="150">
                                    </div>
                                    <div class="col-1 d-flex align-items-center">
                                        <img src="{{ asset('assets/images/komponen/arrow-point-to-right-1.svg')}}" alt="" width="15">
                                    </div>
                                    <div class="col-3">
                                        <p class="text-center">Pilih Kebutuhan</p>
                                        <img src="{{ asset('assets/images/komponen/rate.svg')}}" class="ml-5 mt-3" alt="" width="150" alt="">
                                    </div>
                                    <div class="col-1 d-flex align-items-center">
                                        <img src="{{ asset('assets/images/komponen/arrow-point-to-right-1.svg')}}" alt="" width="15">
                                    </div>
                                    <div class="col-3">
                                        <p class="text-center">Hubungani Penjual</p>
                                        <img src="{{ asset('assets/images/komponen/question.svg')}}" class="ml-5 mt-3" alt="" width="150" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="min-height:420px;box-shadow: 2px 13px 29px -8px rgba(194,194,194,1);">
                                <h3 class="text-center"> Penjualan </h3>
                                <div class="container mt-5">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-3">
                                            <p class="text-center">Isi Form</p>
                                            <img src="{{ asset('assets/images/komponen/form.svg')}}" class="ml-5 mt-3" alt="" width="150" alt="">
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/komponen/arrow-point-to-right-1.svg')}}" alt="" width="15">
                                        </div>
                                        <div class="col-3">
                                            <p class="text-center">Lakukan Verifikasi</p>
                                            <img src="{{ asset('assets/images/komponen/clipboard.svg')}}" class="ml-5 mt-3" alt="" width="150" alt="">
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/komponen/arrow-point-to-right-1.svg')}}" alt="" width="15">
                                        </div>
                                        <div class="col-3">
                                            <p class="text-center">Jual Hasil Sumber Daya Alam</p>
                                            <img src="{{ asset('assets/images/komponen/trade.svg')}}" class="ml-5 mt-3" alt="" width="150" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--====  End of cara kerja  ====-->


       <!--===========================
        =           Album            =
        ============================-->

        <section class="speakers-full-width mt-5">
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
                                <img src="{{ asset('assets/images/komponen/13.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Buah Naga</h5>
                                    <p>Desa Baribis</p>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/komponen/12.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Strawberry</h5>
                                    <p>Desa Tajur</p>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/komponen/13.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Buah Naga</h5>
                                    <p>Desa Baribis</p>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/komponen/11.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Jeruk Bergamot</h5>
                                    <p>Desa Balida</p>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/komponen/12.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Strawberry</h5>
                                    <p>Desa Tajur</p>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/komponen/13.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Buah Naga</h5>
                                    <p>Desa Baribis</p>
                                </div>
                            </div>
                            <div class="speaker-image">
                                <img src="{{ asset('assets/images/komponen/11.png')}}" alt="speaker" class="img-fluid">
                                <div class="primary-overlay text-center">
                                    <h5>Jeruk Bergamot</h5>
                                    <p>Desa Balida</p>
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
                                    <img src="{{ asset('assets/images/komponen/cermai.jpeg')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents border-top">
                                <div class="post-title"><h6><a href="news-single.html">Buah Cermai</a></h6></div>
                                <div class="post-exerpts">
                                    <p>
                                            cerme adalah nama sejenis pohon dengan buahnya sekali .. 
                                    </p>
                                </div>
        
                                <div class="date">
                                    <h4>20<span>Suka</span></h4>
                                </div>
                                <div class="more">
                                    <a href="{{ route('landing-page.article.index')}}">Lihat <br> Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/komponen/22.png')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents border-top">
                                <div class="post-title"><h6><a href="news-single.html">Bawang Merah</a></h6></div>
                                <div class="post-exerpts">
                                    <p>
                                        Bawang merah adalah salah satu bumbu masak utama ..
                                    </p>
                                </div>
                                
                                <div class="date">
                                    <h4>20<span>Suka</span></h4>
                                </div>
                                <div class="more">
                                    <a href="{{ route('landing-page.article.index')}}">Lihat <br> Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/komponen/23.png')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents">
                                <div class="post-title"><h6><a href="news-single.html">Kentang </a></h6></div>
                                <div class="post-exerpts">
                                    <p>
                                        Kentang (Solanum tuberosum L.) adalah tanaman dari suku Solanaceae yang memiliki ..
                                    </p>
                                </div>
                                
                                <div class="date">
                                    <h4>20<span>Suka</span></h4>
                                </div>
                                <div class="more">
                                    <a href="{{ route('landing-page.article.index')}}">Lihat <br> selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="news-post-hr">
                            <div class="post-thumb">
                                <a href="news-single.html">
                                    <img src="{{ asset('assets/images/komponen/21.png')}}" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-contents">
                                <div class="post-title"><h6><a href="news-single.html">Semangka beauty</a></h6></div>
                                <div class="post-exerpts">
                                    <p>
                                        Semangka sweet beauty ini memiliki ciri-ciri pada
                                        kulit buahnya yang sangat tebal ..
                                    </p>
                                </div>
        
                                <div class="date">
                                    <h4>20<span>Suka</span></h4>
                                </div>
                                <div class="more">
                                    <a href="{{ route('landing-page.article.index')}}">Lihat <br> Selengkapnya</a>
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
                                <h3>Potongan Harga <span class="alternate">Strawberry</span></h3>
                                <p>Terbatas untuk 20 orang pembeli pertama</p>
                            </div>
                            <!-- Coundown Timer -->
                            <div class="timer"></div>
                            <a href="{{ route('landing-page.article.index')}}" class="btn btn-main-md">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-5 p-0">
                        <div class="block-2">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <img src="{{ asset('assets/images/komponen/visitor.svg')}}" alt="" class="mb-3">
                                        <h5>800.000 Pengunjung</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <img src="{{ asset('assets/images/komponen/charts.svg')}}" alt="" class="mb-3">
                                        <h5>500+ Transaksi</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <img src="{{ asset('assets/images/komponen/fruit.svg')}}" alt="" class="mb-3">
                                        <h5>200+ SDA</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- Service item -->
                                    <div class="service-item">
                                        <img src="{{ asset('assets/images/komponen/village.svg')}}" alt="" class="mb-3">
                                        <h5>300+ Desa Terdaftar</h5>
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

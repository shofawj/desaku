@extends('frontend.master')

@section('content')

<section class="banner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card-banner">
                    <div class="container-fluid">
                        <div class="row">
                            {{-- image gallery --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="image-gallery">

                                    <main class="primary"
                                        style="background-image: url('http://placekitten.com/410/500');"></main>
                                        
                                        <div class="thumbnails">
                                                <a href="#" class="selected thumbnail" data-big="http://placekitten.com/420/600">
                                                  <div class="thumbnail-image" style="background-image: url(http://placekitten.com/420/600)"></div>
                                                </a>
                                                <a href="#" class="thumbnail" data-big="http://placekitten.com/450/600">
                                                  <div class="thumbnail-image" style="background-image: url(http://placekitten.com/450/600)"></div>
                                                </a>
                                                <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
                                                  <div class="thumbnail-image" style="background-image: url(http://placekitten.com/460/700)"></div>
                                                </a>
                                                <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
                                                    <div class="thumbnail-image" style="background-image: url(http://placekitten.com/460/700)"></div>
                                                  </a>
                                                  <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
                                                    <div class="thumbnail-image" style="background-image: url(http://placekitten.com/460/700)"></div>
                                                  </a>
                                              </div>
                                        
                                    </div>
                            </div>
                            {{-- End --}}
                            {{-- Section  --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="caption-section">
                                    <p>Kentang Lokal</p>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>

                                            <span class="ulasan">
                                                <label for="">
                                                    &nbsp;1000 Ulasan
                                                </label>
                                            </span>
                                        </ul>
                                    </div>

                                    <div class="price">
                                        <p>Rp. 50.000/kg</p>
                                    </div>
                                    <div class="location">
                                        <p>Desa Gayo di Papua Barat</p>
                                    </div>

                                    <div class="group-button">

                                        <button type="submit" class="btn btn-submit">
                                            <h4>Hubungi Penjual</h4>
                                        </button>

                                    </div>

                                    <div class="group-button">

                                        <button type="submit" class="btn btn-chart">
                                            <h4>Tambahkan ke Keranjang</h4>
                                        </button>

                                    </div>
                                </div>
                            </div>
                            {{-- End section --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- CSS --}}

@push('header-scripts')
<style>
    .banner-page {
        width: 100%;
        height: auto;
        padding: 2%;
    }

    .banner-page .card-banner {
        width: 100%;
        height: auto;
        -webkit-box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        -moz-box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        border: none;
        padding: 2%;
        border-radius: 16px;
    }

    .image-gallery {
        width: 100%;
        height: 350px;
    }

    .caption-section {
        width: 100%;
        height: auto;
    }

    .caption-section p {
        font-size: 1.5vw;
        margin-top: 6%;
    }

    .rating {
        width: 100%;
        margin-top: 1%;
        height: auto;
        border-bottom: 2px solid #ecf0f1;
    }

    .rating ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .rating li {
        color: yellow;
    }

    .rating li:hover~li {
        color: grey;
    }

    .ulasan label {
        font-size: 1vw;
    }

    .price {
        margin-top: 8%;
        width: 100%;
        height: auto;
    }

    .price p {
        font-size: 1.5vw;
        font-weight: bold;
        color: #e67e22;
    }

    .location p {
        font-size: 1vw;
        margin-top: 2%;
    }

    .group-button {
        margin-top: 4%;
    }

    .group-button .btn-submit {
        width: 100%;
        background: #e67e22;
        color: white;
        box-shadow: 0px 10px 40px -10px rgba(143, 141, 143, 1);

    }

    .group-button .btn-submit h4 {
        font-size: 25px;
        margin-top: 1%;
        font-weight: bold;
        color: #ffffff;
        text-transform: capitalize;
    }

    .group-button .btn-chart {
        width: 100%;
        background: #ffffff;
        color: white;
        box-shadow: 0px 10px 40px -10px rgba(143, 141, 143, 1);

    }

    .group-button .btn-chart h4 {
        font-size: 25px;
        margin-top: 1%;
        font-weight: bold;
        color: #e67e22;
        text-transform: capitalize;
    }

    .image-gallery {
        margin: 0 auto;
        display: table;
    }

    .primary,
    .thumbnails {
        display: inline-flex;
    }

    .thumbnails {
        width: 100px;

    }

    .primary {
        width: 100%;
        height: 300px;
        border: 1px solid #000000;
        background-color: #cccccc;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .thumbnail:hover .thumbnail-image,
    .selected .thumbnail-image {
        border: 4px solid red;
    }

    .thumbnail-image {
        width: 100px;
        height: 100px;
        
        margin: 20px auto;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        border: 1px solid transparent;
    }

</style>

@endpush

<script>
        $('.thumbnail').on('click', function() {
          let clicked = $(this);
          let newSelection = clicked.data('big');
          let $img = $('.primary').css("background-image","url(" + newSelection + ")");
          clicked.parent().find('.thumbnail').removeClass('selected');
          clicked.addClass('selected');
          $('.primary').empty().append($img.hide().fadeIn('slow'));
        });
        </script>
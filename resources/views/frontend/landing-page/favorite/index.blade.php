@extends('frontend.master')


@section('content')
{{--  --}}
<div class="container">
<div class="row">
    <div class="col-md-8 col-sm-8">
        <br>
        <br>
        <div class="item-fav">
            <div class="name">
                <p>Penjual : <b>Marfuah</b></p>
                <p>Desa Gayo di Papua Barat</p>
                
            </div>
            <br>
            {{-- product --}}
            <div class="product-fav">
                <div class="row">
                    <div class="col-md-2">
                        <img src="" alt="">
                    </div>
                    <div class="col-md-10">
                        <div class="description">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
            <br>
            <br>
        <div class="content-fav">
               
                <div class="sidebar">
                        <!-- Search Widget -->
                        <div class="widget search p-0">
                            <div class="input-group">
                                <input type="text" class="form-control main m-0" id="expire" placeholder="Search...">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <!-- Category Widget -->
                        <div class="widget category">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Kategori</h5>
                            <ul class="category-list m-0 p-0">
                                <li><a href="">Buah - buahan <span class="float-right">(6)</span></a></li>
                                <li><a href="">Kacang - kacangan <span class="float-right">(9)</span></a></li>
                                <li><a href="">Sayur - sayuran<span class="float-right">(3)</span></a></li>
                                <li><a href="">Hewan ternak<span class="float-right">(5)</span></a></li>
                                <li><a href="">Biji - bijian<span class="float-right">(7)</span></a></li>
                            </ul>
                        </div>
                        <!-- Latest post -->
                        <div class="widget latest-post">
                            <h5 class="widget-header">Popular</h5>
                            <!-- Post -->
                            <div class="media">
                                <img src="images/news/post-thumb-sm-one.jpg" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
                                    <p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
                                    <a href="" class="btn btn-detail">Selengkapnya</a>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="images/news/post-thumb-sm-two.jpg" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
                                    <p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
                                    <a href="" class="btn btn-detail">Selengkapnya</a>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="images/news/post-thumb-sm-three.jpg" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
                                    <p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
                                    <a href="" class="btn btn-detail">Selengkapnya</a>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="images/news/post-thumb-sm-four.jpg" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
                                    <p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
                                    <a href="" class="btn btn-detail">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- Popular Tag Widget -->

                    </div>
        </div>
    </div>
</div>
</div>

{{--  --}}
@endsection

@push('header-scripts')
<style>

    .item-fav{
        width: 100%;
        height: auto;
        -webkit-box-shadow: -1px -2px 33px 0px rgba(210,215,211,1);
-moz-box-shadow: -1px -2px 33px 0px rgba(210,215,211,1);
box-shadow: -1px -2px 33px 0px rgba(210,215,211,1);
padding: 2%;
    }

    .item-fav .name{
        width: 100%;
        height: auto;
        border-bottom: 1px solid #000000;
        
    }

    .item-fav .name p {
        font-size: 1vw;
        margin-bottom: 1%;
    }
    .item-fav .name p b {
        color: #000000;
        font-size: 1vw;
    }

    .item-fav .product-fav{
        width: 100%;
        height: auto;
        border: 1px solid #000000;
    }

    .item-fav .product-fav .description{
        width: 100%;
        height: 100px ;
        border: 1px solid #000000;
    }

    .content-fav{
        width: 100%;
        height: auto;
    }
</style>

@endpush
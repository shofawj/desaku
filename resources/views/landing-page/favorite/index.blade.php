@extends('landing-page.master')


@section('content')
{{--  --}}
<div class="container">
<div class="row">
    <div class="col-md-8 col-sm-8">
        <br>
        <br>
        <div class="item-fav">
            <div class="name">
                <p>Penjual : <b>Pak Marfuah</b></p>
                <p>Desa Gayo di Papua Barat</p>
                
            </div>
            <br>
            {{-- product --}}
            <div class="product-fav">
                <div class="row">
                    <div class="col-md-2">
                       <div class="image-product">
                       <img src="{{ asset('assets/images/desaku/3-sm.jpeg')}}" alt="">
                       </div>
                    </div>
                    <div class="col-md-10">
                        <div class="description">
                            <div class="title">
                                <p> tumbuhan yang berkhasiat obat, buah ini merupakan Buah yang memiliki rasa yang asam. </p>
                            </div>
                            <br>
                            <div class="price">
                                <p>Rp 180.000/kg</p>
                                {{-- input plus minus item --}}
                                
                                <input type="button" class="btn btn-default pull-left" style="margin-right: 0%; border-radius:10px;  background:transparent; border:1px solid #bdc3c7;" 
                                id="subs"
                                value="-"
                                /> 
                                &nbsp;
                                &nbsp;
                                <input type="text" style="width: 40px;text-align: center; margin: 0px;" 
                                name="noOfRoom" class="onlyNumber form-control pull-left" 
                                id="noOfRoom" 
                                value="0" 
                                />
                                &nbsp;
                                &nbsp;
                                <input type="button" class="btn btn-default"  style="margin-right: 0%; border-radius:10px; background:transparent; border:1px solid #bdc3c7;"
                                id="adds"
                                value="+" 
                                />

                                                                {{--  --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <div class="total">
                            <p>Total : Rp. 180.000 </p>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success">
                                Melakukan pemesanan ke pemilik
                            </button>
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
                            <h5 class="widget-header">Posting Terbaru</h5>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/3-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Apel Manalagi</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/2-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Strawberry</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/3-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Apel Manalagi</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                            <i class="fa fa-heart-o"></i>
                                            <a href="#">350</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-comments-o"></i>
                                            <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/4-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Jeruk</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
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
        border-bottom: 2px solid #bdc3c7;
        
    }

    .item-fav .name p {
        font-size: 0.8vw;
        margin-bottom: 1%;
    }
    .item-fav .name p b {
        color: #000000;
        font-size: 1vw;
    }

    .item-fav .product-fav{
        width: 100%;
        height: auto;
    }

    .item-fav .product-fav .description{
        width: 100%;
        height: auto ;
    }

    .item-fav .product-fav .description .title{
        width: 100%;
        height: auto;
    }

    .item-fav .product-fav .description .price{
        width: 100%;
        height: auto;
        margin-top: 2%;
        display: inline-flex;
    }

    
    .price p {
        color:  #e67e22;
        font-size: 1vw;
        font-weight: bold;
        margin-right: 55%;
        
    }

    .total{
        width: 100%;
        height: auto;
        border-top: 1px solid #bdc3c7;
    }

    .total .btn {
        width: 100%;
    }

    .total p {
        float: right;
        color: #000000;
    }

    .product-fav .image-product{
        width: 100%;
        height: 100px;
    }

    .product-fav .image-product img {
        width: 100%;
        height: 100px;
        display: block;
  margin-left: auto;
  margin-right: auto;
    }
    .content-fav{
        width: 100%;
        height: auto;
    }
</style>

@endpush
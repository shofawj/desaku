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
                                                <svg height="25" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="25" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="25" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="25" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="25" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                        </ul>
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
        border: 1px solid #000000;
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
        height: 400px;
        border: 1px solid #000000;
    }

    .caption-section {
        width: 100%;
        height: 400px;
        border: 1px solid #000000;
    }

    .caption-section p {
        margin-top: 6%;
        font-size: 1.5vw;
    }

    .rating {
        width: 100%;
        margin-top: 1%;
        height: auto;
        border: 1px solid #000000;
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

</style>

@endpush

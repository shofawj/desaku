@extends('frontend.master')

@section('content')


<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Kategori</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--================================
=            News Posts            =
=================================-->

<section class="news section">
	<div class="container">
		<div class="row mt-30">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="block">
					<div class="row">
						<div class="col-md-6 col-sm-8 col-10 m-auto">
							<div class="blog-post">
								<div class="post-thumb">
									<a href="{{ route('landing-page.article.index')}}">
										<img src="{{ asset('assets/images/desaku/12.jpeg')}}" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="date">
										<h4>20<span>May</span></h4>
									</div>
									<div class="post-title">
										<h2><a href="/article">Buah Cermai</a></h2>
									</div>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="list-inline-item">
												<i class="fa fa-home"></i>
												<a href="#">Desa Hago</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-heart-o"></i>
												<a href="#">350</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-comments-o"></i>
												<a href="#">30</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-8 col-10 m-auto">
							<div class="blog-post">
								<div class="post-thumb">
									<a href="{{ route('landing-page.article.index')}}">
										<img src="{{ asset('assets/images/desaku/2.jpeg')}}" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="date">
										<h4>20<span>May</span></h4>
									</div>
									<div class="post-title">
										<h2><a href="{{ route('landing-page.article.index')}}">Buah Alpukat</a></h2>
									</div>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="list-inline-item">
												<i class="fa fa-home"></i>
												<a href="#">Desa Hago</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-heart-o"></i>
												<a href="#">350</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-comments-o"></i>
												<a href="#">30</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 m-md-auto col-sm-8 col-10 m-auto">
							<div class="blog-post">
								<div class="post-thumb">
									<a href="{{ route('landing-page.article.index')}}">
										<img src="{{ asset('assets/images/desaku/3.jpeg')}}" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="date">
										<h4>20<span>May</span></h4>
									</div>
									<div class="post-title">
										<h2><a href="{{ route('landing-page.article.index')}}">Bawang Merah</a></h2>
									</div>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="list-inline-item">
												<i class="fa fa-home"></i>
												<a href="#">Desa Hago</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-heart-o"></i>
												<a href="#">350</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-comments-o"></i>
												<a href="#">30</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-8 col-10 m-auto">
							<div class="blog-post">
								<div class="post-thumb">
									<a href="{{ route('landing-page.article.index')}}">
										<img src="{{ asset('assets/images/desaku/4.jpeg')}}" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="date">
										<h4>20<span>May</span></h4>
									</div>
									<div class="post-title">
										<h2><a href="{{ route('landing-page.article.index')}}">Buah Cherry</a></h2>
									</div>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="list-inline-item">
												<i class="fa fa-home"></i>
												<a href="#">Desa Hago</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-heart-o"></i>
												<a href="#">350</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-comments-o"></i>
												<a href="#">30</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-8 col-10 m-auto">
							<div class="blog-post">
								<div class="post-thumb">
									<a href="{{ route('landing-page.article.index')}}">
										<img src="{{ asset('assets/images/desaku/5.jpeg')}}" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="date">
										<h4>20<span>May</span></h4>
									</div>
									<div class="post-title">
										<h2><a href="{{ route('landing-page.article.index')}}">Buah Strawberry</a></h2>
									</div>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="list-inline-item">
												<i class="fa fa-home"></i>
												<a href="#">Desa Hago</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-heart-o"></i>
												<a href="#">350</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-comments-o"></i>
												<a href="#">30</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 m-md-auto col-sm-8 col-10 m-auto">
							<div class="blog-post">
								<div class="post-thumb">
									<a href="{{ route('landing-page.article.index')}}">
										<img src="{{ asset('assets/images/desaku/6.jpeg')}}" alt="post-image" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="date">
										<h4>20<span>May</span></h4>
									</div>
									<div class="post-title">
										<h2><a href="{{ route('landing-page.article.index')}}">Buah Tomat</a></h2>
									</div>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="list-inline-item">
												<i class="fa fa-home"></i>
												<a href="#">Desa Hago</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-heart-o"></i>
												<a href="#">350</a>
											</li>
											<li class="list-inline-item">
												<i class="fa fa-comments-o"></i>
												<a href="#">30</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<!-- Pagination -->
							<nav>
							  <ul class="pagination">
							  	<li class="page-item">
							      <a class="page-link" href="#" aria-label="prev">
							        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
							        <span class="sr-only">prev</span>
							      </a>
							    </li>
							    <li class="page-item active"><a class="page-link" href="#">1</a></li>
							    <li class="page-item"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#" aria-label="Next">
							        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
							        <span class="sr-only">Next</span>
							      </a>
							    </li>
							  </ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-10 mx-auto">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control main m-0" id="expire" placeholder="Cari...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Kategori</h5>
						<ul class="category-list m-0 p-0">
							<li><a href="">Buah-Buahan<span class="float-right">(6)</span></a></li>
							<li><a href="">Kacang-Kacangan<span class="float-right">(9)</span></a></li>
							<li><a href="">Sayur-Sayuran<span class="float-right">(3)</span></a></li>
							<li><a href="">Hewan Ternak<span class="float-right">(5)</span></a></li>
							<li><a href="">Biji-Bijian<span class="float-right">(7)</span></a></li>
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
					<div class="widget tags">
						<!-- Widget Header -->
						<h5 class="widget-header">Popular Tags</h5>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#">Buah Naga</a></li>
							<li class="list-inline-item"><a href="#">Kentang</a></li>
							<li class="list-inline-item"><a href="#">Bawang Merah</a></li>
							<li class="list-inline-item"><a href="#">Lemon</a></li>
							<li class="list-inline-item"><a href="#">Jeruk</a></li>
							<li class="list-inline-item"><a href="#">Strawberry</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of News Posts  ====-->


@endsection
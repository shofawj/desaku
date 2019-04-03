@extends('frontend.master')

@section('content')

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>About Us</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="{{ asset('assets/images/komponen/1.png')}}" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2>Tentang <span class="alternate">Desaku</span></h2>
					<div class="description-one">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
						</p>
					</div>
					<div class="description-two">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--=================================
=            Testimonial            =
==================================-->

<section class="section testimonial">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h3>Apa kata<span class="alternate"> Mereka?</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti aliquid vero harum rerum voluptates, ab, ullam.</p>
					</div>
				</div>
			</div>
			<div class="row mt-20">
				<div class="col-lg-4 col-md-6 mb-20">
					<!-- Testimonial -->
					<div class="testimonial-item">
						<!-- Given Comment -->
						<div class="comment">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate modi sunt placeat in vel illo dolorem, atque maxime voluptates optio fugit iure cum ipsa quo quaerat! Veritatis, modi. Laudantium provident deleniti earum voluptas delectus, labore dolor dolorem amet expedita.</p>
						</div>
						<div class="person">
							<div class="media">
								<!-- Person Image -->
								<img src="{{ asset('assets/images/speakers/speaker-thumb-three.jpg')}}" alt="person-image">
								<div class="media-body">
									<!-- Person Name -->
									<div class="name"><p>Espen Brunberg</p></div>
									<!-- Profession -->
									<div class="profession"><p>Web Developer</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- Testimonial -->
					<div class="testimonial-item">
						<!-- Given Comment -->
						<div class="comment">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate modi sunt placeat in vel illo dolorem, atque maxime voluptates optio fugit iure cum ipsa quo quaerat! Veritatis, modi. Laudantium provident deleniti earum voluptas delectus, labore dolor dolorem amet expedita.</p>
						</div>
						<div class="person">
							<div class="media">
								<!-- Person Image -->
								<img src="{{ asset('assets/images/speakers/speaker-thumb-one.jpg')}}" alt="person-image">
								<div class="media-body">
									<!-- Person Name -->
									<div class="name"><p>Kaite Stricker</p></div>
									<!-- Profession -->
									<div class="profession"><p>Designer</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- Testimonial -->
					<div class="testimonial-item">
						<!-- Given Comment -->
						<div class="comment">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate modi sunt placeat in vel illo dolorem, atque maxime voluptates optio fugit iure cum ipsa quo quaerat! Veritatis, modi. Laudantium provident deleniti earum voluptas delectus, labore dolor dolorem amet expedita.</p>
						</div>
						<div class="person">
							<div class="media">
								<!-- Person Image -->
								<img src="{{ asset('assets/images/speakers/speaker-thumb-five.jpg')}}" alt="person-image">
								<div class="media-body">
									<!-- Person Name -->
									<div class="name"><p>Adam Smith</p></div>
									<!-- Profession -->
									<div class="profession"><p>Web Developer</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--====  End of Testimonial  ====-->

@endsection
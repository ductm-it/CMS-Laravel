@extends('layouts.full')

@section('content')
	<!-- main header area end -->

	<!--Main Slider-->
	<section class="main-banner banner">
		<div class="rev_slider_wrapper">
			<div id="main_slider" class="rev_slider" data-version="5.0">

				<ul>
					<li data-index='rs-355' class="slide_show slide_1" data-transition='slidingoverlayright'
						data-slotamount='default' data-easein='default' data-easeout='default'
						data-masterspeed='default' data-rotate='0' data-saveperformance='off'
						data-title='Slide Boxes' data-description=''>
						<!-- Slide_show -->
						<img src="images/slider/slider-1.jpg" alt="" data-bgposition="center center"
							data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
						<div class="main_heading tp-caption tp-resizeme" data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-50" data-whitespace="nowrap" data-transform_idle="o:1;"
							data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
							data-transform_out="y:[100%];s:1000;s:1000;"
							data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000"
							data-splitin="none" data-splitout="none">
							<div class="banner-title">Your Special Holiday</div>
						</div>
						<div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
							data-voffset="50" data-transform_idle="o:1;"
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
							data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
							<div class="banner-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
							</div>
						</div>
						<div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
							data-voffset="140" data-transform_idle="o:1;"
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
							data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
							<div class="banner-btn">
								<a href="#">Contact Now</a>
							</div>
						</div>
					</li> <!-- /Slide_show -->

					<li data-index='rs-356' class="slide_show slide_2" data-transition='slidingoverlayleft'
						data-slotamount='default' data-easein='default' data-easeout='default'
						data-masterspeed='default' data-rotate='0' data-saveperformance='off'
						data-title='Slide Slots vertical' data-description=''>
						<!-- Slide2 -->

						<img src="images/slider/slider-2.jpg" alt="" data-bgposition="center center"
							data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

						<div class="main_heading tp-caption tp-resizeme" data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-50" data-whitespace="nowrap" data-transform_idle="o:1;"
							data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
							data-transform_out="y:[100%];s:1000;s:1000;"
							data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000"
							data-splitin="none" data-splitout="none">
							<div class="banner-title">Your Special Holiday</div>
						</div>
						<div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
							data-voffset="50" data-transform_idle="o:1;"
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
							data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
							<div class="banner-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
							</div>
						</div>
						<div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
							data-voffset="140" data-transform_idle="o:1;"
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
							data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
							<div class="banner-btn">
								<a href="#">Contact Now</a>
							</div>
						</div>

					</li> <!-- /Slide2 -->
				</ul>
			</div> <!-- /main_slider -->
		</div><!-- /rev_slider_wrapper -->
	</section>
	<!--Main Slider End-->

	<!-- search service -->
	<section class="search-service">
		<div class="container">
			<div class="search-service-bg">
				<div class="service-content">
					<input type="text" name="date" placeholder="Araival date" id="datepicker">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<input type="text" name="date" placeholder="Departure date" id="datepickerone">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<select class="custom-select-box">
						<option>Adults</option>
						<option>18 years</option>
						<option>20 years</option>
						<option>25 years</option>
						<option>30 years</option>
					</select>
					<select class="custom-select-box">
						<option>Children</option>
						<option>5 years</option>
						<option>8 years</option>
						<option>12 years</option>
						<option>15 years</option>
					</select>
					<a href="#">Check Availability</a>
				</div>
			</div>
		</div>
	</section>
	<!-- search service end -->

	<!-- service section -->
	<section class="service-section">
		<div class="container">
			<div class="service-title text-center">
				<div class="section-title">Room <span>&</span> Suits</div>
				<div class="title">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="img-box">
							<figure><a href="rooms-detail.html"><img src="images/service/service-1.jpg" alt=""></a>
							</figure>
						</div>
						<div class="service-content">
							<a href="rooms-detail.html">
								<h3>Luxury Double Bed</h3>
							</a>
							<div class="text"><span>$250</span> / Night</div>
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="img-box">
							<figure><a href="rooms-detail.html"><img src="images/service/service-2.jpg" alt=""></a>
							</figure>
						</div>
						<div class="service-content">
							<a href="rooms-detail.html">
								<h3>Deluxe Bungalow</h3>
							</a>
							<div class="text"><span>$250</span> / Night</div>
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="img-box">
							<figure><a href="rooms-detail.html"><img src="images/service/service-3.jpg" alt=""></a>
							</figure>
						</div>
						<div class="service-content">
							<a href="rooms-detail.html">
								<h3>Ocean View Condo</h3>
							</a>
							<div class="text"><span>$250</span> / Night</div>
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- service section end -->

	<!-- about section -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="about-content">
					<div class="section-title">About <span>Albergo</span></div>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
						anim id est laborum. Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium
						doloremque laudantium.</p>
					<ul class="list">
						<li>Morbi fermentum felis nec</li>
						<li>Morbi fermentum felis nec gravida tempus.</li>
						<li>Morbi fermentum felis nec gravida</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- about section end -->

	<!-- our-speciality section -->
	<section class="our-speciality">
		<div class="container">
			<div class="speciality-title text-center">
				<div class="section-title">Our Speciality</div>
				<div class="title">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="inner-box">
							<a href="#">
								<div class="img-box">
									<figure><img src="images/home/special-1.jpg" alt=""></figure>
								</div>
								<div class="overlay-box">
									<div class="overlay-inner">
									</div>
								</div>
							</a>
						</div>
						<div class="img-title">Delious Food</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="inner-box">
							<a href="#">
								<div class="img-box">
									<figure><img src="images/home/special-2.jpg" alt=""></figure>
								</div>
								<div class="overlay-box">
									<div class="overlay-inner">
									</div>
								</div>
							</a>
						</div>
						<div class="img-title">Fitness Gym</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="inner-box">
							<a href="#">
								<div class="img-box">
									<figure><img src="images/home/special-3.jpg" alt=""></figure>
								</div>
								<div class="overlay-box">
									<div class="overlay-inner">
									</div>
								</div>
							</a>
						</div>
						<div class="img-title">Restaurant</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="inner-box">
							<a href="#">
								<div class="img-box">
									<figure><img src="images/home/special-4.jpg" alt=""></figure>
								</div>
								<div class="overlay-box">
									<div class="overlay-inner">
									</div>
								</div>
							</a>
						</div>
						<div class="img-title">Beauty Spa</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our-speciality section end -->

	<!-- img-gallery section -->
	<section class="img-gallery text-center">
		<div class="container-fullwidth">
			<div class="gallery-title">
				<div class="section-title">Our Gallery</div>
				<div class="title">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</div>
			</div>
			<ul class="image-slider">
				<li>
					<div class="single-item">
						<div class="img-holder">
							<figure><img src="images/gallery/1.jpg" alt=""></figure>
							<div class="overlay">
								<div class="box">
									<div class="content">
										<a href="images/gallery/1.jpg" class="fancybox"><i class="fa fa-plus"
												aria-hidden="true"></i></a>
										<div class="text">Photo tytle here</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="single-item">
						<div class="img-holder">
							<figure><img src="images/gallery/2.jpg" alt=""></figure>
							<div class="overlay">
								<div class="box">
									<div class="content">
										<a href="images/gallery/2.jpg" class="fancybox"><i class="fa fa-plus"
												aria-hidden="true"></i></a>
										<div class="text">Photo tytle here</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="single-item">
						<div class="img-holder">
							<figure><img src="images/gallery/3.jpg" alt=""></figure>
							<div class="overlay">
								<div class="box">
									<div class="content">
										<a href="images/gallery/3.jpg" class="fancybox"><i class="fa fa-plus"
												aria-hidden="true"></i></a>
										<div class="text">Photo tytle here</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="single-item">
						<div class="img-holder">
							<figure><img src="images/gallery/4.jpg" alt=""></figure>
							<div class="overlay">
								<div class="box">
									<div class="content">
										<a href="images/gallery/4.jpg" class="fancybox"><i class="fa fa-plus"
												aria-hidden="true"></i></a>
										<div class="text">Photo tytle here</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="single-item">
						<div class="img-holder">
							<figure><img src="images/gallery/5.jpg" alt=""></figure>
							<div class="overlay">
								<div class="box">
									<div class="content">
										<a href="images/gallery/5.jpg" class="fancybox"><i class="fa fa-plus"
												aria-hidden="true"></i></a>
										<div class="text">Photo tytle here</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- img-gallery section end -->

	<!-- testimonials section -->
	<section class="testimonials-section">
		<div class="container">
			<div class="testimonials-title text-center">
				<div class="section-title">Our Testimonial</div>
				<div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</div>
			</div>
			<div class="three-column-carousel">
				<div class="single-item">
					<div class="text">
						Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore
						dolor magna aliqua enim ad minim veniam quis nos
						trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
						dolor in reprehender.
					</div>
					<div class="testimonial-autor">
						<div class="img-box">
							<figure><img src="images/testimonial/1.png" alt=""></figure>
						</div>
						<div class="autor-content">
							<h4>Julia Robertson</h4>
							<span>Happy Client</span>
						</div>
					</div>
				</div>
				<div class="single-item">
					<div class="text">
						Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore
						dolor magna aliqua enim ad minim veniam quis nos
						trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
						dolor in reprehender.
					</div>
					<div class="testimonial-autor">
						<div class="img-box">
							<figure><img src="images/testimonial/2.png" alt=""></figure>
						</div>
						<div class="autor-content">
							<h4>Julia Robertson</h4>
							<span>Happy Client</span>
						</div>
					</div>
				</div>
				<div class="single-item">
					<div class="text">
						Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore
						dolor magna aliqua enim ad minim veniam quis nos
						trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
						dolor in reprehender.
					</div>
					<div class="testimonial-autor">
						<div class="img-box">
							<figure><img src="images/testimonial/3.png" alt=""></figure>
						</div>
						<div class="autor-content">
							<h4>Julia Robertson</h4>
							<span>Happy Client</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonials section end -->

	<!-- fact counter section -->
	<section class="fact-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item one">
						<article class="column wow fadeIn" data-wow-duration="0ms">
							<div class="count-outer"><span class="count-text" data-speed="1500"
									data-stop="250">0</span></div>
							<div class="text">Five StarRating</div>
						</article>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item two">
						<article class="column wow fadeIn" data-wow-duration="0ms">
							<div class="count-outer"><span class="count-text" data-speed="1500"
									data-stop="1250">0</span></div>
							<div class="text">International Guests</div>
						</article>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item three">
						<article class="column wow fadeIn" data-wow-duration="0ms">
							<div class="count-outer"><span class="count-text" data-speed="1500"
									data-stop="150">0</span></div>
							<div class="text">New Friendships</div>
						</article>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-item four">
						<article class="column wow fadeIn" data-wow-duration="0ms">
							<div class="count-outer"><span class="count-text" data-speed="1500"
									data-stop="550">0</span></div>
							<div class="text">Served Breakfast</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- fact counter section end -->

	<!-- news section -->
	<section class="news-section">
		<div class="container">
			<div class="news-title text-center">
				<div class="section-title">News & Events</div>
				<div class="title">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-item">
						<div class="img-box">
							<a href="news-detail.html">
								<figure><img src="images/news/news-1.jpg" alt=""></figure>
							</a>
						</div>
						<div class="news-content">
							<div class="date">20<span>May</span></div>
							<a href="news-detail.html">
								<h3>Fusce quis justo hendrerit ultrices elit eget</h3>
							</a>
							<ul class="list">
								<li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
								<li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
								<li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
							</ul>
						</div>
						<p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut lab
							ore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
							laboris nisi ut aliquip ex ea commodo.</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="sidbar-news">
						<div class="single-item">
							<div class="img-holder">
								<a href="news-detail.html">
									<figure><img src="images/news/1.jpg" alt=""></figure>
									<div class="overlay">
										<div class="box">
											<div class="content">
												<div class="date">20<span>May</span></div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<a href="news-detail.html">
								<h3>Etiam Vel Neqe</h3>
							</a>
							<p>Lorem ipsum dolor sit amet consectetur elit sed do. eiusm
								tempor incididunt labore et dolore magna aliqua ut enim ad minim veniam quis
								nostrud.</p>
						</div>
						<div class="single-item">
							<div class="img-holder">
								<a href="news-detail.html">
									<figure><img src="images/news/2.jpg" alt=""></figure>
									<div class="overlay">
										<div class="box">
											<div class="content">
												<div class="date">20<span>May</span></div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<a href="news-detail.html">
								<h3>Etiam Vel Neqe</h3>
							</a>
							<p>Lorem ipsum dolor sit amet consectetur elit sed do. eiusm
								tempor incididunt labore et dolore magna aliqua ut enim ad minim veniam quis
								nostrud.</p>
						</div>
						<div class="single-item">
							<div class="img-holder">
								<a href="news-detail.html">
									<figure><img src="images/news/3.jpg" alt=""></figure>
									<div class="overlay">
										<div class="box">
											<div class="content">
												<div class="date">20<span>May</span></div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<a href="news-detail.html">
								<h3>Etiam Vel Neqe</h3>
							</a>
							<p>Lorem ipsum dolor sit amet consectetur elit sed do. eiusm
								tempor incididunt labore et dolore magna aliqua ut enim ad minim veniam quis
								nostrud.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- news section end -->

	<!-- google map area -->
	<section class="google-map-area">
		<div class="google-map" id="contact-google-map" data-map-lat="40.086097" data-map-lng="-105.939460"
			data-icon-path="images/resources/map-marker.png" data-map-title="Landon, United Kingdom"
			data-map-zoom="12" data-markers='{
			"marker-1": [40.086097, -105.939460, "<h4>Branch Office</h4><p>77/99 Landon UK</p>","images/resources/map-marker.png"]
		}'>

		</div>
	</section>
	<!-- google map area end -->


    @include('partials.subscribe', [])
	
@endsection
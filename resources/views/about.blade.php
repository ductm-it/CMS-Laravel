@extends('layouts.full')

@section('content')

	@include('partials.page-title', [])

    <!-- about section -->
    <section class="about-section about-page">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-sm-6 col-xs-12">
    				<div class="img-box">
    					<figure><img src="images/about/1.jpg" alt=""></figure>
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-6 col-xs-12">
    				<div class="about-content">
	    				<div class="section-title">About <span>Albergo</span></div>
	    				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium.</p>
	    				<ul class="list">
	    					<li>Morbi fermentum felis nec</li>
	    					<li>Morbi fermentum felis nec gravida tempus.</li>
	    					<li>Morbi fermentum felis nec gravida</li>
	    				</ul>
	    				<a href="#" class="about-btn">About Us</a>
	    			</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- about section end -->

    <!-- fact counter section -->
    <section class="fact-counter">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3 col-sm-6 col-xs-12">
    				<div class="single-item one">
    					<article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="250">0</span></div>
                            <div class="text">Five StarRating</div>
                        </article>
    				</div>
    			</div>
    			<div class="col-md-3 col-sm-6 col-xs-12">
    				<div class="single-item two">
    					<article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="1250">0</span></div>
                            <div class="text">International Guests</div>
                        </article>
    				</div>
    			</div>
    			<div class="col-md-3 col-sm-6 col-xs-12">
    				<div class="single-item three">
    					<article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="150">0</span></div>
                            <div class="text">New Friendships</div>
                        </article>
    				</div>
    			</div>
    			<div class="col-md-3 col-sm-6 col-xs-12">
    				<div class="single-item four">
    					<article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="550">0</span></div>
                            <div class="text">Served Breakfast</div>
                        </article>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- fact counter section end -->

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
                                <div class="img-box"><figure><img src="images/home/special-1.jpg" alt=""></figure></div>
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
                                <div class="img-box"><figure><img src="images/home/special-2.jpg" alt=""></figure></div>
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
                                <div class="img-box"><figure><img src="images/home/special-3.jpg" alt=""></figure></div>
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
                                <div class="img-box"><figure><img src="images/home/special-4.jpg" alt=""></figure></div>
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

    @include('partials.subscribe', [])

@endsection
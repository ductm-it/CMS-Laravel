@extends('layouts.full')
@section('content')

	@include('partials.page-title', [])

    <!-- rooms details section -->
    <section class="rooms-details">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-sm-8 col-xs-12">
    				<div class="rooms-details-content">
    					<div class="img-box">
    						<figure><img src="images/rooms/rooms-detail.jpg" alt=""></figure>
    					</div>
    					<div class="lower-content">
    						<h2>Ocean View Condominium</h2>
    						<div class="text"><span>$250</span> / Night</div>
    						<ul class="rating">
    							<li><i class="fa fa-star" aria-hidden="true"></i></li>
    							<li><i class="fa fa-star" aria-hidden="true"></i></li>
    							<li><i class="fa fa-star" aria-hidden="true"></i></li>
    							<li><i class="fa fa-star" aria-hidden="true"></i></li>
    							<li><i class="fa fa-star" aria-hidden="true"></i></li>
    						</ul>
    						<p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid dolore magna aliqu enim ad minim venia quis nostrud exercittion ullamco laboris nisi ut aliquip excepteur sint occaecat cuidatat non proident sunt in culpa qui officia deserunt.mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
    						<p>Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequunt
							magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum.<br />
						    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    					</div>
    					<div class="rooms-catagori">
    						<h3>Room Benefits</h3>
    						<div class="row">
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<ul class="list">
    									<li>Double Bed</li>
    									<li>Air Conditioning</li>
    									<li>Outdoor Kitchen</li>
    								</ul>
    							</div>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<ul class="list">
    									<li>Double Bed</li>
    									<li>Air Conditioning</li>
    									<li>Outdoor Kitchen</li>
    								</ul>
    							</div>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<ul class="list">
    									<li>Double Bed</li>
    									<li>Air Conditioning</li>
    									<li>Outdoor Kitchen</li>
    								</ul>
    							</div>
    						</div>
    					</div>
    					<div class="client-reviews">
    						<h3>Client Reviews</h3>
    						<div class="text">Your Rating
    							<ul class="rating">
    								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
    								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
    								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
    								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
    							</ul>
    						</div>
    						<div class="default-form">
		                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
		                            <div class="row">
		                                <div class="col-md-12 col-sm-12 col-xs-12">
		                                	<textarea placeholder="Your Review" name="form_message" required=""></textarea>
		                                </div>
		                                <div class="col-md-6 col-sm-6 col-xs-12">
		                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
		                                </div>
		                                <div class="col-md-6 col-sm-6 col-xs-12">
		                                    <input type="email" name="form_email" value="" placeholder="Your Email" required="">
		                                </div>
		                            </div>
		                            <button type="submit" class="btn-one" data-loading-text="Please wait...">Submit now</button>
		                        </form>
		                    </div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="sidbar-content">
	    				<h3>Room Reservation</h3>
	                    <div class="date">
	                    	<i class="fa fa-calendar" aria-hidden="true"></i>
	    					<input type="text" name="date" placeholder="Araival date" id="datepicker">
	                    	<i class="fa fa-calendar" aria-hidden="true"></i>
	                    	<input type="text" name="date" placeholder="Departure date" id="datepickerone">
	                    </div>
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
	                    <select class="custom-select-box">
	                        <option>Room Type</option>
	                        <option>Double Bed</option>
	                        <option>Air Conditioning</option>
	                        <option>Outdoor Kitchen</option>
	                    </select>
	                    <a href="" class="btn-one">Book Now</a>
	    			</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- rooms details section end -->

    @include('partials.subscribe', [])
	

@endsection
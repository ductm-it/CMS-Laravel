@extends('layouts.full')

@section('content')

	@include('partials.page-title', [])

	<!-- contact section -->
	<section class="contact-section contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="contact-form">
						<h2>Get In Touch</h2>
						<form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
							method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="form_name" value="" placeholder="Name" required="">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="email" name="form_email" value="" placeholder="Email" required="">
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="text" name="form_pnone" value="" placeholder="Phone" required="">
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea placeholder="Your Message" name="form_message" required=""></textarea>
								</div>
							</div>
							<button type="submit" class="btn-one" data-loading-text="Please wait...">Send
								Message</button>
						</form>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="contact-info">
						<h2>Contact Info</h2>
						<div class="single-item">
							<i class="fa fa-map-marker"></i>
							<div class="info-title">Lacation</div>
							<div class="text">PO Box 16122 Collins Street West Victoria 8007 Canada</div>
						</div>
						<div class="single-item">
							<i class="fa fa-phone"></i>
							<div class="info-title">Phone Number</div>
							<div class="text">(+48) 564-334-21-22-34</div>
							<div class="text">(+48) 564-334-21-22-38</div>
						</div>
						<div class="single-item">
							<i class="fa fa-envelope"></i>
							<div class="info-title">Email</div>
							<div class="text"><a href="#">info@templatepath.com</a></div>
							<div class="text"><a href="#">info@gardenors.com</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact section end -->

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
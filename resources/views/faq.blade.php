@extends('layouts.full')

@section('content')

    @include('partials.page-title', [])

    <!-- faqs-section section faq-page -->
    <section class="faqs-section faq-page">
    	<div class="container">
    		<div class="row">
	    		<div class="col-md-8 col-sm-12 col-xs-12">
	    			<div class="faq-title">
	    				<h2>General Quistion</h2>
	    				<p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid dolore magna aliqu enim ad minim veniam quis nostrud exercittion ullamco laboris nisi ut aliquip excepteur sint occaecat cuidatat.</p>
	    			</div>
	    			<div class="accrodian-area">
                        <div class="accordion-box">
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    Does it amet ligula vestibulum bibendum lorem nec?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn active">
                                    What does cras consectetur velit sit amet odio sollicitudin vulputate?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content collapsed">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    How are Nam eget sapien eu enim gravida varius?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    Can you augue ut massa elementum molestie in id felis?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    Do you augue ut massa elementum molestie in id felis turpis?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    Where does Integer non est sed turpis pulvinar tristique consectetur?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    Can you augue ut massa elementum molestie in id felis?
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae. </p>
                                </div>
                            </div>
                        </div>
                    </div>
	    		</div>
                <div class="col-md-4 col-sm-8 col-xs-12">
                    <div class="faq-sidber">
                        <h3>Ask Questions?</h3>
                        <div class="default-form">
                            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="form_name" value="" placeholder="First name" required="">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="form_email" value="" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Message" name="form_name" required=""></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn-one" data-loading-text="Please wait...">Submit now</button>
                            </form>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    </section>
    <!-- faqs-section faq-page end -->

    @include('partials.subscribe', [])
    
@endsection
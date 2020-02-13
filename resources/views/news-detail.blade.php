@extends('layouts.full')

@section('content')

    @include('partials.page-title', [])

    <!-- News Details -->
    <section class="sidebar-page-container news-details news-section latest-news">
        <div class="container">
            <div class="row">
                <div class="content-side col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-single-section">
                        <div class="single-item">
                            <div class="img-box">
                                <figure><img src="images/news/news-1.jpg" alt=""></figure>
                            </div>
                            <div class="news-content">
                                <div class="date">20<span>May</span></div>
                                <h3>Fusce quis justo hendrerit ultrices elit eget</h3>
                                <ul class="list">
                                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.laboris nisi ut aliquip ex ea commodo.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup
                            tatem.</p>
                        </div>
                        <div class="post-share-option">
                            <div class="text">Tags:  Hotel, Resort, Spa</div>
                            <ul class="post-social">
                                <li>Share:</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                        <div class="comment-area">
                            <div class="comment-title"><h3>Comments (3)</h3></div>
                            <div class="comment-box">
                                <figure><img src="images/news/comment-1.png" alt=""></figure>
                                <div class="comment-inner">
                                    <div class="comment-name">Jessica Brown</div>
                                    <div class="comment-info"><i class="fa fa-calendar"></i>  Mar 20, 2016</div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat. </p>
                                </div>
                            </div>
                            <div class="comment-box replay-comment">
                                <figure><img src="images/news/comment-2.png" alt=""></figure>
                                <div class="comment-inner">
                                    <div class="comment-name">Jessica Brown</div>
                                    <div class="comment-info"><i class="fa fa-calendar"></i>  Mar 20, 2016</div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqu laudant tota rem ape riamipsa eaque  quae nisi.</p>
                                </div>
                            </div>
                            <div class="comment-box">
                                <figure><img src="images/news/comment-3.png" alt=""></figure>
                                <div class="comment-inner">
                                    <div class="comment-name">Jessica Brown</div>
                                    <div class="comment-info"><i class="fa fa-calendar"></i>  Mar 20, 2016</div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <div class="comment-title"><h3>Leave A Comment</h3></div>
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
                <div class="sidebar-side col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar">
                        <div class="sidebar-widget search-box">
                            <div class="form-group">
                                <form method="post" action="{{ $url->getHome() }}">
                                    <input type="search" name="search" placeholder="Search..." required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">Delux Room</a></li>
                                <li><a href="#">Luxury Room</a></li>
                                <li><a href="#">Gym Fitness</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Accomodation</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget posts-widget">
                            <div class="sidebar-title">
                                <h3>Latest Post</h3>
                            </div>
                            <div class="single-item">
                                <div class="img-box">
                                    <figure><a href="news-detail.html"><img src="images/news/post-1.png" alt=""></a></figure>
                                </div>
                                <a href="news-detail.html"><h5>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h5></a>
                                <div class="post-info"><span class="fa fa-calendar"></span>02 Feb, 2017</div>
                            </div>
                            <div class="single-item">
                                <div class="img-box">
                                    <figure><a href="news-detail.html"><img src="images/news/post-1.png" alt=""></a></figure>
                                </div>
                                <a href="news-detail.html"><h5>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h5></a>
                                <div class="post-info"><span class="fa fa-calendar"></span>02 Feb, 2017</div>
                            </div>
                            <div class="single-item">
                                <div class="img-box">
                                    <figure><a href="news-detail.html"><img src="images/news/post-3.png" alt=""></a></figure>
                                </div>
                                <a href="news-detail.html"><h5>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h5></a>
                                <div class="post-info"><span class="fa fa-calendar"></span>02 Feb, 2017</div>
                            </div>
                            <div class="single-item">
                                <div class="img-box">
                                    <figure><a href="news-detail.html"><img src="images/news/post-4.png" alt=""></a></figure>
                                </div>
                                <a href="news-detail.html"><h5>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h5></a>
                                <div class="post-info"><span class="fa fa-calendar"></span>02 Feb, 2017</div>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-tag">
                            <div class="sidebar-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Room</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Resort</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Details end -->

    @include('partials.subscribe', [])
    
@endsection
@extends('layouts.full')

@section('content')

    @include('partials.page-title', [])

    <!-- latest news -->
    <section class="sidebar-page-container news-section latest-news">
        <div class="container">
            <div class="row">
                <div class="content-side col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-classic-section">
                        <div class="single-item  wow fadeInUp animated animated animated animated">
                            <div class="img-box">
                                <a href="news-detail.html"><figure><img src="images/news/news-1.jpg" alt=""></figure></a>
                            </div>
                            <div class="news-content">
                                <div class="date">20<span>May</span></div>
                                <a href="news-detail.html"><h3>Fusce quis justo hendrerit ultrices elit eget</h3></a>
                                <ul class="list">
                                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.laboris nisi ut aliquip ex ea commodo.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        </div>
                        <div class="single-item  wow fadeInUp animated animated animated animated">
                            <div class="img-box">
                                <a href="news-detail.html"><figure><img src="images/news/news-2.jpg" alt=""></figure></a>
                            </div>
                            <div class="news-content">
                                <div class="date">20<span>May</span></div>
                                <a href="news-detail.html"><h3>Fusce quis justo hendrerit ultrices elit eget</h3></a>
                                <ul class="list">
                                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.laboris nisi ut aliquip ex ea commodo.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        </div>
                        <div class="single-item  wow fadeInUp animated animated animated animated">
                            <div class="img-box">
                                <a href="news-detail.html"><figure><img src="images/news/news-3.jpg" alt=""></figure></a>
                            </div>
                            <div class="news-content">
                                <div class="date">20<span>May</span></div>
                                <a href="news-detail.html"><h3>Fusce quis justo hendrerit ultrices elit eget</h3></a>
                                <ul class="list">
                                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.laboris nisi ut aliquip ex ea commodo.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        </div>
                        <div class="single-item  wow fadeInUp animated animated animated animated">
                            <div class="img-box">
                                <a href="news-detail.html"><figure><img src="images/news/news-4.jpg" alt=""></figure></a>
                            </div>
                            <div class="news-content">
                                <div class="date">20<span>May</span></div>
                                <a href="news-detail.html"><h3>Fusce quis justo hendrerit ultrices elit eget</h3></a>
                                <ul class="list">
                                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.laboris nisi ut aliquip ex ea commodo.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        </div>
                        <div class="single-item wow fadeInUp animated animated animated animated">
                            <div class="img-box">
                                <a href="news-detail.html"><figure><img src="images/news/news-5.jpg" alt=""></figure></a>
                            </div>
                            <div class="news-content">
                                <div class="date">20<span>May</span></div>
                                <a href="news-detail.html"><h3>Fusce quis justo hendrerit ultrices elit eget</h3></a>
                                <ul class="list">
                                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolor magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.laboris nisi ut aliquip ex ea commodo.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
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
                                    <figure><a href="news-detail.html"><img src="images/news/post-2.png" alt=""></a></figure>
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
    <!-- latest news end -->

    @include('partials.subscribe', [])


@endsection
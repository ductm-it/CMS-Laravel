
<!-- main header area -->
<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="logo">
                    <figure><a href="{{ $url->getHome() }}"><img src="images/home/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ $url->getHome() }}">Home</a>
                                </li>
                                <li><a href="{{ $url->getAbout() }}">About</a>
                                </li>
                                <li class="dropdown"><a href="#">Rooms</a>
                                    <ul>
                                        <li><a href="rooms-grid.html">Rooms Grid</a></li>
                                        <li><a href="rooms-list.html">Rooms List</a></li>
                                        <li><a href="rooms-detail.html">Rooms Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Services</a>
                                </li>
                                <li class="dropdown"><a href="#">Page</a>
                                    <ul>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="latest-news.html">Latest News</a></li>
                                        <li><a href="news-detail.html">News Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ $url->getContactUs() }}">contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="more-option">
                    <div class="seach-toggle"><i class="fa fa-search"></i></div>
                    <div class="search-box">
                        <form method="post" action="{{ $url->getHome() }}">
                            <div class="form-group">
                                <input type="search" name="search" placeholder="Search Here" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="info-box">
                    <a href="#">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="logo">
                        <figure><a href="{{ $url->getHome() }}"><img src="images/home/logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ $url->getHome() }}">Home</a>
                                    </li>
                                    <li><a href="{{ $url->getAbout() }}">About</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Rooms</a>
                                        <ul>
                                            <li><a href="rooms-grid.html">Rooms Grid</a></li>
                                            <li><a href="rooms-list.html">Rooms List</a></li>
                                            <li><a href="rooms-detail.html">Rooms Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="service.html">Services</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Page</a>
                                        <ul>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="latest-news.html">Latest News</a></li>
                                            <li><a href="news-detail.html">News Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ $url->getHome() }}">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="more-option">
                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <div class="search-box">
                            <form method="post" action="{{ $url->getHome() }}">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="info-box">
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Sticky Header-->
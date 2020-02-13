@extends('layouts.full')

@section('content')

    @include('partials.page-title', [])

    <!--gallery-section-->
    <section class="gallery-section">
        <div class="container">
            <div class="sortable-masonry">
                <div class="row item-container clearfix">
                    <div class="col-md-4 col-sm-6 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G1.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G1.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G2.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G2.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G3.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G3.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-sm-12 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G4.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G4.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G5.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G5.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G6.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G5.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 masonry-item default-portfolio-item">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="images/gallery/G7.jpg" alt=""></figure>
                                <div class="overlay text-center">
                                    <div class="box">
                                        <div class="content">
                                            <a href="images/gallery/G7.jpg" class="image-link fancybox"><span class="icon fa fa-plus"></span></a>
                                            <div class="img-title">Photo tytle here</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
        </div>
    </section>
    <!--End gallery-section-->

    @include('partials.subscribe', [])


@endsection
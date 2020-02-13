@extends('layouts.full')

@section('content')

    @include('partials.page-title', [])

    <!-- error page -->
    <section class="error-section error-page text-center">
        <div class="container">
            <div class="row">
                <div class="error-title">4<i class="fa fa-frown-o" aria-hidden="true"></i>4</div>
                <div class="title">Oops! Page Not Found!</div>
                <div class="text">Try to Search for the Best Match or Visit our Home Page</div>
                <div class="search-box">
                    <div class="form-group">
                        <form method="post" action="{{ $url->getHome() }}">
                            <div class="form-group">
                                <input type="search" name="search" placeholder="Search again..." required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ $url->getHome() }}" class="btn-one">go to home</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.subscribe', [])

@endsection
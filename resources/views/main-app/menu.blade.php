@extends('layouts.main-app')

@section('title', 'About us')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="row d-flex justify-content-center">
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-down">
                <h1>Our Menu</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ol>
                </nav>
                <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>

    <!-- ==== Page Content ==== -->
    <div class="page container">
        <div class="row">
            <div class="col-lg-6 text-center offset-lg-3 mb-5">
                <h2>Tasty, Kid-Approved Party Treats</h2>
                <p>No kids' party in Nigeria is complete without a colorful spread of tasty snacks, fun cakes, and
                    refreshing drinks! Whether you're hosting a birthday bash or school celebration, having the right party
                    treats makes all the difference. Here's a cheerful selection of popular Nigerian party favorites that
                    kids absolutely love:</p>
            </div>
            <!-- /col-lg -->
        </div>
        <!-- /row -->
        <!-- Gallery -->
        <div id="gallery-isotope" class="row mt-5 magnific-popup">
            <!-- Image 1 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery1.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery1.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Birthday Cake</h5>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery2.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery2.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Cupcakes</h5>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery3.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery3.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Donuts </h5>
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery4.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery4.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Cake Pops </h5>
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery5.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery5.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Cookies </h5>
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery6.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery6.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Brownies </h5>
                </div>
            </div>
            <!-- Image 7 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery7.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery7.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Mini Pancakes with Syrup </h5>
                </div>
            </div>
            <!-- Image 8 -->
            <div class="col-sm-6 col-md-6 col-lg-4 activities">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery8.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery8.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Candy Buffet </h5>
                </div>
            </div>
            <!-- Image 9 -->
            <div class="col-sm-6 col-md-6 col-lg-4 school">
                <div class="portfolio-item">
                    <div class="gallery-thumb">
                        <img class="img-fluid " src="{{ asset('assets/img/gallery/gallery9.jpg') }}" alt="">
                        <span class="overlay-mask"></span>
                        <a href="{{ asset('assets/img/gallery/gallery9.jpg') }}" class="link centered"
                            title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                    </div>
                    <h5 class="text-center">Chocolates  </h5>
                </div>
            </div>
        </div>
        <!-- /gallery-isotope-->
    </div>
    <!-- /page -->

@endsection
@extends('layouts.main-app')

@section('title', 'About us')

@section('content')

    <div class="jumbotron jumbotron-fluid" style="background: url('{{ asset('assets/img/jumbotron4.jpg') }}') !important;">
        <div class="row d-flex justify-content-center">
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-down">
                <h1>About Us</h1>
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
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container block-padding">
            <!--row -->
            <div class="row">
                <div class="col-lg-8">
                    <h3>The Heart Behind Blue Diner</h3>
                    <p class="h7 mt-3 mb-4">Our Story:</p>
                    <p>At the heart of Blue Diner is a simple but powerful idea: every child deserves to feel special, and
                        every parent deserves a stress-free celebration. Founded by parents who dreamed of a joyful, safe,
                        and imaginative space for kids to celebrate, Blue Diner was born out of a deep love for play, color,
                        and community. What began as a vision has now grown into Abuja’s go-to destination for magical kids’
                        events.
                        <br><br>
                        Our team is a vibrant mix of friendly hosts, creative party planners, and culinary wizards, all
                        passionate about delivering unforgettable experiences tailored to children of all ages. From
                        birthdays to baby showers, our mission is to create magical memories through playful celebration,
                        thoughtful hospitality, and boundless creativity. As we like to say, "We believe every child
                        deserves to feel special, and every parent deserves a stress-free celebration.".
                    </p>
                    <!-- /custom-ul-->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        <!-- Section  -->
        <section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay"
            data-100-bottom="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;">
            <div id="counter" class="container">
                <div class="row col-lg-10 offset-lg-1">
                    <!-- Counter -->
                    <div class="col-xl-4 col-md-4">
                        <div class="counter">
                            <div class="counter-wrapper bg-primary">
                                <i class="counter-icon flaticon-teacher"></i>
                                <!-- insert your final value on data-count= -->
                                <div class="counter-value" data-count="30">0</div>
                                <h3 class="title">Professionals</h3>
                            </div>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                    <!-- Counter -->
                    <div class="col-xl-4 col-md-4">
                        <div class="counter">
                            <div class="counter-wrapper bg-secondary">
                                <i class="counter-icon  flaticon-family"></i>
                                <!-- insert your final value on data-count= -->
                                <div class="counter-value" data-count="74">0</div>
                                <h3 class="title">Happy parents</h3>
                            </div>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                    <!-- Counter -->
                    <div class="col-xl-4 col-md-4">
                        <div class="counter">
                            <div class="counter-wrapper bg-tertiary">
                                <i class="counter-icon flaticon-children"></i>
                                <!-- insert your final value on data-count= -->
                                <div class="counter-value" data-count="104">0</div>
                                <h3 class="title">Children</h3>
                            </div>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
        <!-- /section ends-->
        <div class="container block-padding">
            <!-- row-->
            <div class="row">
                <div class="col-lg-6">
                    <!-- accordion -->
                    <div class="accordion">
                        <!-- collapsible accordion 1 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-bs-toggle="collapse" href="#collapseOne">
                                    Our Mission
                                </a>
                            </div>
                            <!-- /card-header -->
                            <div id="collapseOne" class="collapse show" data-bs-parent=".accordion">
                                <div class="card-body">
                                    <p>To create magical memories in Abuja for families through playful celebration,
                                        thoughtful hospitality, and creativity.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <!-- collapsible accordion 2 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseTwo">
                                    Our Story
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent=".accordion">
                                <div class="card-body">
                                    <p>Founded by parents who wanted a joyful, safe, and imaginative space for kids to
                                        celebrate, Blue Diner was born out of love for play, color, and community.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <!-- collapsible accordion 3 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseThree">
                                    Quote
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent=".accordion">
                                <div class="card-body">
                                    <p>“We believe every child deserves to feel special — and every parent deserves a
                                        stress-free celebration.” – The Blue Diner Team</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                    </div>
                    <!-- /accordion -->
                </div>
                <!-- /col-lg-->
                <div class="col-lg-6">
                    <h3 class="res-margin">Themed Celebrations</h3>
                    <p class="h7 mt-3 mb-3">Themed Celebrations at Blue Diner bring imagination to life.</p>
                    <p> Whether your child dreams of being a superhero, a princess, an explorer, or anything in between, we
                        create immersive party environments tailored to those dreams. Every theme is brought to life through
                        detailed decorations, coordinated music, engaging games, and costumes that turn the space into a
                        wonderland. <br><br> Our team collaborates with families to ensure every party reflects the child’s
                        unique
                        interests, making it a truly personal and magical experience. From setup to smiles, we take care of
                        everything so you can enjoy every moment.
                    </p>
                    <!-- buttons -->
                    <a href="{{ route('contact') }}" class="btn btn-tertiary">Contact Us</a>
                </div>
                <!-- /col-lg-->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /page -->

@endsection
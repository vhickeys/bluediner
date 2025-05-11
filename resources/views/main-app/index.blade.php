@extends('layouts.main-app')

@section('title', 'Homepage')

@section('content')

    <div class="container-fluid p-0">
        <!-- Parallax Slider -->
        <div id="slider" class="parallax-slider" style="width:1200px;margin:0 auto;margin-bottom: 0px;">
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="duration:4000; transition2d:7;">
                <!-- background image  -->
                <img src="{{ asset('assets/img/slider/parallaxslider/slide1.jpg') }}" class="ls-bg" alt="" />
                <!-- clouds  -->
                <img src="{{ asset('assets/img/slider/parallaxslider/clouds.png') }}" class="ls-l" alt=""
                    style="top:56px;left:-100px;" data-ls="parallax:true; parallaxlevel:-5;">
                <!-- butterflies  -->
                <img src="{{ asset('assets/img/slider/parallaxslider/butterflies.png') }}" class="ls-l" alt=""
                    style="top:16px;left:0px;" data-ls=" parallax:true; parallaxlevel:4;">
                <!-- sun  -->
                <img src="{{ asset('assets/img/slider/parallaxslider/sun.png') }}" class="ls-l" alt=""
                    style="top:-190px;left:650px;" data-ls="parallax:true; parallaxlevel:-3;">
                <!--child image  -->
                <img src="{{ asset('assets/img/slider/parallaxslider1.png') }}" class="ls-l" alt=""
                    style="top:166px;left:520px;"
                    data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:10;">
                <!-- text  -->
                <div class="ls-l header-wrapper"
                    data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400;">
                    <div class="header-text">
                        <span>Welcome to</span>
                        <h1> Blue Diner</h1>
                        <!--the div below is hidden on small screens  -->
                        <div class="hidden-small">
                            <p class="header-p">Celebrate Big Moments in a Colorful Way!</p>
                            <a class="btn btn-secondary" href="{{ route('contact') }}">Contact us</a>
                        </div>
                        <!--/hidden-small -->
                    </div>
                    <!-- header-text  -->
                </div>
                <!-- ls-l  -->
            </div>
            <!-- ls-slide -->
        </div>
        <!-- /slider -->
        <svg version="1.1" id="divider" class="slider-divider" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126"
            preserveAspectRatio="none slice" xml:space="preserve">
            <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z">
            </path>
        </svg>
    </div>
    <!-- /container-fluid -->
    <!-- ==== Page Content ==== -->
    <div class="container">
        <!-- section -->
        <section id="intro-cards" class="row pb-0">
            <!-- card 1 -->
            <div class="col-lg-4" data-aos="zoom-out">
                <div class="card card-flip">
                    <!-- front of card  -->
                    <div class="card bg-secondary text-light ">
                        <div class="p-5">
                            <h5 class="card-title text-light">Birthday Bash</h5>
                            <p class="card-text">
                                The ultimate way to celebrate your child’s big day!
                            </p>
                            <!-- button show on mobile only,where flip is disabled -->
                            <a href="{{ route('contact') }}" class="btn d-lg-none">Contact us</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="{{ asset('assets/img/intro1.jpg') }}" alt="">
                    </div>
                    <!-- /card -->
                    <!-- back of card -->
                    <div class="card bg-secondary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="p-4">
                                <h5 class="card-title text-light">Birthday Bash</h5>
                                <p class="card-text">It includes a beautifully decorated party area, tasty food and drinks
                                    specially made for kids, a full hour of exciting playtime, a surprise character
                                    appearance to bring extra magic, and fun-filled party bags for every child.
                                </p>
                                <!-- button -->
                                <a href="{{ route('contact') }}" class="btn">contact us</a>
                            </div>
                            <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                    </div>
                    <!-- /card -->
                </div>
                <!--/col-lg -->
            </div>
            <!--/card 1 -->
            <!-- card 2-->
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                <div class="card card-flip ">
                    <!-- front of card  -->
                    <div class="card bg-primary text-light">
                        <div class="p-5">
                            <h5 class="card-title text-light">Baby Showers</h5>
                            <p class="card-text">
                                Intimate and charming, featuring themed decorations, light refreshments and drinks.
                            </p>
                            <!-- button show on mobile only,where flip is disabled -->
                            <a href="javascript:void(0)" class="btn d-lg-none">Our Services</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="{{ asset('assets/img/intro2.jpg') }}" alt="">
                    </div>
                    <!-- /card -->
                    <!-- back of card -->
                    <div class="card bg-primary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="p-4">
                                <h5 class="card-title text-light">Baby Showers</h5>
                                <p class="card-text">Baby Showers are intimate and charming, featuring themed decorations,
                                    light refreshments and drinks, a stylish photo booth to capture the moments, and soft
                                    music or a live acoustic set to create the perfect atmosphere for friends and family.
                                </p>
                                <!-- button -->
                                <a href="javascript:void(0)" class="btn">Our Services</a>
                            </div>
                            <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                    </div>
                    <!-- /card -->
                </div>
                <!--/card 2 -->
            </div>
            <!--/col-lg -->
            <!-- card 3-->
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
                <div class="card card-flip ">
                    <!-- front of card  -->
                    <div class="card bg-tertiary text-light">
                        <div class="p-5">
                            <h5 class="card-title text-light">School Trips</h5>
                            <p class="card-text">
                                Offer play-based learning activities, nutritious snacks and drinks, safe indoor and outdoor
                                play zones.
                            </p>
                            <!-- button show on mobile only,where flip is disabled -->
                            <a href="javascript:void(0)" class="btn d-lg-none">Our Team</a>
                        </div>
                        <!-- /p-5 -->
                        <!-- image -->
                        <img class="card-img" src="{{ asset('assets/img/intro3.jpg') }}" alt="">
                    </div>
                    <!-- /card -->
                    <!-- back of card -->
                    <div class="card bg-tertiary text-light card-back">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="p-4">
                                <h5 class="card-title text-light">Meet our Staff</h5>
                                <p class="card-text">enas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh
                                    hendrerit id.
                                    In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat
                                </p>
                                <!-- button -->
                                <a href="javascript:void(0)" class="btn">Our Team</a>
                            </div>
                            <!-- /p-4 -->
                        </div>
                        <!-- /card-body -->
                    </div>
                    <!-- /card -->
                </div>
                <!--/card 3 -->
            </div>
            <!--/col-lg -->
        </section>
        <!-- #intro-cards -->
    </div>
    <!-- /container -->
    <!-- section -->
    <section id="about-home" class="container-fluid pb-0">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>About Us</h2>
                {{-- <p class="subtitle">Get to know us</p> --}}
            </div>
            <!-- /section-heading -->
            <div class="row">
                <div class="col-lg-7 ">
                    <h3>The Heart Behind Blue Diner</h3>
                    <p class="mt-4 res-margin">At the heart of Blue Diner is a simple but powerful idea: every child
                        deserves to feel special, and every parent deserves a stress-free celebration. Founded by parents
                        who dreamed of a joyful, safe, and imaginative space for kids to celebrate, Blue Diner was born out
                        of a deep love for play, color, and community. What began as a vision has now grown into Abuja’s
                        go-to destination for magical kids’ events.
                        <br><br>
                        Our team is a vibrant mix of friendly hosts, creative party planners, and culinary wizards, all
                        passionate about delivering unforgettable experiences tailored to children of all ages. From
                        birthdays to baby showers, our mission is to create magical memories through playful celebration,
                        thoughtful hospitality, and boundless creativity. As we like to say, "We believe every child
                        deserves to feel special, and every parent deserves a stress-free celebration.".
                    </p>
                    <a href="" class="btn btn-secondary ">Contact us</a>
                </div>
                <!-- /col-lg -->
                <div class="col-lg-5 res-margin">
                    <!-- image -->
                    <img class="img-fluid rounded" src="{{ asset('assets/img/about/about2.jpg') }}" alt="">
                    <!-- ornament starts-->
                    <div class="ornament-rainbow" data-aos="zoom-out"></div>
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /row -->
            <h3 class="mt-5 text-center">What Parents say:</h3>
            <div class="row">
                <!-- testimonials -->
                <!-- testimonial carousel -->
                <div class="carousel-2items owl-carousel owl-theme col-md-12">
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                Blue Diner made our daughter’s birthday unforgettable! The decorations were magical, the
                                staff was so warm and helpful, and the kids had the best time. It was stress-free for us and
                                joyful for the little ones.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src="{{ asset('assets/img/team/mom1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Amaka Eze</h5>
                            <span class="post">Parent</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                We booked Blue Diner for a school trip, and it was such a hit with our students! The
                                activities were fun and safe, and the staff handled everything so professionally. We’re
                                definitely coming back next term.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src="{{ asset('assets/img/team/teacher1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Mrs. Adebayo</h5>
                            <span class="post">School Coordinator</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                I hosted my baby shower at Blue Diner and couldn’t have asked for a better experience. The
                                decor was lovely, the vibe was just right, and the photos turned out amazing. Everyone felt
                                so cared for.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src="{{ asset('assets/img/team/mom2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Chinelo Umeh</h5>
                            <span class="post">Expecting Mom</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                </div>

                <!-- /owl-testimonial -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
        <!-- whale in water scene -->
        <!-- whale -->
        <img src="{{ asset('assets/img/ornaments/whale.png') }}" class="floating-whale" alt="">
        <!-- waves -->
        <div class="waveHorizontals">
            <div id="waveHorizontal1" class="waveHorizontal"></div>
            <div id="waveHorizontal2" class="waveHorizontal"></div>
            <div id="waveHorizontal3" class="waveHorizontal"></div>
        </div>
        <!-- sea -->
        <div class="sea"></div>
        <!--/ whale in water scene ends -->
    </section>
    <!-- /section ends -->
    <!-- section -->
    <section id="features" class="bg-secondary text-light">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>Our Features</h2>
                <p class="subtitle">Benefits for you</p>
            </div>
            <!-- /section-heading -->
            <!-- features -->
            <div class="row ">
                <div class="col-lg-6">
                    <div class="row ">
                        <div class="col-md-6 col-lg-6">
                            <!-- feature -->
                            <div class="feature-with-icon">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-maternity text-primary"></i>
                                </div>
                                <h5>All-in-one event planning</h5>
                            </div>
                            <!-- /feature-with-icon-->
                            <!-- feature -->
                            <div class="feature-with-icon mt-5">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-food text-primary"></i>
                                </div>
                                <h5>Wholesome food & snacks</h5>
                            </div>
                            <!-- /feature-with-icon-->
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <!-- feature -->
                            <div class="feature-with-icon">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-children text-primary"></i>
                                </div>
                                <h5>Safe & fun play areas</h5>
                            </div>
                            <!-- /feature-with-icon-->
                            <!-- feature -->
                            <div class="feature-with-icon mt-5">
                                <div class="icon-features">
                                    <!-- icon -->
                                    <i class="flaticon-baby-boy text-primary"></i>
                                </div>
                                <h5>Custom party themes & décor</h5>
                            </div>
                            <!-- /feature-with-icon-->
                        </div>
                        <!-- /col-l -->
                    </div>
                    <!-- /row-->
                </div>
                <!-- /col-l -->
                <div class="col-lg-6 features-bg">
                    <!-- image -->
                    <img src="{{ asset('assets/img/features.png') }}" alt="" class="img-fluid" data-aos="zoom-out"
                        data-aos-delay="300">
                </div>
                <!-- /col-l -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- section -->
    <section id="services-home" class="container-fluid">
        <div class="container pb-5">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>Our Packages</h2>
            </div>
            <!-- /section heading -->
            <!-- row -->
            <div class="row vertical-tabs">
                <div class="col-lg-12">
                    <!-- navigation -->
                    <div class="tabs-with-icon">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach($packages as $index => $package)
                                    <a class="nav-item nav-link {{ $loop->first ? 'active' : '' }}" id="tab{{ $index + 1 }}-tab"
                                        data-bs-toggle="tab" href="#tab{{ $index + 1 }}">
                                        <i class="flaticon-smiling-baby"></i> {{-- You can make this dynamic if icons are
                                        available --}}
                                        {{ $package['title'] }}
                                    </a>
                                @endforeach
                            </div>
                        </nav>

                        <!-- tab-content -->
                        <div class="tab-content block-padding bg-light" id="nav-tabContent">
                            @foreach($packages as $index => $package)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab{{ $index + 1 }}"
                                    role="tabpanel" aria-labelledby="tab{{ $index + 1 }}-tab">
                                    <div class="row">
                                        <div class="col-lg-6 {{ $loop->even ? 'res-margin' : '' }}">
                                            @if($loop->odd)
                                                <!-- Image left -->
                                                <img src="{{ asset('assets/img/services/' . $package['image']) }}" alt="{{ $package['title'] }}"
                                                    class="rounded img-fluid">
                                                <div class="ornament-rainbow" data-aos="fade-right"></div>
                                            @else
                                                <!-- Content left -->
                                                <h3>{{ $package['title'] }}</h3>
                                                <p>{!! substr($package['content'], 0, 250) !!} ...</p>
                                                <a href="{{ route('package.details', ['package_slug' => $package['slug']]) }}"
                                                    class="btn btn-secondary mt-4">Read More</a>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            @if($loop->odd)
                                                <!-- Content right -->
                                                <h3>{{ $package['title'] }}</h3>
                                                <p>{!! substr($package['content'], 0, 250) !!} ...</p>
                                                <a href="{{ route('package.details', ['package_slug' => $package['slug']]) }}"
                                                    class="btn btn-secondary mt-4">Read More</a>
                                            @else
                                                <!-- Image right -->
                                                <img src="{{ asset('assets/img/services/' . $package['image']) }}" alt="{{ $package['title'] }}"
                                                    class="rounded img-fluid">
                                                <div class="ornament-stars" data-aos="fade-right"></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- vertical-tabs -->
                </div>
                <!-- /col-lg-6 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
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

    <!-- section -->
    <section id="blogprev-home" data-100-bottom="background-position: 0% 120%;"
        data-top-bottom="background-position: 0% 100%;">
        <div class="container">
            <!-- section heading -->
            <div class="section-heading text-center">
                <h2>Latest Blog Posts</h2>
                <p class="subtitle">Our Updates</p>
            </div>
            <!-- /section-heading -->
            <!-- blog carousel -->
            <div class="carousel-3items owl-carousel owl-theme mt-0">
                <!-- blog-box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="javascript:void(0)">
                        <div class="image"><img src="{{ asset('assets/img/blog/blogstyle2-1.jpg') }}" alt=""></div>
                    </a>
                    <!-- blog-box-caption -->
                    <div class="blog-box-caption">
                        <!-- date -->
                        <div class="date"><span class="day">12</span><span class="month">May</span></div>
                        <a href="javascript:void(0)">
                            <h4>How to Build a Strong Bond With Your Child</h4>
                        </a>
                        <p>
                            Creating a lasting connection with your child begins with consistent attention, empathy, and open communication...
                        </p>
                    </div>
                    <!-- blog-box-footer -->
                    <div class="blog-box-footer">
                        <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Endurance Okechukwu</a></div>
                        <div class="comments"><a href="javascript:void(0)"><i class="fas fa-comment"></i>14</a></div>
                        <div class="text-center col-md-12">
                            <a href="javascript:void(0)" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog-box -->
                
                <div class="blog-box">
                    <a href="javascript:void(0)">
                        <div class="image"><img src="{{ asset('assets/img/blog/blogstyle2-2.jpg') }}" alt=""></div>
                    </a>
                    <div class="blog-box-caption">
                        <div class="date"><span class="day">28</span><span class="month">June</span></div>
                        <a href="javascript:void(0)">
                            <h4>Top 5 Healthy Snacks for Busy School Days</h4>
                        </a>
                        <p>
                            Nutritious snacks can keep kids energized and focused. Here are five quick and healthy options they’ll love...
                        </p>
                    </div>
                    <div class="blog-box-footer">
                        <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Endurance Okechukwu</a></div>
                        <div class="comments"><a href="javascript:void(0)"><i class="fas fa-comment"></i>9</a></div>
                        <div class="text-center col-md-12">
                            <a href="javascript:void(0)" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog-box -->

                <div class="blog-box">
                    <a href="javascript:void(0)">
                        <div class="image"><img src="{{ asset('assets/img/blog/blogstyle2-3.jpg') }}" alt=""></div>
                    </a>
                    <div class="blog-box-caption">
                        <div class="date"><span class="day">02</span><span class="month">July</span></div>
                        <a href="javascript:void(0)">
                            <h4>Creative Weekend Ideas for Family Bonding</h4>
                        </a>
                        <p>
                            From backyard camping to DIY crafts, explore engaging activities that bring the family closer together...
                        </p>
                    </div>
                    <div class="blog-box-footer">
                        <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Endurance Okechukwu</a></div>
                        <div class="comments"><a href="javascript:void(0)"><i class="fas fa-comment"></i>18</a></div>
                        <div class="text-center col-md-12">
                            <a href="javascript:void(0)" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog-box -->

                <div class="blog-box">
                    <a href="javascript:void(0)">
                        <div class="image"><img src="{{ asset('assets/img/blog/blogstyle2-4.jpg') }}" alt=""></div>
                    </a>
                    <div class="blog-box-caption">
                        <div class="date"><span class="day">18</span><span class="month">June</span></div>
                        <a href="javascript:void(0)">
                            <h4>Managing Screen Time: A Guide for Parents</h4>
                        </a>
                        <p>
                            Learn how to set healthy screen time boundaries that support your child's development and well-being...
                        </p>
                    </div>
                    <div class="blog-box-footer">
                        <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Endurance Okechukwu</a></div>
                        <div class="comments"><a href="javascript:void(0)"><i class="fas fa-comment"></i>12</a></div>
                        <div class="text-center col-md-12">
                            <a href="javascript:void(0)" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog-box -->
            </div>
            <!-- /owl-carousel -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends-->

@endsection
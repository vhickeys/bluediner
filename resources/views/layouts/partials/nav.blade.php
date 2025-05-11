<!--/Preloader ends -->
<nav id="main-nav" class="navbar-expand-xl">
    <div class="row">
        <!-- Navbar Starts -->
        <div class="navbar container-fluid">
            <div class="container ">
                <!-- logo -->
                <a class="nav-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('assets/img/blue-diner-logo.png') }}" alt="Blue Diner" class="img-fluid">
                </a>
                <!-- Navbar toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <!-- menu item -->
                        <li class="nav-item home-menu">
                            <a class="nav-link" href="{{ route('homepage') }}">Home
                            </a>
                        </li>
                        <li class="nav-item home-menu {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">About Us
                            </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown {{ Str::contains(request()->path(), 'packages/') }}">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="services-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Party Packages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="services-dropdown">
                                @php
                                    $packages = getPackages();
                                @endphp
                                @foreach ($packages as $package)
                                    <a class="dropdown-item"
                                        href="{{ route('package.details', ['package_slug' => $package['slug']]) }}">{{ $package['title'] }}</a>
                                @endforeach
                            </div>
                        </li>

                        <li class="nav-item home-menu {{ request()->routeIs('menu') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                        </li>

                        <li class="nav-item home-menu {{ request()->routeIs('gallery') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                        </li>

                        <li class="nav-item home-menu {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar -->
    </div>
    <!--/row -->
</nav>
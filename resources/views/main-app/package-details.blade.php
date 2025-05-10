@extends('layouts.main-app')

@section('title', $package['title'])

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="row d-flex justify-content-center">
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-down">
                <h1>{{ $package['title'] }}</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $package['title'] }}</li>
                    </ol>
                </nav>
                <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>

    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container">
            <div class="row">
                <!-- page with sidebar starts -->
                <div class="col-lg-9 page-with-sidebar">
                    <div class="col-md-12">
                        <h2>{{ $package['title'] }}</h2>
                        <!-- Image -->
                        <p>
                            {!! $package['content'] !!}
                        </p>
                    </div>
                    <!-- /col-md-12 -->

                    <div class="col-md-12 mt-5">
                        <h5>What's Included in this Package?</h5>
                        <!-- custom-list -->
                        <ul class="custom ps-0">
                            {!! $package['features'] !!}
                        </ul>
                        <!-- /ul -->
                    </div>

                    <a href="{{ route('contact') }}" class="btn btn-secondary mt-3">Book Now</a>
                </div>
                <!-- /col-lg-9 -->
                <!-- ==== Sidebar ==== -->
                <div id="sidebar" class="col-lg-3 h-50 sticky-top">
                    <!--widget area-->
                    <div class="widget-area notepad">
                        <h5 class="sidebar-header">All Party Packages</h5>
                        <div class="list-group">
                            @foreach ($packages as $item)
                                <a href="{{ route('package.details', ['package_slug' => $item['slug']]) }}"
                                    class="list-group-item list-group-item-action {{ Str::contains(request()->path(), $item['slug']) ? 'active' : '' }}">
                                    {{ $item['title'] }}
                                </a>
                            @endforeach
                        </div>
                        <!-- /list-group -->
                    </div>
                    <!-- /widget-area -->
                </div>
                <!-- /sidebar -->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </div>
    <!-- /page -->

@endsection
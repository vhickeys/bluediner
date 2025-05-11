<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="At the heart of Blue Diner is a simple but powerful idea: every child deserves to feel special, and every parent deserves a stress-free celebration. Founded by parents who dreamed of a joyful, safe, and imaginative space for kids to celebrate, Blue Diner was born out of a deep love for play, color, and community. What began as a vision has now grown into Abuja’s go-to destination for magical kids’ events.">
    <meta name="author" content="Olvios Tech">
    <!-- page title -->
    <title>@yield('title', 'Blue Diner Abuja') | Blue Diner Abuja</title>
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700%7CNunito:400,700,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/fontawesome/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Fav icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- style CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- plugins CSS -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <!-- Colors CSS -->
    <link href="{{ asset('assets/styles/maincolors.css') }}" rel="stylesheet">
    <!-- LayerSlider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/layerslider/css/layerslider.css') }}">


    <!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('assets/switcher/css/switcher.css') }}"
        media="all">
    <!-- END Switcher Styles -->

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/styles/maincolors.css') }}"
        title="maincolors" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/styles/kindergarten.css') }}"
        title="kindergarten" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/styles/playtime.css') }}" title="playtime"
        media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/styles/preschool.css') }}" title="preschool"
        media="all">

</head>

<body id="top">
    @include('layouts.partials.preloader')
    @include('layouts.partials.nav')
    <div id="page-wrapper">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')

</body>

</html>
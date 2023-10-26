<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.png') }}" />
        <title>{{ ENV('APP_NAME')}}</title>
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/icofont.min.css') }}">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/aos.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/plugins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    </head>
    <body class="bg-white" data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0">
        <div class="main-wrapper">
            @include('layout/header')
                @yield('content')
            @include('layout/footer')
            <!--Back To Start-->
            <a href="#" class="back-to-top" style="display: none;">
                <i class="icofont-simple-up"></i>
            </a>
            <!--Back To End-->
        </div>
    </body>
    <deepl-inline-trigger style="z-index: 2147483647;"></deepl-inline-trigger>
    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('assets/vendor/js/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/plugins/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/plugins/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/ajax-contact.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/aos.js') }}"></script>
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</html>

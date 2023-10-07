<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ ENV('APP_NAME')}}</title>
		<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    </head>
    <body class="bg-white dark:bg-gray-900">
        @include('layout/header')
        @yield('content')
        @include('layout/footer')
    </body>
    <script src="{{ asset('assets/js/default-theme.js') }}"></script>
    <script src="{{ asset('assets/js/switch-theme.js') }}"></script>
</html>

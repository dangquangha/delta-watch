<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.css') }}">
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: "fontTitle";
            src: {{ asset('fonts/Josefin_Sans/static/JosefinSans-Bold.ttf') }};
        }

        @keyframes animation3d{
            0%{transform:perspective(200px) rotate3d(0, 1, 0, -90deg) translateX(-100%)}
            100%{transform:perspective(200px) rotate3d(0, 1, 0, 0deg) translateX(0px)}
        }
    </style>
    <!-- SWIPER -->
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper-bundle.min.css') }}">
    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>

    @yield('css')

    <title>@yield('title')</title>
</head>
<body>
@include('components.header.index')

@include('components.navbar.index')

@yield('content')

@include('components.footer.index')

@include('components.backtotop')
</body>

@yield('script')
</html>
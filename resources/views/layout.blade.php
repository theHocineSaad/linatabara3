<!doctype html>
<html lang="{{ Lang::locale() }}" dir="{{ Lang::locale() === "ar" ? "rtl" : "ltr" }}">
<head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="@yield('metaTitle')">
    <meta name="description" content="@yield('metaDescription')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('metaOGurl')">
    <meta property="og:title" content="@yield('metaOGtitle')">
    <meta property="og:description" content="@yield('metaOGdescription')">
    <meta property="og:image" content="@yield('metaOGimage')">
    <meta property="og:locale" content="@yield('metaOGLocale')">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('metaTwitterUrl')">
    <meta property="twitter:title" content="@yield('metaTwitterTitle')">
    <meta property="twitter:description" content="@yield('metaTwitterDescription')">
    <meta property="twitter:image" content="@yield('metaTwitterImage')">

    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600&family=Nunito:wght@600;700&display=swap" rel="stylesheet">


    @if(Lang::locale() === 'ar')
        @vite(['resources/sass/bootstrap-rtl.scss'])
    @else
        @vite(['resources/sass/bootstrap.scss'])
    @endif

    @vite(['resources/css/app.css'])
    <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>
    @yield('head')
</head>
<body>

    <x-contact-modal />

    @yield('body')

    @vite(['resources/js/app.js'])
    @yield('beforeBodyEnd')
</body>
</html>

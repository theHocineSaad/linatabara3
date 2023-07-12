<!doctype html>
<html lang="{{ Lang::locale() }}" dir="{{ Lang::locale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <title>@yield('title')</title>

    {{-- Primary Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('metaDescription')">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('metaOGurl')">
    <meta property="og:title" content="@yield('metaOGtitle')">
    <meta property="og:description" content="@yield('metaOGdescription')">
    <meta property="og:image" content="@yield('metaOGimage')">
    <meta property="og:locale" content="@yield('metaOGLocale')">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('metaTwitterUrl')">
    <meta property="twitter:title" content="@yield('metaTwitterTitle')">
    <meta property="twitter:description" content="@yield('metaTwitterDescription')">
    <meta property="twitter:image" content="@yield('metaTwitterImage')">

    {{-- Localized Versions  --}}
    <link rel="alternate" href="{{ LaravelLocalization::getLocalizedURL('ar') }}" hreflang="ar" />
    <link rel="alternate" href="{{ LaravelLocalization::getLocalizedURL('fr') }}" hreflang="fr" />

    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600&family=Nunito:wght@600;700&display=swap"
        rel="stylesheet">

    @if(Lang::locale() === 'ar')
        @vite(['resources/css/bootstrap-rtl.css'])
    @else
        @vite(['resources/css/bootstrap.css'])
    @endif

    @vite(['resources/css/app.css'])

    @yield('head')
</head>

<body>

    <x-contact-modal />

    @yield('body')

    @vite(['resources/js/app.js'])
    @yield('beforeBodyEnd')
</body>

</html>

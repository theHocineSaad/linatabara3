<!doctype html>
<html lang="{{ Lang::locale() }}" dir="{{ Lang::locale() === "ar" ? "rtl" : "ltr"}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600&family=Nunito:wght@600;700&display=swap" rel="stylesheet">
    <link href="{{ Lang::locale() === "ar" ? asset('css/bootstrap-rtl.css') : asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @yield('head')
</head>
<body>

    @yield('body')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('beforeBodyEnd')
</body>
</html>

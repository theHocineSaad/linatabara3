@extends('layout')

@section('title', __('general.websiteTitleDescription', ["websiteTitle" => __('general.websiteTitle')]))
<!-- Primary Meta Tags -->
@section('metaTitle', __('general.websiteTitleDescription', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaDescription', __('homePage.pageDescription'))

<!-- Open Graph / Facebook -->
@section('metaOGurl', url()->full())
@section('metaOGtitle', __('general.websiteTitleDescription', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaOGdescription', __('homePage.pageDescription'))
@section('metaOGimage', asset('imgs/vialsOfBlood.jpg'))
@section('metaOGLocale', Lang::locale() === "ar" ? Lang::locale()."_DZ" : Lang::locale()."_FR")

<!-- Twitter -->
@section('metaTwitterUrl', url()->full())
@section('metaTwitterTitle', __('general.websiteTitleDescription', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaTwitterDescription', __('homePage.pageDescription'))
@section('metaTwitterImage', asset('imgs/vialsOfBlood.jpg'))

@section('head')
    <link href="{{ asset('css/homeHero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bloodDonationBenefits.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cta.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stats.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="particles-js"></div>
    <x-main-nav-bar homeActive="active"/>
    <x-home-hero />
    <x-blood-donation-benefits />
    <x-faq />
    <x-cta />
    <x-stats />
    <x-footer />
@endsection

@section('beforeBodyEnd')
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/practicle-js-engine.js') }}"></script>
    <script src="{{ asset('js/donorsSearchFormValidation.js') }}"></script>
    <script src="{{ asset('js/gettingDairas.js') }}"></script>
@endsection

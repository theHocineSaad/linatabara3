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
    <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}" />
    @vite([
        'resources/css/homeHero.css',
        'resources/css/faq.css',
        'resources/css/bloodDonationBenefits.css',
        'resources/css/cta.css',
        'resources/css/stats.css',
    ])
@endsection

@section('body')
    <div id="tsparticles"></div>
    <x-main-nav-bar homeActive="active"/>
    <x-home-hero />
    <x-blood-donation-benefits />
    <x-faq />
    <x-cta />
    <x-stats />
    <x-footer />
@endsection

@section('beforeBodyEnd')
    @vite([
        'resources/js/donorsSearchFormValidation.js',
        'resources/js/gettingDairas.js',
        'resources/js/tsPracticles.js',
        'resources/js/tsPracticlesEngine.js',
    ])
@endsection

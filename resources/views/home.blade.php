@extends('layout')

@section('title',__('general.websiteTitleDescription', ["websiteTitle" => __('general.websiteTitle')]))

@section('head')
    <link href="{{ asset('css/homeHero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bloodDonationBenefits.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cta.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stats.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
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

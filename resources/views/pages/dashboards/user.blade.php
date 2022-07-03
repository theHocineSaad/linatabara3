@extends('layout')

@section('title',__('userDashboard.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))

@section('head')
    <link href="{{ asset('css/userDashboard.css') }}" rel="stylesheet">
@endsection

@section('body')
    <x-main-nav-bar homeActive="active"/>

    <x-password-edit-modal />

    <x-user-update-form />

    <x-footer />

    {{--Passing data to JS files--}}
    <div class="visually-hidden" id="userWilayaCode">{{ Auth::user()->wilaya_id }}</div>
    <div class="visually-hidden" id="userDairaCode">{{ Auth::user()->daira_id }}</div>
    <div class="visually-hidden" id="userIsReadyToGive">{{ Auth::user()->readyToGive }}</div>
@endsection

@section('beforeBodyEnd')
    <script src="{{ asset('js/userDashboard.js') }}"></script>
    <script src="{{ asset('js/gettingDairas.js') }}"></script>
@endsection

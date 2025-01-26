@extends('layout')

@section('title',__('forgotPassword.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))

{{-- Primary Meta Tags --}}
@section('metaDescription', __('forgotPassword.passwordReset'))

{{-- Open Graph / Facebook --}}
@section('metaOGurl', url()->full())
@section('metaOGtitle', __('forgotPassword.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaOGdescription', __('forgotPassword.passwordReset'))
@section('metaOGimage', asset('imgs/passwordImage.jpg'))
@section('metaOGLocale', Lang::locale() === "ar" ? Lang::locale()."_DZ" : Lang::locale()."_FR")

{{-- Twitter --}}
@section('metaTwitterUrl', url()->full())
@section('metaTwitterTitle', __('forgotPassword.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaTwitterDescription', __('forgotPassword.passwordReset'))
@section('metaTwitterImage', asset('imgs/passwordImage.jpg'))

@section('head')
    @vite(['resources/css/forgotPasswordPage.css',])
@endsection

@section('body')
    <x-main-nav-bar/>

    <div class="container padding-bottom-3x mb-2 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="forgot rounded">
                    <h2>{{ __('forgotPassword.forgotPassword') }}</h2>
                    <p>{{ __('forgotPassword.forgotPassworDescription') }}</p>
                    <ol class="list-unstyled">
                        <li><span class="text-danger text-medium">1. </span>{{ __('forgotPassword.instruction1') }}</li>
                        <li><span class="text-danger text-medium">2. </span>{{ __('forgotPassword.instruction2') }}</li>
                        <li><span class="text-danger text-medium">3. </span>{{ __('forgotPassword.instruction3') }}</li>
                    </ol>
                </div>
                <form class="card mt-4" action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="card-body rounded-top">
                        @if (session('status'))
                            <div class="alert alert-success shadow-sm" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger shadow-sm" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group"> <label for="email-for-pass">{{ __('forgotPassword.enterEmail') }}</label> <input dir="auto" name="email" class="form-control" type="email" id="email-for-pass" required></div>
                    </div>
                    <div class="card-footer rounded-bottom py-3 d-flex justify-content-end">
                        <button class="btn btn-danger px-5" type="submit">{{ __('forgotPassword.continue') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-footer />
@endsection

@section('beforeBodyEnd')
@endsection

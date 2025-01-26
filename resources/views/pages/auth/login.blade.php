@extends('layout')

@section('title',__('loginPage.title', ["websiteTitle" => __('general.websiteTitle')]))

{{-- Primary Meta Tags --}}
@section('metaDescription', __('registerPage.login'))

{{-- Open Graph / Facebook --}}
@section('metaOGurl', url()->full())
@section('metaOGtitle', __('loginPage.title', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaOGdescription',  __('registerPage.login'))
@section('metaOGimage', asset('imgs/passwordImage.jpg'))
@section('metaOGLocale', Lang::locale() === "ar" ? Lang::locale()."_DZ" : Lang::locale()."_FR")

{{-- Twitter --}}
@section('metaTwitterUrl', url()->full())
@section('metaTwitterTitle', __('loginPage.title', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaTwitterDescription', __('registerPage.login'))
@section('metaTwitterImage', asset('imgs/passwordImage.jpg'))

@section('head')
    @vite(['resources/css/loginPage.css',])
@endsection

@section('body')
    <x-main-nav-bar/>

    <div class="signinForm m-4 p-4 rounded shadow">
        <form
            name="signInForm"
            action="{{ route('login') }}"
            method="post"
        >
            @csrf

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger shadow-sm" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @elseif (session('status'))
                <div class="alert alert-success shadow-sm" role="alert">
                    {{ session('status') }}
                </div>
            @else
                <div class="alert alert-success text-center shadow-sm" role="alert">
                    {{ __('loginPage.greetings') }}
                </div>
            @endif

            <div>
                <label for="id_username" class="form-label">{{ __('loginPage.emailPhone') }} </label>
                <input type="text" name="username" class="form-control" required id="id_username" placeholder="{{ __('loginPage.emailPhone') }}" value="{{ old('username') }}"/>
            </div>

            <div class="mt-3">
                <label for="id_password" class="form-label">{{ __('loginPage.password') }} </label>
                <input type="password" name="password" class="form-control" required id="id_password" placeholder="{{ __('loginPage.password') }}"/>
                <span class="form-text text-muted"></span>
                <small><a href="{{ route('password.request') }}" class="text-decoration-none text-danger">{{ __('loginPage.forgetPassword') }}</a></small>
            </div>

            <input id="submitBtn" class="btn btn-danger my-3 w-100" type="submit" value="{{ __('loginPage.loginBtn') }}" />

            <span class="text-dark d-block text-center">{{ __('loginPage.notRegistered') }}<a href="{{ route('register') }}" class="text-danger text-decoration-none"> {{ __('loginPage.register') }}</a></span>
        </form>
    </div>

    <x-footer />
@endsection

@section('beforeBodyEnd')
@endsection

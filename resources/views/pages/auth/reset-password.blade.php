@extends('layout')

@section('title',__('forgotPassword.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))

@section('head')
    <meta name="robots" content="noindex,nofollow" />
    @vite(['resources/css/forgotPasswordPage.css',])
@endsection

@section('body')
    <x-main-nav-bar/>

    <div class="d-flex justify-content-center align-items-center p-4">
        <div class="card p-5">
            <h2>{{ __('forgotPassword.passwordReset') }}</h2>
            <p>{{ __('forgotPassword.enterPassword') }}</p>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger shadow-sm" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form method="post" action="{{ route('password.update') }}" class="needs-validation" novalidate>
            @csrf
            <div>
                <label for="id_password" class="form-label mt-3">{{ __('forgotPassword.newPassword') }}</label>
                <input data-validator-func="passwordValidator" type="password" name="password" class="form-control" required id="id_password"/>
                <div class="invalid-feedback">{{ __('registerPage.passwordValidation') }}</div>
            </div>

            <div>
                <label for="id_confirm_password" class="form-label mt-3">{{ __('forgotPassword.reNewPassword') }}</label>
                <input data-validator-func="passwordConfirmationValidator" type="password" name="password_confirmation" class="form-control" required id="id_confirm_password"/>
                <div class="invalid-feedback">{{ __('registerPage.rePasswordValidation') }}</div>
            </div>

            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <input type="hidden" name="email" value="{{ request()->input('email') }}">

            <input class="btn btn-danger mt-3 px-3" type="submit" value="{{ __('forgotPassword.save') }}">
            </form>
        </div>
    </div>

    <x-footer />
@endsection

@section('beforeBodyEnd')
    @vite(['resources/js/passwordValidationForgotPassword.js',])
@endsection

@extends('layout')

@section('title',__('registerPage.title', ["websiteTitle" => __('general.websiteTitle')]))
<!-- Primary Meta Tags -->
@section('metaTitle', __('registerPage.title', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaDescription', __('homePage.register'))

<!-- Open Graph / Facebook -->
@section('metaOGurl', url()->full())
@section('metaOGtitle', __('registerPage.title', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaOGdescription', __('homePage.register'))
@section('metaOGimage', asset('imgs/vialsOfBlood.jpg'))
@section('metaOGLocale', Lang::locale() === "ar" ? Lang::locale()."_DZ" : Lang::locale()."_FR")

<!-- Twitter -->
@section('metaTwitterUrl', url()->full())
@section('metaTwitterTitle', __('registerPage.title', ["websiteTitle" => __('general.websiteTitle')]))
@section('metaTwitterDescription', __('homePage.register'))
@section('metaTwitterImage', asset('imgs/vialsOfBlood.jpg'))

@section('head')
    <link href="{{ asset('css/registerPage.css') }}" rel="stylesheet">
@endsection

@section('body')
    <x-main-nav-bar/>

    <div class="formFieldsWrapper m-4">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger shadow-sm" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <form name="signUpForm" class="needs-validation" action="{{ route('register') }}" method="post" novalidate>
            @csrf

            <div>
                <label for="id_blood_group" class="form-label mt-2">{{ __('registerPage.bloodGroup') }}</label>
                <select data-validator-func="bloodGroupValidator" name="blood_group" class="form-select " id="id_blood_group">
                    <option selected hidden style="display:none" value="">{{ __('registerPage.bloodGroup') }}</option>
                    <option value="1">A+</option>
                    <option value="2">A-</option>
                    <option value="3">B+</option>
                    <option value="4">B-</option>
                    <option value="5">O+</option>
                    <option value="6">O-</option>
                    <option value="7">AB+</option>
                    <option value="8">AB-</option>
                </select>
                <div class="invalid-feedback">{{ __('registerPage.bloodGroupValidation') }}</div>
            </div>

            <div>
                <label for="wilayaSelect" class="form-label mt-3">{{ __('homePage.wilaya') }}</label>
                <select data-validator-func="wilayaValidator" name="wilaya" id="wilayaSelect" class="form-select" required>
                    <option selected hidden style="display:none" value="">{{ __('homePage.wilaya') }}</option>
                    @foreach ($wilayas as $wilaya)
                        <option value="{{ $wilaya['id'] }}">{{ $wilaya['id'].'. '.$wilaya[$wilayaName] }} </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">{{ __('registerPage.wilayaValidation') }}</div>
            </div>


            <div>
                <label for="dairaSelect" class="form-label mt-3">{{ __('registerPage.daira') }}</label>
                <select data-validator-func="dairaValidator" name="daira" id="dairaSelect" class="form-select" disabled required>
                    <option selected hidden style="display:none" value="">{{ __('registerPage.daira') }}</option>
                </select>
                <div class="invalid-feedback">{{ __('registerPage.dairaValidation') }}</div>
            </div>

            <div>
                <label for="id_phone" class="form-label mt-3">{{ __('registerPage.phoneNumber') }}</label>
                <input dir="auto" data-validator-func="phoneValidator" type="text" name="phone" maxlength="10" class="form-control" required id="id_phone" value="{{ old('phone') }}" />
                <div class="invalid-feedback">{{ __('registerPage.phoneNumberValidation') }}</div>
            </div>

            <div>
                <label for="id_email" class="form-label mt-3">{{ __('registerPage.email') }}</label>
                <input dir="auto" data-validator-func="emailValidator" type="email" name="email" maxlength="60" class="form-control" required id="id_email" value="{{ old('email') }}" />
                <div class="invalid-feedback emailInvalidFeedBack">{{ __('registerPage.emailValidation') }}</div>
            </div>

            <div>
                <label for="id_password" class="form-label mt-3">{{ __('registerPage.password') }}</label>
                <input dir="auto" data-validator-func="passwordValidator" type="password" name="password" class="form-control" required id="id_password" />
                <div class="invalid-feedback">{{ __('registerPage.passwordValidation') }}</div>
            </div>

            <div class="mb-3">
                <label for="id_confirm_password" class="form-label mt-3">{{ __('registerPage.rePassword') }}</label>
                <input dir="auto" data-validator-func="passwordConfirmationValidator" type="password" name="password_confirmation" class="form-control" required id="id_confirm_password" />
                <div class="invalid-feedback">{{ __('registerPage.rePasswordValidation') }}</div>
            </div>

            {!! NoCaptcha::display() !!}

            <input class="btn btn-danger my-3 w-100" id="submitBtn" type="submit" value="{{ __('registerPage.register') }}" />
            <span class="text-dark d-block text-center">{{ __('registerPage.alreadyMember') }}<a href="{{ route('login') }}" class="text-danger text-decoration-none"> {{ __('registerPage.login') }}</a></span>

        </form>
    </div>

    <x-footer />
@endsection

@section('beforeBodyEnd')
    <script src="{{ asset('js/gettingDairas.js') }}"></script>
    <script src="{{ asset('js/registerPage.js') }}"></script>
    {!! NoCaptcha::renderJs( LaravelLocalization::getCurrentLocale() ) !!}
@endsection

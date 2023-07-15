@extends('layout')

@section('title', !$isSearch ? __('donorsPage.title', ['websiteTitle' => __('general.websiteTitle')]) :
    __('donorsPage.tabTitleWhileResults', ['websiteTitle' => __('general.websiteTitle')]))

{{-- Primary Meta Tags --}}
@section('metaDescription', __('donorsPage.pageDescription'))

{{-- Open Graph / Facebook --}}
@section('metaOGurl', url()->full())
@section('metaOGtitle', !$isSearch ? __('donorsPage.title', ['websiteTitle' => __('general.websiteTitle')]) :
    __('donorsPage.tabTitleWhileResults', ['websiteTitle' => __('general.websiteTitle')]))
@section('metaOGdescription', __('donorsPage.pageDescription'))
@section('metaOGimage', asset('imgs/vialsOfBlood.jpg'))
@section('metaOGLocale', Lang::locale() === 'ar' ? Lang::locale() . '_DZ' : Lang::locale() . '_FR')

{{-- Twitter --}}
@section('metaTwitterUrl', url()->full())
@section('metaTwitterTitle', !$isSearch ? __('donorsPage.title', ['websiteTitle' => __('general.websiteTitle')]) :
    __('donorsPage.tabTitleWhileResults', ['websiteTitle' => __('general.websiteTitle')]))
@section('metaTwitterDescription', __('donorsPage.pageDescription'))
@section('metaTwitterImage', asset('imgs/vialsOfBlood.jpg'))

@section('head')
    @if (Route::currentRouteName() === 'donorsSearch')
        <meta name="robots" content="noindex">
    @endif
    @vite(['resources/css/donorsPage.css', 'resources/css/stats.css'])
@endsection

@section('body')
    <x-main-nav-bar donorsActive="active" />
    <div class="separator"> </div>
    <x-search-blood-form />

    <div class="searchResult container d-flex flex-wrap gap-4 justify-content-center">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        @if (isset($donors))
            @if (!count($donors))
                <div class="alert alert-danger text-center noDonorsMsg" role="alert">
                    {{ __('donorsPage.noDonorsMsg') }}
                </div>
            @else
                @if ($searchedBloodGroup or $searchedWilaya or $searchedDaira)
                    <div class="resultTitle alert alert-success text-center fs-3 w-100" role="alert">
                        @isset($searchedBloodGroup)
                            {{ __('donorsPage.donorsSearchResultText') }} <span
                                class="text-danger fw-bold">{{ $searchedBloodGroup }}</span>
                        @endisset

                        @isset($searchedWilaya)
                            {{ __('registerPage.wilaya') }}: <span class="text-danger fw-bold">{{ $searchedWilaya }}</span>
                        @endisset

                        @isset($searchedDaira)
                            {{ ',' . __('registerPage.daira') }}: <span class="text-danger fw-bold">{{ $searchedDaira }}</span>
                        @endisset
                    </div>
                @endif

                @foreach ($donors as $donor)
                    <div class="container shadow-lg donorCard d-flex flex-column">
                        <div class="donorInfo px-3 py-3 row">
                            <div class="infos col-9">
                                <span class="text-danger fs-4"><strong class="text-dark">{{ __('registerPage.wilaya') }}:
                                    </strong>{{ $donor->wilaya->name }}</span>
                                <br>
                                <span class="text-danger fs-4"><strong class="text-dark">{{ __('registerPage.daira') }}:
                                    </strong>{{ $donor->daira->name }}</span>
                            </div>

                            <div class="bloodGroup col-3 d-flex align-items-center">
                                <span class="text-danger">{{ $donor->bloodGroup->bloodGroup }}</span>
                            </div>
                        </div>

                        <div class="donorPhone bg-danger p-3 bg-light row">
                            <a class="col-4 d-lg-none" href="tel:{{ $donor->phone }}"><button class="btn btn-success w-100"
                                    type="button">
                                    <svg class="d-lg-inline bg-success rounded-circle phoneIcon"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                    </svg>
                                </button></a>
                            <strong
                                class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4"
                                style="user-select: all;">
                                <svg style="margin-inline-end: 10px;"
                                    class="d-none d-lg-inline bg-success rounded-circle phoneIcon"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                </svg>
                                <span>{{ $donor->phone }}</span></strong>
                        </div>
                    </div>
                @endforeach
                {{ $donors->withQueryString()->links() }}
            @endif
        @else
            @foreach ($allReadyToGiveDonors as $donor)
                <div class="container shadow-lg donorCard d-flex flex-column">
                    <div class="donorInfo px-3 py-3 row">
                        <div class="infos col-9">
                            <span class="text-danger fs-4"><strong class="text-dark">{{ __('registerPage.wilaya') }}:
                                </strong>{{ $donor->wilaya->name }}</span>
                            <br>
                            <span class="text-danger fs-4"><strong class="text-dark">{{ __('registerPage.daira') }}:
                                </strong>{{ $donor->daira->name }}</span>
                        </div>

                        <div class="bloodGroup col-3 d-flex align-items-center">
                            <span class="text-danger">{{ $donor->bloodGroup->bloodGroup }}</span>
                        </div>
                    </div>

                    <div class="donorPhone bg-danger p-3 bg-light row">
                        <a class="col-4 d-lg-none" href="tel:{{ $donor['phone'] }}"><button class="btn btn-success w-100"
                                type="button">
                                <svg class="d-lg-inline bg-success rounded-circle phoneIcon"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                </svg>
                            </button></a>
                        <strong
                            class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4"
                            style="user-select: all;">
                            <svg style="margin-inline-end: 10px;"
                                class="d-none d-lg-inline bg-success rounded-circle phoneIcon"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                            </svg>
                            <span>{{ $donor['phone'] }}</span></strong>
                    </div>
                </div>
            @endforeach
            {{ $allReadyToGiveDonors->withQueryString()->links() }}
        @endif

    </div>

    @if (isset($otherDonors))
        @if (count($otherDonors))
            <div class="searchResult container d-flex flex-wrap gap-4 justify-content-center">
                <div class="resultTitle alert alert-success text-center fs-3 w-100" role="alert">
                    {{ __('donorsPage.otherDonorsMessage') }} <span
                        class="text-danger fw-bold">{{ $searchedBloodGroup }}</span>
                    @isset($searchedWilaya)
                        {{ __('registerPage.wilaya') }}: <span class="text-danger fw-bold">{{ $searchedWilaya }}</span>
                    @endisset
                    @isset($searchedDaira)
                        {{ ',' . __('registerPage.daira') }}: <span class="text-danger fw-bold">{{ $searchedDaira }}</span>
                    @endisset
                </div>
                @foreach ($otherDonors as $donor)
                    <div class="container shadow-lg donorCard d-flex flex-column">
                        <div class="donorInfo px-3 py-3 row">
                            <div class="infos col-9">
                                <span class="text-danger fs-4"><strong class="text-dark">{{ __('registerPage.wilaya') }}:
                                    </strong>{{ $donor->wilaya->name }}</span>
                                <br>
                                <span class="text-danger fs-4"><strong class="text-dark">{{ __('registerPage.daira') }}:
                                    </strong>{{ $donor->daira->name }}</span>
                            </div>

                            <div class="bloodGroup col-3 d-flex align-items-center">
                                <span class="text-danger">{{ $donor->bloodGroup->bloodGroup }}</span>
                            </div>
                        </div>

                        <div class="donorPhone bg-danger p-3 bg-light row">
                            <a class="col-4 d-lg-none" href="tel:{{ $donor->phone }}"><button class="btn btn-success w-100"
                                    type="button">
                                    <svg class="d-lg-inline bg-success rounded-circle phoneIcon"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                    </svg>
                                </button></a>
                            <strong
                                class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4"
                                style="user-select: all;">
                                <svg style="margin-inline-end: 10px;"
                                    class="d-none d-lg-inline bg-success rounded-circle phoneIcon"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                </svg>
                                <span>{{ $donor->phone }}</span></strong>
                        </div>
                    </div>
                @endforeach
                {{ $otherDonors->withQueryString()->links() }}
            </div>
        @endif
    @endif

    <x-stats />
    <x-footer />
@endsection

@section('beforeBodyEnd')
    @vite(['resources/js/donorsPage.js', 'resources/js/donorsSearchFormValidation.js', 'resources/js/gettingDairas.js'])
@endsection

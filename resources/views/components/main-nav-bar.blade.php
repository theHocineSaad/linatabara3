<nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm sticky-lg-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ asset(Lang::locale() === 'ar' ? 'imgs/linatabara3Logo.png' : 'imgs/linatabara3LogoAscii.png' )
                }}" alt="Linatabara3 Logo" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggler">

            <div class="languageSwitcher text-center">
                <a rel="alternate" hreflang="{{ LaravelLocalization::getCurrentLocaleNative() === 'Français' ? 'ar' : 'fr' }}" href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocaleNative() === 'Français' ? 'ar' : 'fr', null, [], true) }}"
                    style="{{ LaravelLocalization::getCurrentLocale() === 'fr' ? " font-family: 'Noto Kufi Arabic', sans-serif;" : "font-family: 'Nunito', sans-serif;" }}"
                    class="px-3 mt-2 mt-lg-0 btn btn-danger btn-sm py-1">{{
                    LaravelLocalization::getCurrentLocaleNative() === 'Français' ? 'العربية' : 'Francais' }}</a>
            </div>

            <ul class="navbar-nav mb-2 mb-lg-0 fw-bold">
                <li class="nav-item">
                    <a class="nav-link {{ $homeActive ?? '' }}" aria-current="page" href="{{ route('homePage') }}">{{
                        __('homePage.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $donorsActive ?? '' }}" href="{{ route('donorsPage') }}">{{
                        __('homePage.donors') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $aboutActive ?? '' }}" href="{{ route('aboutPage') }}">{{ __('homePage.about')
                        }}</a>
                </li>
                <li class="nav-item">

                    <button type="button" class="nav-link btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#contactModal">
                        {{ __('homePage.contact') }}
                    </button>

                </li>
            </ul>

            @auth
            <div class="dropdown d-flex justify-content-center">
                <button class="btn btn-danger dropdown-toggle" type="button" id="accountDropDownMenu"
                    data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->email }}</button>
                <ul class="dropdown-menu" aria-labelledby="accountDropDownMenu">
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('homePage.myAccount') }}</a></li>

                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input class="dropdown-item" type="submit" value="{{ __('general.logOut') }}">
                        </form>
                    </li>

                </ul>
            </div>
            @else
            <div class="d-flex flex-column flex-xl-row">
                @include('components.register-btn')
                <a href="{{ route('login') }}"
                    class="text-dark text-decoration-none d-flex align-items-center justify-content-center mt-3 ms-xl-4 mt-xl-0">{{
                    __('homePage.myAccount') }}</a>
            </div>
            @endauth

        </div>
    </div>
</nav>
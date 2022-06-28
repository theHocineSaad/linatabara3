<footer class="bg-dark">
    <div class="container d-flex flex-column align-items-center py-5">
        <a href="{{ route('homePage') }}"><img src="https://xgenious.com/laravel/weforyou/assets/uploads/site-logo-70930.png" alt="Linatabara3 Logo" height="40px"></a>

        <div class="d-flex flex-column flex-sm-row align-items-center">
            <a class="footerLink text-decoration-none text-white px-3 mt-4 mt-sm-3" href="{{ route('homePage') }}">{{ __('homePage.home') }}</a>
            <a class="footerLink text-decoration-none text-white px-3 mt-3" href="{{ route('donorsPage') }}">{{ __('homePage.donors') }}</a>
            <a class="footerLink text-decoration-none text-white px-3 mt-3" href="{{ route('homePage') }}">{{ __('homePage.about') }}</a>
            <a class="footerLink text-decoration-none text-white px-3 mt-3" href="{{ route('homePage') }}">{{ __('homePage.contact') }}</a>
        </div>

        <div class="w-75">
            <p class="text-white mt-3 text-center fw-bold">
                {{ __('footer.text') }}
            </p>
        </div>

        <span class="text-white">---</span>

        <div class="w-75">
            <p class="text-white mt-3 text-center">
                {{ __('footer.openSource') }}
            </p>

            <div class="social-btns">
                <a class="btn github" href="#">
                    <i class="fab fa-github"></i>
                </a>

            </div>
        </div>

        <span class="text-white mt-3">{{ __('footer.followUs') }}</span>
        <div class="findUsOnSocialMedia bg-dark d-flex justify-content-end align-items-center">
            <div class="social-btns">
                <a class="btn facebook" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="btn instagram" href="#">
                    <i class="fab fa-instagram"></i>
                </a>

            </div>
        </div>

    </div>

</footer>






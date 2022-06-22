<div class="shadow-sm">
    <div class="container col-xxl-8 px-4 py-5 hero">
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6 mt-xl-0">
                <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">{{ __('homePage.mainHeadLine') }}</h1>
                <p class="lead text-center text-lg-start">{{ __('homePage.subHeadLine') }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center justify-content-lg-start">
                    <a href="{{ route('register') }}" class="btn btn-danger btn-lg px-4 me-md-2">{{ __('homePage.register') }} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/></svg></a>
                    <a href="#" class="btn btn-outline-danger btn-lg px-4">{{ __('homePage.secondCtaBtn') }}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center mb-5">
                <img src="{{ asset('/imgs/homeHeroImage.svg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</div>

<x-search-blood-form />



<div class="shadow-sm">
    <div class="container col-xxl-8 px-4 py-5 hero">
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6 mt-xl-0">
                <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">{{ __('homePage.mainHeadLine') }}</h1>
                <p class="lead text-center text-lg-start">{{ __('homePage.subHeadLine') }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center justify-content-lg-start">
                    @include('components.register-btn')
                    <a href="{{ route('donorsPage') }}" class="btn btn-outline-danger btn-lg px-4">{{ __('homePage.secondCtaBtn') }}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center mb-5">
                <img src="{{ asset('/imgs/homeHeroImage.svg') }}" class="d-block mx-lg-auto img-fluid" width="700" height="500">
            </div>
        </div>
    </div>
</div>

<x-search-blood-form />



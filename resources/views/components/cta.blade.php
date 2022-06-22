<section class="cta py-5 my-5 bg-dark">

    <div class="container d-flex flex-column align-items-center">
        <p class="text-white fs-2 text-center">{{ __('cta.title') }}</p>
        <p class="text-white text-center fs-5">{{ __('cta.description') }}</p>
        <p class="text-white fs-3">{{ __('cta.shareText') }}</p>
    </div>

    <div class="shareBtns container d-flex flex-column flex-sm-row flex-wrap align-items-center justify-content-center">

        <a href="https://www.facebook.com/sharer/sharer.php?u={{ env('APP_URL') }}" class="fbShare btn d-flex align-items-center justify-content-center" target="_blank" rel="nofollow">
            <i class="fab fa-facebook"></i>
            <span>Facebook</span>
        </a>

        <a href="https://www.facebook.com/dialog/send?link={{ env('APP_URL') }}&app_id=194134865891187&redirect_uri={{ env('APP_URL') }}" class="messengerShare btn d-flex align-items-center justify-content-center my-3 my-lg-0 mx-sm-3" target="_blank" rel="nofollow">
            <i class="fab fa-facebook-messenger"></i>
            <span>Messenger</span>
        </a>

        <a href="https://web.whatsapp.com/send?text={{ env('APP_URL') }}" class="instagramShare btn d-flex align-items-center justify-content-center" target="_blank" rel="nofollow">
            <i class="fab fa-whatsapp"></i>
            <span>Whatsapp</span>
        </a>

    </div>

</section>

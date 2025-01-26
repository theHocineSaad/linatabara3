<section class="stats py-5 container">

    <h2 class="text-danger fs-1 text-center mb-4">{{ __('stats.title') }}</h2>

    <div class="d-flex flex-wrap align-items-center justify-content-center">

        @foreach ($stats as $stat)
            <a href="/donors/search?blood_group={{ $stat->id }}"
                class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
                <span class="bloodGroup text-danger">{{ $stat->bloodGroup }}</span>
                <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stat->users_count }}</span>
            </a>
        @endforeach

    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-center mt-4">
        @include('components.register-btn')
    </div>

</section>

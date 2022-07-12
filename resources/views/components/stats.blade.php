<section class="stats py-5 container">

    <h2 class="text-danger fs-1 text-center mb-4">{{ __('stats.title') }}</h2>

    <div class="d-flex flex-wrap align-items-center justify-content-center">

        @foreach ($stats as $stat)
            <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
                <span class="bloodGroup text-danger">{{ $stat->bloodGroup }}</span>
                <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stat->users_count }}</span>
            </div>
        @endforeach

    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-center mt-4">
        <a href="{{ route('register') }}" class="btn btn-danger btn-lg px-4 me-md-2">{{ __('homePage.register') }}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg></a>
    </div>

</section>

<section class="stats py-5 container">

    <h2 class="text-danger fs-1 text-center mb-4">{{ __('stats.title') }}</h2>

    <div class="d-flex flex-wrap align-items-center justify-content-center">
        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">A+</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['0']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">A-</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['1']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">B+</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['2']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">B-</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['3']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">AB+</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['4']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">AB-</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['5']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg">
            <span class="bloodGroup text-danger">O+</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['6']->users_count }}</span>
        </div>

        <div class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow">
            <span class="bloodGroup text-danger">O-</span>
            <span class='statNumber shadow bg-danger fs-5 text-white py-2 px-3'>{{ $stats['7']->users_count }}</span>
        </div>
    </div>
</section>

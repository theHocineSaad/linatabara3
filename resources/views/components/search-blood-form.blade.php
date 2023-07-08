<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 rounded-3 shadow p-5 position-relative bg-white searchBox">
            <h3 class="text-center mb-4">{{ __('homePage.findDonors') }}</h3>

            <form id="donorsSearchForm" action="{{ route('donorsPage') }}" method="get"
                class="d-flex flex-column flex-xl-row gap-3" novalidate>
                <div class="w-100">
                    <select name="blood_group" id="bloodGroup" class="form-select form-select-lg">
                        <option selected hidden style="display:none" value="">{{ __('homePage.bloodGroup') }}</option>

                        @foreach ($bloodGroups as $bloodGroup)
                            <option value="{{ $bloodGroup->id }}" @selected(old('blood_group') == $bloodGroup->id)>
                                {{ $bloodGroup->bloodGroup }}
                            </option>
                        @endforeach

                    </select>

                    <div class="invalid-feedback">
                        {{ __('homePage.bloodGroupValidation') }}
                    </div>
                </div>

                <div class="w-100">
                    <select name="baladia" id="baladiaSelect" class="form-select form-select-lg">
                        <option selected hidden style="display:none" value="">{{ __('homePage.baladia') }}
                        </option>
                        @foreach ($baladiat as $baladia)
                            <option value="{{ $baladia->id }}" @selected(old('baladia') == $baladia->id)>
                                {{ $baladia->id . '. ' . $baladia->name }}
                            </option>
                        @endforeach
                    </select>

                    <div class="invalid-feedback">
                        {{ __('homePage.baladiaValidation') }}
                    </div>
                </div>

                <button class="btn btn-danger px-5 searchDonorsBtn" type="submit"><svg
                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </form>
        </div>
    </div>
</div>

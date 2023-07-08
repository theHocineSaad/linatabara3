<div class="formFieldsWrapper m-4 p-4 rounded shadow-lg">
    <form name="userEditForm" class="needs-validation" action="{{ route('user-profile-information.update') }}"
        method="post" novalidate>
        @csrf
        @method('PUT')

        @if (session('status') and session('status') === 'profile-information-updated')
            <p class="alert alert-success">{{ __('userDashboard.profileInformationUpdated') }}</p>
        @elseif(session('status') and session('status') === 'password-updated')
            <p class="alert alert-success">{{ __('userDashboard.passwordUpdated') }}</p>
        @endif

        @if ($errors->updateProfileInformation->any())
            @foreach ($errors->updateProfileInformation->all() as $error)
                <div class="alert alert-danger shadow-sm" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        @if ($errors->updatePassword->any())
            @foreach ($errors->updatePassword->all() as $error)
                <div class="alert alert-danger shadow-sm" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div>
            <label for="baladiaSelect" class="form-label mt-3">{{ __('registerPage.baladia') }}</label>
            <select data-validator-func="baladiaValidator" name="baladia" id="baladiaSelect" class="form-select" required>
                <option value="" selected disabled>{{ __('registerPage.baladia') }}</option>
                @foreach ($baladiat as $baladia)
                    <option value="{{ $baladia->id }}">{{ $baladia->id . '. ' . $baladia->name }} </option>
                @endforeach
            </select>
            <div class="invalid-feedback">{{ __('registerPage.baladiaValidation') }}</div>
        </div>

        <div>
            <label for="id_phone" class="form-label mt-3">{{ __('registerPage.phoneNumber') }}</label>
            <input dir="auto" data-validator-func="phoneValidator" type="text" name="phone" maxlength="10"
                class="form-control" required id="id_phone" value="{{ Auth::user()->phone }}" />
            <div class="invalid-feedback">{{ __('registerPage.phoneNumberValidation') }}</div>
        </div>

        <div>
            <label for="id_email" class="form-label mt-3">{{ __('registerPage.email') }}</label>
            <input dir="auto" data-validator-func="emailValidator" type="email" name="email" maxlength="60"
                class="form-control" required id="id_email" value="{{ Auth::user()->email }}" />
            <div class="invalid-feedback emailInvalidFeedBack">{{ __('registerPage.emailValidation') }}</div>
        </div>

        <div>
            <label class="form-label mt-3 d-block">{{ __('userDashboard.passwordEditTitle') }}</label>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#passwordChangeModal">{{ __('userDashboard.passwordEditBtn') }}</button>
        </div>

        <div class="form-check form-switch mt-4">
            <input name="ready_to_give" class="form-check-input" type="checkbox" id="readyToGive">
            <label class="form-check-label"
                for="flexSwitchCheckDefault">{{ __('userDashboard.amReadyToGive') }}</label>
            <span class="form-text d-block">{{ __('userDashboard.readyToGiveDescription') }}</span>
        </div>

        <input class="btn btn-danger my-3 w-100" id="submitBtn" type="submit"
            value="{{ __('userDashboard.save') }}" />
    </form>
</div>

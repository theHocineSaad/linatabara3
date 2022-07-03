<div class="modal fade" id="passwordChangeModal" tabindex="-1" aria-labelledby="passwordChangeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordChangeModalLabel">{{ __('userDashboard.passwordEditTitle') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="userPasswordEditForm" id="userPasswordEditForm" class="needs-validation" action="{{ route('user-password.update') }}" method="post" novalidate>
                    @method('put')
                    @csrf

                    <div>
                        <label for="id_password_current_password" class="form-label">{{ __('userDashboard.currentPassword') }}</label>
                        <input dir="auto" data-validator-func="passwordValidator" type="password" name="current_password" class="form-control" required id="id_password_current_password" />
                        <div class="invalid-feedback">{{ __('userDashboard.currentPasswordValidation') }}</div>
                    </div>

                    <div>
                        <label for="id_password" class="form-label mt-3">{{ __('userDashboard.newPassword') }}</label>
                        <input dir="auto" data-validator-func="passwordValidator" type="password" name="password" class="form-control" required id="id_password"/>
                        <div class="invalid-feedback">{{ __('registerPage.passwordValidation') }}</div>
                    </div>

                    <div>
                        <label for="id_confirm_password" class="form-label mt-3">{{ __('userDashboard.reNewPassword') }}</label>
                        <input dir="auto" data-validator-func="passwordConfirmationValidator" type="password" name="password_confirmation" class="form-control" required id="id_confirm_password"/>
                        <div class="invalid-feedback">{{ __('registerPage.rePasswordValidation') }}</div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('userDashboard.cancel') }}</button>
                <button type="submit" form="userPasswordEditForm" class="btn btn-danger">{{ __('userDashboard.save') }}</button>
            </div>
        </div>
    </div>
</div>

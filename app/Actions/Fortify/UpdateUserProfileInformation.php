<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique(User::class)->ignore($user->id),
            ],
            'phone' => ['required', 'numeric', 'digits:10', Rule::unique(User::class)->ignore($user->id)],
            'wilaya' => ['required', 'exists:wilayas,id'],
            'daira' => ['required', 'exists:dairas,id'],
        ],
            [
                'email.unique' => __('registerPage.alreadyUsedEmail'),
                'phone.unique' => __('registerPage.alreadyUsedPhoneNumber'),
            ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'email' => $input['email'],
                'phone' => $input['phone'],
                'wilaya_id' => $input['wilaya'],
                'daira_id' => $input['daira'],
                'readyToGive' => array_key_exists('ready_to_give', $input) ? 1 : 0,
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'email' => $input['name'],
            'phone' => $input['email'],
            'wilaya_id' => $input['name'],
            'daira_id' => $input['name'],
            'readyToGive' => $input['ready_to_give'] === 'on' ? 1 : 0,
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}

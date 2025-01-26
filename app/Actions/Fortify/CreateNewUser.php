<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
//     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique(User::class),
            ],
            'phone' => ['required', 'numeric', 'digits:10', Rule::unique(User::class)],
            'wilaya' => ['required', 'exists:wilayas,id'],
            'daira' => ['required', 'exists:dairas,id'],
            'blood_group' => ['required', 'exists:blood_groups,id'],
            'password' => $this->passwordRules(),
            'g-recaptcha-response' => 'required|captcha',
        ],
            [
                'email.unique' => __('registerPage.alreadyUsedEmail'),
                'phone.unique' => __('registerPage.alreadyUsedPhoneNumber'),
            ])->validate();

        return User::create([
            'email' => $input['email'],
            'phone' => $input['phone'],
            'wilaya_id' => $input['wilaya'],
            'daira_id' => $input['daira'],
            'blood_group_id' => $input['blood_group'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

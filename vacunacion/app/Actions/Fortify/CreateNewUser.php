<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required','string','max:255'],
            'nameLastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'dni' => ['required' , 'integer', 'numeric'],
            'province' => ['required', 'string', 'max:255'],
            'city' => ['requred', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'username' => $input['username'],
            'name&lastname' => $input['name&lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'dni' => $input['dni'],
            'province' => $input['province'],
            'city' => $input['city'],
        ]);
    }
}

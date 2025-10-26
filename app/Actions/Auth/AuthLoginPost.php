<?php

namespace App\Actions\Auth;

use Dev\PHPActions\Action;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthLoginPost extends Action
{
    protected $validator = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function handle()
    {
        $email = $this->getData('email');
        $password = $this->getData('password');

        $user = User::where('email', $email)->first();

        if (empty($user)) {
            return null;
        }

        if (!Hash::check($password, $user->password)) {
            return null;
        }

        auth()->login($user);

        return [
            'user' => $user
        ];
    }
}

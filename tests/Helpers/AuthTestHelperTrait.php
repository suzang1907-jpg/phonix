<?php

namespace Tests\Helpers;

use App\Models\User;
use App\Routing\Admin;

trait AuthTestHelperTrait
{
    public function authLogin(User $user = null): User
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        auth()->login($user);

        $user->refresh();

        return $user;
    }


    public function authLogout(User $user = null): User | null
    {
        $this->post(Admin::route('admin.auth.logout'));

        if (!empty($user)) {
            $user->refresh();
        }

        return $user;
    }
}

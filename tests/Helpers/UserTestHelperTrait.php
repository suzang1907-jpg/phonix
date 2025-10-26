<?php

namespace Tests\Helpers;

use App\Models\User;

trait UserTestHelperTrait
{
    public function userCreate($data = [], $settingData = []): User
    {
        $userData = $data ?? [];

        $user = User::create(array_merge([
            'email' => 'test@test.com',
            'password' => bcrypt('12345678')
        ], $userData));

        $settingData['user_id'] = $user->id;

        return $user->fresh();
    }
}

<?php

namespace App\Models;

use App\Scopes\CurrentUserScope;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use Vue;

    protected $guarded = [];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function userTokens()
    {
        return $this->hasMany(UserToken::class)->withoutGlobalScope(CurrentUserScope::class);
    }

    public function googleAuthentication()
    {
        return $this->hasOne(GoogleAuthentication::class)->withoutGlobalScope(CurrentUserScope::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        unset($data['password']);

        return $data;
    }
}

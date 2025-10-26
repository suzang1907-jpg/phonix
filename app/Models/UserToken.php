<?php

namespace App\Models;

use App\Scopes\CurrentUserScope;
use App\Traits\Models\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    use HasFactory;
    use BelongsToUser;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CurrentUserScope);
    }

    public function isAdmin()
    {
        return $this->role == 'admin' ? true : false;
    }
}

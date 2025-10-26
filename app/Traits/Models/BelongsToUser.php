<?php

namespace App\Traits\Models;

use App\Models\Domain;
use App\Models\User;

trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function domains()
    {
        return $this->belongsToMany(Domain::class);
    }
}

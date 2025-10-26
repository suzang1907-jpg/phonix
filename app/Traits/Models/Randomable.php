<?php

namespace App\Traits\Models;

trait Randomable
{
    public function scopeRandom($query)
    {
        return $query->inRandomOrder();
    }
}

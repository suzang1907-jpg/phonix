<?php

namespace App\Traits\Models;

use App\Models\Customer;

trait BelongsToCustomer
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

<?php

namespace App\Models;

use App\Scopes\CurrentCustomerScope;
use App\Traits\Models\BelongsToCustomer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerToken extends Model
{
    use HasFactory;
    use BelongsToCustomer;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CurrentCustomerScope);
    }
}

<?php

namespace App\Models;

use App\Scopes\CurrentCustomerScope;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    use Downloadable;
    use Viewable;
    use Listable;
    use Randomable;
    use Vue;
    use Searchable;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'meta' => 'array'
    ];

    protected static function boot()
    {
     

        parent::boot();
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function customerTokens()
    {
        return $this->hasMany(CustomerToken::class)->withoutGlobalScope(CurrentCustomerScope::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        if (! auth('user')->check()) {
            unset($data['password']);
        }

        return $data;
    }
}

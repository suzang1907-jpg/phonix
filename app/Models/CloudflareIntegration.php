<?php

namespace App\Models;

use App\Traits\Models\BelongsToUser;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudflareIntegration extends Model
{
    use HasFactory;
    use BelongsToUser;
    use Downloadable;
    use Viewable;
    use Vue;

    protected $guarded = [];

    protected $casts = [
        'sitemaps_updated_at' => 'datetime',
        
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
    }

    public function vue()
    {
        $data = $this->toArray();

        return $data;
    }
}

<?php

namespace App\Models;

use App\Services\ProjectService;
use App\Traits\Models\BelongsToLocation;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use BelongsToLocation;
    use HasFactory;
    use Downloadable;
    use Searchable;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public $searchable = [];

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();
    }

    public function blog()
    {
        return $this->hasOne(Blog::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        return $data;
    }
}

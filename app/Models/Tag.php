<?php

namespace App\Models;

use App\Traits\Models\BelongsToUser;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use BelongsToUser;
    use Downloadable;
    use Listable;
    use Searchable;
    use Viewable;
    use Vue;

    protected $guarded = [];

    public $searchable = [
        'tag',
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'conditions' => 'array',

    ];

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

<?php

namespace App\Models;

use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;
    use Searchable;

    protected $guarded = [];

    protected $casts = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        return $data;
    }
}

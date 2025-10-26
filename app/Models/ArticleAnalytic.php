<?php

namespace App\Models;

use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleAnalytic extends Model
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
        'date' => 'datetime',
        'meta' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        if (! auth()->check()) {
            unset($data['telegram_click_count']);
        }

        return $data;
    }
}

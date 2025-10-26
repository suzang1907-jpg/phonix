<?php

namespace App\Models;

use App\Scopes\KeywordWorkspaceScope;
use App\Traits\Models\BelongsToLocation;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;
    use BelongsToLocation;
    use Downloadable;
    use Searchable;
    use Viewable;
    use Listable;
    use Vue;

    protected $guarded = [];

    public $searchable = [
        'keyword',
    ];

    protected $casts = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new KeywordWorkspaceScope);
    }

    public static function allToString()
    {
        $keywords = Keyword::get();

        if (empty($keywords)) {
            return '';
        }

        $result = [];

        foreach ($keywords as $keyword) {
            array_push($result, $keyword->keyword);
        }

        return implode(',', $result);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        $data['location'] = $this->location?->vue();

        return $data;
    }
}

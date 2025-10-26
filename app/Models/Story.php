<?php

namespace App\Models;

use App\Scopes\StoryWorkspaceScope;
use App\Traits\Models\BelongsToLocation;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dev\LaravelAssets\Models\Image;

class Story extends Model
{
    use BelongsToLocation;
    use HasFactory;
    use Downloadable;
    use Viewable;
    use Listable;
    use Searchable;
    use Randomable;

    protected $guarded = [];

    public $searchable = [
        'title',
        'description'
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'tags' => 'array',

    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new StoryWorkspaceScope);
    }

    public function location()
    {
        return $this->belongsTo(Location::class)->with(['country', 'city', 'district']);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        if (auth()->check()) {
            $data['location'] = $this->location?->vue();
        }

        return $data;
    }
}

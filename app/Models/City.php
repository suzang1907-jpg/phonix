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

class City extends Model
{
    use HasFactory;
    use Downloadable;
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

    protected static function boot()
    {
        parent::boot();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function blogs()
    {
        return $this->hasManyThrough(Blog::class, Location::class);
    }

    public function queryBlogs()
    {
        return Blog::whereHas('location', function ($query) {
            $query->where('locations.country_id', $this->country_id);
            $query->where('locations.city_id', $this->id);
        });
    }

    public function queryStories()
    {
        return Story::whereHas('location', function ($query) {
            $query->where('locations.country_id', $this->country_id);
            $query->where('locations.city_id', $this->id);
        });
    }

    public function queryDomains()
    {
        return Domain::whereHas('location', function ($query) {
            $query->where('locations.country_id', $this->country_id);
            $query->where('locations.city_id', $this->id);
        });
    }

    public function vue()
    {
        $data = $this->toArray();

        if (auth()->check()) {
            $blog_count = $this->queryBlogs()->count();
            $story_count = $this->queryStories()->count();
            $domain_count = $this->queryDomains()->count();

            $data['blog_count'] = $blog_count;
            $data['story_count'] = $story_count;
            $data['domain_count'] = $domain_count;
        }

        return $data;
    }
}

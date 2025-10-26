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

class District extends Model
{
    use HasFactory;
    use Downloadable;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;
    use Searchable;

    protected $guarded = [];

    public $cachable = [
        'url_submission_status' => '86400',
        'url_submitted_at' => '86400'
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();
    }

    public function city()
    {
        return $this->belongsTo(City::class);
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
            $query->where('locations.country_id', $this->city->country_id);
            $query->where('locations.city_id', $this->city_id);
            $query->where('locations.district_id', $this->id);
        });
    }

    public function queryStories()
    {
        return Story::whereHas('location', function ($query) {
            $query->where('locations.country_id', $this->city->country_id);
            $query->where('locations.city_id', $this->city_id);
            $query->where('locations.district_id', $this->id);
        });
    }

    public function queryDomains()
    {
        return Domain::whereHas('location', function ($query) {
            $query->where('locations.country_id', $this->city->country_id);
            $query->where('locations.city_id', $this->city_id);
            $query->where('locations.district_id', $this->id);
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

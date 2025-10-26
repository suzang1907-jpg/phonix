<?php

namespace App\Models;

use App\Scopes\CurrentProjectScope;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;
    use Searchable;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CurrentProjectScope);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dnsRecords()
    {
        return $this->hasMany(DnsRecord::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function cloudflareIntegration()
    {
        return $this->belongsTo(CloudflareIntegration::class, 'cloudflare_integration_id');
    }

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }

    public function sitemaps()
    {
        return $this->hasManyThrough(Sitemap::class, Domain::class);
    }

    public function vue()
    {
        $data = $this->toArray();

        if (!auth()->check()) {
            unset($data['cloudflare_integration_id']);
        }

        return $data;
    }
}

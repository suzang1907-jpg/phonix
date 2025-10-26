<?php

namespace App\Models;

use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dev\LaravelAssets\Models\Image;

class Project extends Model
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

    protected $casts = [
        'api_ips' => 'array',
        'meta_data' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function stories()
    {
        return $this->hasMany(Story::class);
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }

    public function domains()
    {
        return $this->hasManyThrough(Domain::class, Site::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class)->with(['country', 'city', 'district']);
    }

    public function logo()
    {
        return $this->belongsTo(Image::class, 'logo_id');
    }

    public function ampLogo()
    {
        return $this->belongsTo(Image::class, 'amp_logo_id');
    }

    public function articleWatermark()
    {
        return $this->belongsTo(Image::class, 'article_watermark_id');
    }

    public function articleBanner()
    {
        return $this->belongsTo(Image::class, 'article_banner_id');
    }

    public function supportBanner()
    {
        return $this->belongsTo(Image::class, 'support_banner_id');
    }

    public function googleIntegrations()
    {
        return $this->hasMany(GoogleIntegration::class);
    }

    public function getMetaData(string | null $key = null)
    {
        $meta_data = $this->meta_data;

        if (!empty($key)) {
            return $meta_data[$key] ?? null;
        }

        if (empty($meta_data)) {
            return null;
        }

        return $meta_data;
    }

    public function vue()
    {
        $data = $this->toArray();

        if (!auth()->check()) {
            unset($data['cloudflare_api_email']);
            unset($data['cloudflare_api_key']);
            unset($data['server_ip']);
            unset($data['api_key']);
            unset($data['api_ips']);
        }

        if (auth()->check()) {
            $data['location'] = $this->location?->vue();
            $data['api_ips'] = implode(',', $this->api_ips ?? []);
        }

        return $data;
    }
}

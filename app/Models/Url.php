<?php

namespace App\Models;

use App\Services\DomainService;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Url extends Model
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
        'meta' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

    public function targetDomain()
    {
        return $this->belongsTo(Domain::class, 'target_domain_id');
    }

    public static function createForUrl(Domain $targetDomain = null, Domain $domain = null, $url = null, $routeName = null): Url
    {
        $url = $url ?? url()->full();

        $urlModel = Url::where('path', $url)->first();

        if (! empty($urlModel)) {
            return $urlModel;
        }

        $domain = $domain ?? DomainService::getDomain();
        $routeName = $routeName ?? Route::current()->getName();
        $target_path = null;

        if (! empty($targetDomain)) {
            if ($domain->domain == $targetDomain->domain) {
                $targetDomain = null;
            } else {
                if ($routeName == 'web.location.district.show' && ! empty($targetDomain->location?->district_id)) {
                    $target_path = 'https://' . $targetDomain->domain . '/';
                } else if ($routeName == 'web.location.city.show') {
                    $target_path = 'https://' . $targetDomain->domain . '/';
                } else {
                    $target_path = str_replace($domain->domain, $targetDomain->domain, $url);
                }
            }
        }

        $id = Str::slug('url-' . Str::random(32) . '-' . now()->timestamp . '-' . $domain->id);

        $urlModel = Url::create([
            'id' => $id,
            'path' => $url,
            'target_path' => $target_path,
            'domain_id' => $domain->id,
            'target_domain_id' => $targetDomain?->id,
        ]);

        return $urlModel;
    }

    public function vue()
    {
        $data = $this->toArray();

        return $data;
    }
}

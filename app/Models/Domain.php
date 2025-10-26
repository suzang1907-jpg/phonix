<?php

namespace App\Models;

use App\Constants\DomainType;
use App\Scopes\CurrentProjectScope;
use App\Scopes\DomainProjectScope;
use App\Services\DomainService;
use App\Services\ProjectService;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    use Downloadable;
    use Listable;
    use Randomable;
    use Vue;
    use Searchable;

    private $c_domain = null;

    protected $guarded = [];

    protected $casts = [
        'dns_record_confirmed_at' => 'datetime',
        'referal_domains' => 'array',
        'meta' => 'array'
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function booted()
    {
        static::addGlobalScope(new DomainProjectScope);
    }

    public function keywordsToString()
    {
        return Keyword::allToString();
    }

    public function getName(): string
    {
        $project = ProjectService::getProject();

        $name = $this->name ?? $project?->name ?? '';

        if (empty($name)) {
            return 'Blogger';
        }

        return $name;
    }

    public function getLocalizedName(): string
    {
        $name = $this->name;

        if (empty($name)) {
            $name = $this->site?->project?->name;
        }

        $location = $this->location;

        if (!empty($name) && !empty($location)) {
            if (!empty($location->district)) {
                $name = __('location.' . $location->district->district) . ' ' . $name;
            }

            if (!empty($location->city)) {
                $name = __('location.' . $location->city->city) . ' ' . $name;
            }
        }

        if (empty($name)) {
            return 'Blogger';
        }

        return $name;
    }

    public function getCanonicalDomain(): Domain
    {
        if (!empty($c_domain)) {
            return $c_domain;
        }

        $can = $this;

        $r_can = request()->can;

        if (!empty($r_can)) {
            $can = Domain::where('id', $r_can)->withoutGlobalScope(DomainProjectScope::class)->limit(1)->first();
        }

        if (empty($can) || $can->type != DomainType::$primary) {
            $can = Domain::where('type', DomainType::$primary)->whereNull('location_id')->withoutGlobalScope(DomainProjectScope::class)->limit(1)->first();
        }

        $this->c_domain = $can;

        return $can;
    }

    public static function getForLocation(Location | null $location, bool $onlySameSite = false): Domain | null
    {
        $domain_for_location = null;

        if (empty($location)) {
            return null;
        }

        $current_domain = DomainService::getDomain();

        if (empty($current_domain)) {
            return Domain::where('location_id', $location->id)->first();
        }

        $domain_for_location = Domain::where('location_id', $location->id)->where('site_id', $current_domain->site_id)->first();

        if (! empty($domain_for_location)) {
            return $domain_for_location;
        }

        if (empty($domain_for_location) && !$onlySameSite) {
            $domain_for_location = Domain::where('location_id', $location->id)->first();

            if (! empty($domain_for_location)) {
                return $domain_for_location;
            }
        }

        if (! empty($location->district_id)) {
            $location = Location::where('city_id', $location->city_id)->whereNull('district_id')->first();

            if (! empty($location)) {
                $domain_for_location = Domain::where('location_id', $location->id)->where('site_id', $current_domain->site_id)->first();

                if (! empty($domain_for_location)) {
                    return $domain_for_location;
                }

                if (empty($domain_for_location) && !$onlySameSite) {
                    $domain_for_location = Domain::where('location_id', $location->id)->first();

                    if (! empty($domain_for_location)) {
                        return $domain_for_location;
                    }
                }
            }
        }

        return $domain_for_location;
    }

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id', 'id')->withoutGlobalScope(CurrentProjectScope::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class)->with(['country', 'city', 'district']);
    }

    public function sitemap()
    {
        return $this->hasOne(Sitemap::class, 'domain_id', 'id');
    }

    public function getMetaData(string | null $key = null)
    {
        if (empty($this->meta)) {
            return null;
        }

        if (empty($key)) {
            return $this->meta;
        }

        $value = $this->meta[$key] ?? null;

        if (empty($value)) {
            return null;
        }

        return $value;
    }

    public function vue()
    {
        $data = $this->toArray();

        if (auth()->check()) {
            $data['has_cloudflare_integration'] =  !empty($this->site->cloudflare_integration_id);
            $data['cloudflare_zone_identifier'] = $this->site->cloudflare_integration_id;
            $data['sitemap'] = $this->sitemap?->vue();
            $data['location'] = $this->location?->vue();
        }

        return $data;
    }
}

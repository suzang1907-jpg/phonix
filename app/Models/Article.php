<?php

namespace App\Models;

use App\Actions\Localization\LocalizationReplaceText;
use App\Scopes\ArticleActiveScope;
use App\Routing\Amp;
use App\Services\DomainService;
use App\Services\LocationService;
use App\Traits\Models\Downloadable;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dev\LaravelAssets\Models\Image;
use Dev\PHPActions\Action;
use Illuminate\Support\Facades\DB;

class Article extends Model
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
        'hidden_at' => 'datetime',
        'last_seen_at' => 'datetime',
        'meta' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ArticleActiveScope);

        static::deleting(function ($model) {
            $model->analytics()->delete();
        });
    }
   public function scopeOrderByRenewAt($query, $direction = 'asc', $castAs = null)
    {
        $sql = "JSON_EXTRACT(meta, '$.renew_at.date')";

        if ($castAs) {
            $sql = "CAST($sql AS $castAs)";
        }

        return $query->orderBy('customer_id', 'DESC')->orderBy(DB::raw($sql), $direction);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function getFormattedWhatsAppMessage()
    {
        $text = Action::build(LocalizationReplaceText::class)->data([
            'text' => $this->whatsapp_message ?? ''
        ])->run()->getData('text');

        if (str_contains($text, '[/app_name/]')) {
            $canonical = DomainService::getDomain()->getCanonicalDomain();

            $app_name = $canonical->site->project->getMetaData('app_name');

            if (empty($app_name)) {
                $text = str_replace('[/app_name/]', '', $text);
            } else {
                $text = str_replace('[/app_name/]', $app_name, $text);
            }
        }

        return $text;
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'articles_images', 'article_id', 'image_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class)->with(['country', 'city', 'district']);
    }

    public function amp(): string
    {
        $location = [];
        $country = LocationService::getCountry();
        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        if (!empty($country)) {
            $location['country'] = $country->country;
        }

        if (!empty($city)) {
            $location['city'] = $city->city;
        }

        if (!empty($district)) {
            $location['district'] = $district->district;
        }

        return Amp::route('amp.article.show', array_merge(['id' => $this->id], $location));
    }

    public function chat(): string
    {
        $location = [];
        $country = LocationService::getCountry();
        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        if (!empty($country)) {
            $location['country'] = $country->country;
        }

        if (!empty($city)) {
            $location['city'] = $city->city;
        }

        if (!empty($district)) {
            $location['district'] = $district->district;
        }

        return Amp::route('amp.article.chat', array_merge(['id' => $this->id], $location));
    }

    public function vue()
    {
        $data = $this->toArray();

        $data['images'] = $this->images->map(function ($image) {
            return $image->id;
        });

        $meta = $data['meta'] ?? [];

        if (auth('user')->check() || auth('employee')->check()) {
            $data['location'] = $this->location?->vue();
$data['customer'] = $this->customer?->vue();
            $data['routes'] = [
                'amp' => $this->amp()
            ];

        } else {
            unset($meta['prev_view_count']);
            unset($meta['trc20_wallet']);
            unset($meta['chat_enabled']);
            unset($meta['view_count']);
            unset($meta['highlight']);
           // unset($meta['renew_at']);
            unset($meta['online']);
            unset($meta['premium']);
            unset($meta['note']);
            unset($meta['price']);
            unset($data['adsterra_link']);
            unset($data['ad_link']);
            unset($data['location_id']);
            unset($data['project_id']);
            unset($data['last_seen_at']);
            unset($data['created_at']);
            unset($data['updated_at']);
            unset($data['hidden_at']);
            unset($data['customer_id']);
            unset($data['edit_password']);
        }

        $data['meta'] = $meta;

        return $data;
    }

    public function analytics()
    {
        return $this->hasMany(ArticleAnalytic::class)->orderBy('date', 'desc')->latest()->limit(7);
    }

    public function isOnline()
    {
        if (empty($this->meta)) {
            return false;
        }

        $online = $this->meta['online'] ?? false;

        return $online;
    }

    public function getFormattedPhoneNumberLink()
    {
        $phone_number = str_replace('\n', '', $this->phone_number);

        $phone_number = str_replace(' ', '', $phone_number);

        $phone_number = preg_replace('/\s+/', '', $phone_number);

        $url = "tel://" . $phone_number;

        return $url;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function getFormattedWhatsappLink()
    {
        $whatsapp_number = str_replace('\n', '', $this->whatsapp_number);

        $whatsapp_number = str_replace(' ', '', $whatsapp_number);

        $whatsapp_number = preg_replace('/\s+/', '', $whatsapp_number);

        $url = "https://wa.me/" . urlencode($whatsapp_number) . "?text=" . urlencode($this->getFormattedWhatsAppMessage());

        return $url;
    }
}

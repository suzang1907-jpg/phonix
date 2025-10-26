<?php

namespace App\Models;

use App\Routing\Web;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
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
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function stories()
    {
        return $this->hasMany(Story::class);
    }

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }

    public function localizedName()
    {
        $country = $this->country?->country;
        $city = $this->city?->city;
        $district = $this->district?->district;

        if (!empty($district)) {
            return __('location.' . $district);
        }

        if (!empty($city)) {
            return __('location.' . $city);
        }

        return __('location.' . $country);
    }

    public function webUrl()
    {
        $country = $this->country?->country;
        $city = $this->city?->city;
        $district = $this->district?->district;

        if (!empty($district)) {
            return Web::route('web.location.district.show', [
                'district' => $district,
                'city' => $city,
                'country' => $country
            ]);
        }

        if (!empty($city)) {
            return Web::route('web.location.city.show', [
                'city' => $city,
                'country' => $country
            ]);
        }

        return Web::route('web.location.country.show', [
            'country' => $country
        ]);
    }

    public function vue()
    {
        $data = $this->toArray();

        $data['country'] = $this->country?->vue();
        $data['city'] = $this->city?->vue();
        $data['district'] = $this->district?->vue();
        $data['localized_name'] = $this->localizedName();

        return $data;
    }
}

@props(['city' => null, 'district' => null])
@unless (empty($district))
    <li class="border border-border rounded-md p-2 bg-background">
        <a
            href="{{ App\Services\UrlService::getTargetPath(App\Services\LocationService::getUrlForDistrict($district, route('web.location.district.show', ['country' => $district->city->country->country, 'city' => $district->city->city, 'district' => $district->district]))) }}">
            {{ empty(App\Services\ProjectService::getProject()->location_text) ? __('location.' . $district->district) : str_replace('[/location/]', __('location.' . $district->district), App\Services\ProjectService::getProject()->location_text) }}
        </a>
</li>
@else
    <li class="border border-border rounded-md p-2 bg-background">
        <a
            href="{{ App\Services\UrlService::getTargetPath(App\Services\LocationService::getUrlForCity($city, route('web.location.city.show', ['country' => $city->country->country, 'city' => $city->city]))) }}">
            {{ empty(App\Services\ProjectService::getProject()->location_text) ? __('location.' . $city->city) : str_replace('[/location/]', __('location.' . $city->city), App\Services\ProjectService::getProject()->location_text) }}
        </a>
</li>
@endunless

@php
    $city = App\Services\LocationService::getCity();
    $district = App\Services\LocationService::getDistrict();
    $mapUrl = null;
    if (!empty($city)) {
        if (!empty($district)) {
            $mapUrl = App\Services\LocationConfigService::map($district->district);
        } else {
            $mapUrl = App\Services\LocationConfigService::map($city->city);
        }
    }
@endphp
@if (empty($mapUrl))
    <div></div>
@else
    <amp-iframe
        title="{{ empty($district?->district) ? __('location.' . $city->city) : __('location.' . $district->district) }}"
        width="300" height="150" sandbox="allow-scripts allow-same-origin" layout="responsive"
        src="{{ $mapUrl }}">
    </amp-iframe>
@endif

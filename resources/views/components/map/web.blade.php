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
    <div class="max-w-xl w-full h-48 mx-auto">
        <iframe
            title="{{ empty($district?->district) ? __('location.' . $city->city) : __('location.' . $district->district) }}"
            class="w-full h-full" src="{{ $mapUrl }}" height="200" allowfullscreen="false" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endif

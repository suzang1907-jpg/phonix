@props(['blog' => null])

@php
$location = App\Services\LocationService::getLocation();
$shouldShow = true;
if (empty($location)) {
$shouldShow = false;
}

if (! empty(App\Services\LocationService::getDistrict())) {
$shouldShow = false;
}
@endphp

@unless($shouldShow)
<div></div>
@else
@php
$city = App\Services\LocationService::getCity();

@endphp
<ul class="mt-12 gap-2 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
    @unless(empty($city))
    @php
    $districts = App\Services\LocationService::getDistricts() ?? [];
    @endphp
    @foreach ($districts as $district)
    <x-location.grid.item :city="$city" :district="$district" />
    @endforeach
    @else
    @php
    $cities = App\Services\LocationService::getCities() ?? [];
    @endphp
    @foreach ($cities as $city)
    <x-location.grid.item :city="$city" />
    @endforeach
    @endunless
</ul>
@endunless
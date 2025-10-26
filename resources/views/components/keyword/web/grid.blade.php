@props(['city' => null, 'district' => null, 'domain' => null, 'blog' => null])
<div class="mt-12 gap-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @php
    $keywords = App\Models\Keyword::get() ?? [];
    $city = $city ?? App\Services\LocationService::getCity();
    $district = $district ?? App\Services\LocationService::getDistrict();
    $alias = $domain->getName();
    if (! empty($blog)) {
    $alias = $blog->title;
    } else {
    if (!empty($district)) {
    $alias = __('location.' . $district->district);
    } else {
    if (!empty($city)) {
    $alias = __('location.' . $city->city);
    }
    }
    }
    @endphp
    @foreach ($keywords as $keyword)
    <x-keyword.web.grid.item :keyword="$keyword" :alias="$alias" />
    @endforeach
</div>
@props(['city' => null, 'district' => null, 'domain' => null, 'blog' => null])
<div class="keyword-list">
    @php
        $keywords = App\Models\Keyword::get() ?? [];
        $city = $city ?? App\Services\LocationService::getCity();
        $district = $district ?? App\Services\LocationService::getDistrict();
        $alias = $domain->getName();
        if (!empty($blog)) {
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
        <x-keyword.amp.grid.item :keyword="$keyword" :alias="$alias" />
    @endforeach
</div>

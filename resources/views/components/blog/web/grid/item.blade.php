@props(['blog' => null])
<article class="w-full h-full bg-background flex flex-col">
    <img loading="lazy" decoding="async" height="192px" class="w-full rounded-xl object-cover h-48" alt="{{ $blog->title }}" src="{{ route('file.blog.image.main', ['id' => $blog->id, 'size' => '400']) }}" srcset="{{ route('file.blog.image.main', ['id' => $blog->id, 'size' => '240']) }} 240w, {{ route('file.blog.image.main', ['id' => $blog->id, 'size' => '350']) }} 350w, {{ route('file.blog.image.main', ['id' => $blog->id, 'size' => '400']) }} 400w" sizes="(max-width: 1024px) 240px,(max-width: 768px) 350px, 400px" />
    <div class="flex flex-col p-2">
        <h2>
            <a aria-label="{{ strlen($blog->title) > 50 ? mb_substr($blog->title, 0, 50) . '...' : $blog->title }}" class="font-bold line-clamp-2" href="{{ App\Routing\Web::route('web.blog.show', ['id' => $blog->id]) }}">
                {{ strlen($blog->title) > 50 ? mb_substr($blog->title, 0, 50) . '...' : $blog->title }}
            </a>
        </h2>
        <p class="text-sm line-clamp-2">
            {{ $blog->short_description }}
        </p>
        <div class="flex flex-row gap-2 mt-2">
            <a aria-label="{{ __('base.read_more') }}" href="{{ App\Services\UrlService::getTargetPath(App\Routing\Web::route('web.blog.show', ['id' => $blog->id])) }}" class="px-2 py-1 bg-gray-100 text-gray-900 flex rounded-md w-min whitespace-nowrap text-xs select-none cursor-pointer text-center">
                {{ __('base.read_more') }}
            </a>
            @unless (empty($blog->location))
            @if (!empty($blog->location->district))
            <a aria-label="{{ __('base.' . $blog->location->district->district) }}" href="{{ App\Services\LocationService::getUrlForDistrict($blog->location->district, App\Routing\Web::route('web.location.district.show', ['district' => $blog->location->district->district, 'city' => $blog->location->city->city, 'country' => $blog->location->country->country])) }}" class="px-2 py-1 bg-gray-100 text-gray-900 flex rounded-md w-min whitespace-nowrap text-xs select-none cursor-pointer text-center">
                {{ empty(App\Services\ProjectService::getProject()->location_text) ? __('location.' . $blog->location->district->district) : str_replace('[/location/]', __('location.' . $blog->location->district->district), App\Services\ProjectService::getProject()->location_text) }}
            </a>
            @elseif (!empty($blog->location->city))
            <a aria-label="{{ __('location.' . $blog->location->city->city) }}" href="{{ App\Services\LocationService::getUrlForCity($blog->location->city, App\Routing\Web::route('web.location.city.show', ['city' => $blog->location->city->city, 'country' => $blog->location->country->country])) }}" class="px-2 py-1 bg-gray-100 text-gray-900 flex rounded-md w-min whitespace-nowrap text-xs select-none cursor-pointer text-center">
                {{ empty(App\Services\ProjectService::getProject()->location_text) ? __('location.' . $blog->location->city->city) : str_replace('[/location/]', __('location.' . $blog->location->city->city), App\Services\ProjectService::getProject()->location_text) }}
            </a>
            @endif
            @endunless
        </div>
    </div>
</article>
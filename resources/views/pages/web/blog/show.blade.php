<x-layout.web :page="$page">
    <x-navbar.web />
    <x-search />
    <div class="mx-auto max-w-screen-xl p-2">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('web.home.show') }}">{{ __('base.homepage') }}</a></li>
                <li><a href="">{{ $blog->title }}</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl p-2 mt-12">
        <article class="grid grid-cols-6">
            <div class="col-span-6 md:col-span-2 lg:col-span-2">
                <img decoding="async" alt="{{ $blog->title }}"
                    class="w-full object-cover rounded-xl aspect-square"
                    src="{{ route('file.blog.image.main', ['id' => $blog->id, 'size' => '350']) }}" />
            </div>
            <div class="col-span-6 md:col-span-4 lg:col-span-4 flex flex-col pt-12 md:pt-0 md:pl-12">
                @php
                $blogContent = $blog->getFormattedContent();
                @endphp
                @unless (empty($blogContent))
                <h2 class="text-4xl font-bold">{{ $blog->title }}</h2>
                <p class="mt-2">
                    {!! $blogContent !!}
                </p>
                @else
                <h2 class="text-4xl font-bold">{{ $blog->title }}</h2>
                <p class="mt-2">{{ $blog->blogContentDescription() }}</p>
                @endunless
                <p class="text-xs mt-2">{{ Carbon\Carbon::parse($blog->created_at)->format('d.m.Y') }}
                </p>
            </div>
        </article>
        <x-blog.web.grid :domain="$domain" :blogs="$blogs" />
        <x-map.web />
        <x-keyword.web.grid :domain="$domain" />
        <x-location.grid />
        <x-referal-domains :domain="$domain" />
    </div>
    <x-footer.web :domain="$domain" />
</x-layout.web>
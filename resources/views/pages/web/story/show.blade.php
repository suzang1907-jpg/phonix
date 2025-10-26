<x-layout.web :page="$page">
    <x-navbar.web />
    <x-search />
    <div class="mx-auto max-w-screen-xl p-2 mt-12">
        <article class="grid grid-cols-6">
            <div class="col-span-6 md:col-span-2 lg:col-span-2">
                <img loading="lazy" decoding="async" alt="{{ $story->title }}" class="w-full object-cover rounded-xl aspect-square" src="{{ route('file.story.image.main', ['id' => $story->id]) }}" />
            </div>
            <div class="col-span-6 md:col-span-4 lg:col-span-4 flex flex-col pt-12 md:pt-0 md:pl-12">
                <h2 class="text-4xl font-bold">{{ $story->title }}</h2>
                <p class="mt-2">{{ $story->description }}</p>
                <div class="mt-2">
                    <p class="text-xs"><strong>{{ Carbon\Carbon::parse($story->created_at)->format('d.m.Y') }}</strong></p>
                </div>
            </div>
        </article>
        <x-story.web.grid :domain="$domain" :stories="$stories" />
        <x-map.web/>
        <x-keyword.web.grid :domain="$domain" />
        <x-location.grid />
        <x-referal-domains :domain="$domain"/>
    </div>
    <x-footer.web :domain="$domain" />
</x-layout.web>
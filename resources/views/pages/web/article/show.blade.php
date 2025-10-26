<x-layout.web :page="$page">
    <div class="max-w-screen-sm mx-auto">
        <x-link.phone :article="$article"></x-link.phone>
        <div class="mt-2"></div>
        <x-link.whatsapp :article="$article" />
        <div class="mt-2"></div>
        <x-link.telegram :article="$article" />
        <div class="mt-2"></div>
        <x-link.adsterra :article="$article" />
        <div class="mt-2"></div>
        <x-article.web :article="$article" :domain="$domain" />
        <p class="mt-2 p-2">
            {{ $article->description }}
        </p>
        <div class="mt-2"></div>
        <x-article.images.web :article="$article" :domain="$domain" />
        <div class="mt-2"></div>
        <x-link.phone :article="$article"></x-link.phone>
        <div class="mt-2"></div>
        <x-link.whatsapp :article="$article" />
        <div class="mt-2"></div>
        <x-link.telegram :article="$article" />
        <div class="mt-2"></div>
        <x-link.adsterra :article="$article" />
        <div class="mt-2"></div>
        <x-article.web.grid :domain="$domain" :articles="$articles" />

    </div>
</x-layout.web>

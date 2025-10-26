@props(['title' => null, 'page' => null])
<header class="flex flex-row justify-between w-full items-center border-b p-2 border-b-black">
    <div class="flex flex-col">
        <div class="flex flex-row items-center">
            <div class="relative h-12 w-24">
                <amp-img layout="fill" class="w-24 h-12 contain" alt="Logo"
                    src="{{ route('file.project.reference.amp.logo', ['reference' => $page->domain()->getCanonicalDomain()]) }}" />
            </div>
            <h1 class="text-center text-base font-bold py-2 ml-2 pr-2">
                {{ empty($title) ? App\Services\Page::current()->heading() : $title }}
            </h1>
        </div>
    </div>
    <div>{{ $slot }}</div>
</header>

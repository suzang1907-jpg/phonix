@props(['title' => null, 'page' => null])
<header class="flex flex-row justify-between w-full items-center border-b p-2 border-b-base-300">
    <div class="flex flex-row items-center justify-center w-full">
        <h1 class="text-center text-base font-bold py-2">
            {{ empty($title) ? App\Services\Page::current()->heading() : $title }}
        </h1>
    </div>
    <div>{{ $slot }}</div>
</header>

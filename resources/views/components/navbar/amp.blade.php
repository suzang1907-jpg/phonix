@props(['page' => null])
<header>
    <h1>
        {{ trim(App\Services\Page::current()->heading()) }}
    </h1>
</header>

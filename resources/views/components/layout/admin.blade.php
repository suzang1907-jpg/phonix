@props(['page' => null])
<!DOCTYPE html>
<html lang="{{ $page->htmlLang() }}" class="no-scroll-bar">

<head>
    {!! $page->head() !!}
    <link href="{{ App\Routing\File::route('file.font.noto.sans') }}" rel="stylesheet">
    @vite(['resources/css/admin/app.css', 'resources/js/admin/app.js'], '/xbuild/admin')
</head>

<body class="no-scroll-bar bg-base-100" data-theme="apptheme">
    <div id="app" class="min-h-dvh">
        {{ $slot }}
        <div id="loading-overlay" class="fixed inset-0 bg-base-100 flex flex-col items-center justify-center z-50">
            <span class="relative flex h-3 w-3">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-secondary"></span>
            </span>
        </div>
    </div>
</body>

</html>

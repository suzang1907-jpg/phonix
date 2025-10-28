@props(['page' => null])
<!DOCTYPE html>
<html lang="{{ $page->htmlLang() }}" class="no-scroll-bar">

<head>
    {!! $page->head() !!}
    <link href="{{ App\Routing\File::route('file.font.noto.sans') }}" rel="stylesheet">
    @vite(['resources/css/customer/app.css', 'resources/js/customer/app.js'], 'build/customer')

</head>

<body class="no-scroll-bar bg-base-200" data-theme="apptheme">
    <div id="app" class="min-h-dvh">
        {{ $slot }}
        <components-admin-alert-list></components-admin-alert-list>
        <div id="loading-overlay" class="fixed inset-0 bg-base-200 flex flex-col items-center justify-center z-50">
            <span class="relative flex h-3 w-3">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
            </span>
        </div>
    </div>
</body>

</html>

@props(['action', 'method' => 'POST'])
<form action="{{ $action }}" method="{{ $method }}" enctype="multipart/form-data" {{ $attributes->merge(['class' => 'max-w-xl w-full grid grid-cols-1 gap-4'])}}>
    @csrf
    {{ $slot }}
</form>
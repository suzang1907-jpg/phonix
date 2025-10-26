@props(['alias' => null, 'keyword'])
@if(\App\Services\WorkspaceService::getWorkspace()?->isDynamicKeywordsEnabled())
<div class="border border-border p-2 rounded-md bg-background">
    @if(empty($alias))
    <a aria-label="{{ $keyword->keyword  }}" target="_self" href="{{ App\Routing\Web::route('web.keyword.show', ['id' => $keyword->id]) }}">
        <strong>{{ $keyword->keyword }}</strong>
    </a>
    @else
    <a aria-label="{{ $alias.' '.$keyword->keyword }}" target="_self" href="{{ App\Routing\Web::route('web.keyword.alias.show', ['id' => $keyword->id, 'alias' => $alias]) }}">
        <strong>{{ $alias.' '.$keyword->keyword }}</strong>
    </a>
    @endif
</div>
@else
<a aria-label="{{ $keyword->keyword  }}" target="_self" href="{{ App\Routing\Web::route('web.keyword.show', ['id' => $keyword->id]) }}">
    <strong>{{ $keyword->keyword }}</strong>
</a>
@endif
@props(['alias' => null, 'keyword'])
<div class="border border-border text-invert p-2 rounded-md bg-background">
    @if(empty($alias))
    <a class="link-keyword-listener" aria-label="{{ $keyword->keyword  }}" target="_self" href="{{ App\Routing\Amp::route('amp.keyword.show', ['id' => $keyword->id]) }}">
        <strong>{{ $keyword->keyword }}</strong>
    </a>
    @else
    <a class="link-keyword-listener" aria-label="{{ $alias.' '.$keyword->keyword }}" target="_self" href="{{ App\Routing\Amp::route('amp.keyword.alias.show', ['id' => $keyword->id, 'alias' => $alias]) }}">
        <strong>{{ $alias.' '.$keyword->keyword }}</strong>
    </a>
    @endif
</div>
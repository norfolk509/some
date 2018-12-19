<div class="top-5-card {{ ($loop->index > 1) ? 'br-top' : '' }}">
    <span class="nr">{!! str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) !!}</span>
    <a href="/" class="">
        <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['title'] }}" height="70" width="70">
        <div class="game-info">
            @foreach($game['genres'] as $genre)
                {{$genre}}
                @break($loop->iteration > 2)
            @endforeach
            <h3 class="">{{ $game['title'] }}</h3>
            <span class="platforms flx-a-c">
                <i class="icon-os-windows"></i>
                <i class="icon-os-mac"></i>
                <i class="icon-os-linux"></i>
            </span>
            <span class="price fnt-medium {{ is_null($game['price']) ? 'col-red txt-up' : '' }}">
                @if (is_null($game['price']))
                    {{trans('Free')}}
                @else
                    {!! $currencySymbol !!}{{number_format($game['price'],2)}}
                @endif
            </span>
        </div>
    </a>
</div>

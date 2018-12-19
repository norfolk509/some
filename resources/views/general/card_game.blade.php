<div class="card-game">
    <a href="/" class="card flx">
        <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['titleId'] }}">
        <span class="container flx-w">
            <h3 class="general-title full-w txt-one-line">{{ $game['title'] }}</h3>
            <span class="fnt-small-2 full-w col-blue txt-one-line">{{ implode($game['genres']) }}</span>
            <span class="price fnt-medium {{ is_null($game['price']) ? 'col-red txt-up' : '' }}">
                @if (is_null($game['price']))
                    {{trans('Free')}}
                @else
                    {!! $currencySymbol !!}{{number_format($game['price'],2)}}
                @endif
            </span>
            <span class="platforms flx-a-c">
                <i class="icon-os-windows"></i>
                <i class="icon-os-mac"></i>
                <i class="icon-os-linux"></i>
            </span>
        </span>
    </a>
</div>

<div class="card-game">
    <a href="/" class="card flx-column">
        <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['titleId'] }}">
        <span class="container flx-w">
            <span class="general-title full-w txt-one-line">{{ $game['title'] }}</span>
            @if($isDesktop)
                <span class="fnt-small-2 full-w col-blue txt-one-line">{{ implode(', ', $game['genres']) }}</span>
            @endif
            <span class="price fnt-medium {{ is_null($game['price']) ? 'col-red txt-up' : '' }}">
                @if (is_null($game['price']))
                    {{trans('Free')}}
                @else
                    {!! $currencySymbol !!}{{number_format($game['price'],2)}}
                @endif
            </span>
            <span class="platforms flx-a-c">
                <span class="mobile flx-a-c">
                    <i class="icon-os-ios"></i>
                    <i class="icon-os-android"></i>
                </span>
                <i class="icon-os-windows"></i>
                <i class="icon-os-mac"></i>
                <i class="icon-os-linux"></i>
            </span>
        </span>
        @if($isDesktop)
            <span class="js-card-favorite"></span>
        @endif
    </a>
</div>

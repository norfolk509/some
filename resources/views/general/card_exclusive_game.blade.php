<div class="card-exclusive-game">
    <a href="/" class="card flx">
        <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['titleId'] }}">
        <span class="container flx-w">
            <h3 class="general-title full-w txt-one-line">{{ $game['title'] }}</h3>
            <span class="fnt-small-2 full-w col-blue txt-one-line">{{ implode($game['genres'],', ') }}</span>
        </span>
    </a>
</div>

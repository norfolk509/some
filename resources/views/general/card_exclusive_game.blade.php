<div class="card-exclusive">
    <a href="/" class="card flx-column">
        <span class="img">
            {{-- <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['titleId'] }}"> --}}
            <img src="{{ asset('images/temp/img-card-exclusive-'.mt_rand(1,3).'.jpg') }}" alt="{{ $game['titleId'] }}">
            <span class="exclusive flx-j-c fnt-medium">@lang('Exclusive')</span>
            <span class="js-card-favorite"></span>
        </span>
        <span class="container flx-w">
            <span class="general-title full-w txt-one-line">{{ $game['title'] }}</span>
            <span class="fnt-small-2 full-w col-blue txt-one-line">{{ implode($game['genres'],', ') }}</span> {{-- TODO display only first 2 genres, regardless of how many are set --}}
        </span>
    </a>
</div>

<section class="cnt-home-games mobile flx-column">
    <h3 class="section-title">@lang('Top Hentai Games on Android')</h3>
    <div class="flx-w-sp-b">
        @foreach($freePornGames as $game)
            @include('general.card_game', ['game' => $game])

            @if($loop->index === 11)
                @break
            @endif
        @endforeach
    </div>
    <a href="" class="home-button button outlined white ripple">@lang('View all Android Games')</a>
</section>

<section class="cnt-home-games mobile flx-column">
    <h3 class="section-title">@lang('Best iOS Hentai Games')</h3>
    <div class="flx-w-sp-b limit-6">
        @foreach($freePornGames as $game)
            @include('general.card_game', ['game' => $game])

            @if($loop->index === 7)
                @break
            @endif
        @endforeach
    </div>
    <a href="" class="home-button button outlined white ripple">@lang('View all iOS Games')</a>
</section>

<section class="cnt-home-games-exclusive js-game-card-exclusive-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h3 class="section-title">@lang('Adult Games You’ll Only Find on Nutaku')</h3>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($newestPornGames as $game)
            @include('general.card_exclusive_game', ['game' => $game])
        @endforeach
    </div>
</section>

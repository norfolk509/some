{{-- Top Games in other Language --}}
@if (app()->isLocale('en'))
    <section class="cnt-home-games-first js-game-card-language-slider {{ (isset($skin['is_skin_set']) && $skin['is_skin_set']) ? '' : 'no-skin' }}">
        <div class="loader"></div>
        <div class="flx-w">
            <span class="section-title">@lang('Top Free Porn & Hentai Games In French')</span>
            <div class="pagination flx mar-a-l"></div>
        </div>
        <div class="slider">
            @foreach($topLanguageGames as $game)
                @include('general.card_game', ['game' => $game])
            @endforeach
        </div>
    </section>
@endif

{{-- Top Free Games --}}
<section class="{{ (app()->isLocale('en')) ? 'cnt-home-games' : 'cnt-home-games-first' }} js-game-card-free-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h1 class="section-title">@lang('Free Porn & Hentai Games')</h1>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($freePornGames as $game)
            @include('general.card_game', ['game' => $game])
        @endforeach
    </div>
</section>

{{-- Premium Games --}}
<section class="cnt-home-games js-game-card-premium-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h2 class="section-title">@lang('Premium Porn & Hentai Games')</h2>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($premiumPornGames as $game)
            @include('general.card_game', ['game' => $game])
        @endforeach
    </div>
</section>

{{-- Exclusive Games --}}
<section class="cnt-home-games-exclusive js-game-card-exclusive-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h3 class="section-title">@lang('Nutaku Exclusive Games')</h3>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($newestPornGames as $game)
            @include('general.card_exclusive_game', ['game' => $game])
        @endforeach
    </div>
</section>

{{-- Newest Free Games --}}
<section class="cnt-home-games js-game-card-latest-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h3 class="section-title">@lang('Latest Free Games')</h3>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($newestPornGames as $game)
            @include('general.card_game', ['game' => $game])
        @endforeach
    </div>
</section>

{{-- Current Events --}}
<section class="cnt-home-games js-event-card-events-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h3 class="section-title">@lang('Current Game Events')</h3>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($gameEvents as $event)
            @include('general.card_event', ['event' => $event])
        @endforeach
    </div>
</section>

{{-- Newest Premium Games --}}
<section class="cnt-home-games js-game-card-newest-slider">
    <div class="loader"></div>
    <div class="flx-w">
        <h3 class="section-title">@lang('Newest Premium Games')</h3>
        <div class="pagination flx mar-a-l"></div>
    </div>
    <div class="slider">
        @foreach($premiumPornGames as $game)
            @include('general.card_game', ['game' => $game])
        @endforeach
    </div>
</section>

@extends('layouts.app')

@section('content')
    <div class="flx-column">
        <a href="{{ $skin['url'] }}" class="games-list-home" style="margin: -2em 0 -3em -1em; width: calc(100% + 1em)">
            <img src="{{ asset($skin['image']) }}" alt="{{ $skin['alt'] }}">
        </a>

        <h1 class="fnt-large-1">@lang('Promotions and Anouncements')</h1>
        <section class="games-list-home">
            @foreach($bannerGames as $game)
                @include('general.banner_game', ['game' => $game])
            @endforeach
        </section>

        <h1 class="fnt-large-1">@lang('Free Porn Games')</h1> <a href="/">@lang('See all Games')</a>
        <section class="games-list-home">
            @foreach($freePornGames as $game)
                @include('general.card_game', ['game' => $game])
            @endforeach
        </section>

        <h1 class="fnt-large-1">@lang('Premium Porn Games')</h1>
        <section class="games-list-home">
            @foreach($premiumPornGames as $game)
                @include('general.card_game', ['game' => $game])
            @endforeach
        </section>

        <h1 class="fnt-large-1">@lang('Adult Games You"ll Only Find on Nutaku')</h1>
        <section class="games-list-home">
            @foreach($newestPornGames as $game)
                @include('general.card_exclusive_game', ['game' => $game])
            @endforeach
        </section>

        <h1 class="fnt-large-1">@lang('Newest Porn Games')</h1>
        <section class="games-list-home">
            @foreach($newestPornGames as $game)
                @include('general.card_game', ['game' => $game])
            @endforeach
        </section>

        <h1 class="fnt-large-1">@lang('Game Events')</h1>
        <section class="games-list-home">
            @foreach($gameEvents as $event)
                @include('general.card_event', ['event' => $event])
            @endforeach
        </section>

    </div>
    <div class="flx">
        <section class="top-5-zone">
            @include('general.top_5_zone',['title'=>trans('Upcoming Games'), 'gamesList'=>$premiumPornGames])
        </section>
        <section class="top-5-zone">
            @include('general.top_5_zone',['title'=>trans('Top 5 Android Games'), 'gamesList'=>$premiumPornGames])
        </section>
        <section class="top-5-zone">
            @include('general.top_5_zone',['title'=>trans('Top 5 iOS Games'), 'gamesList'=>$premiumPornGames])
        </section>
    </div>

    <h1 class="fnt-large-1">@lang('Hottest Genres')</h1>
    <div class="flx-w">
        @foreach($hottestGenres as $genre)
            <a href="{{ route('home') }}" class="button outlined blue ripple">{{ $genre['name'] }} ({{$genre['gamesCount']}})</a>
        @endforeach
            <a href="{{ route('home') }}" style="font-weight: bold; font-size: 30px; color: #888eb6;" class="flx-a-c">+</a>
    </div>
@endsection

@push('inline_scripts')
    <scripts>

    </scripts>
@endpush

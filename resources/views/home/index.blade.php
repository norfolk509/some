@extends('layouts.app')

@section('content')
    <div class="flx-column">
        {{-- Skin --}}
        @if(isset($skin['is_skin_set']) && $skin['is_skin_set'])
            <div class="flx-column cnt-home-skin">
                <a href="{{ $skin['url'] }}" class="home-skin">
                    <img src="{{ asset($skin['image']) }}" alt="{{ $skin['alt'] }}">
                </a>
            </div>
        @endif

        {{-- Banner carousel --}}
        <section class="cnt-home-carousel js-banner-slider {{ (isset($skin['is_skin_set']) && $skin['is_skin_set']) ? '' : 'no-skin' }}">
            <div class="loader"></div>
            <div class="flx-w">
                <span class="section-title">@lang('Promotions and Anouncements')</span>
                <div class="pagination flx mar-a-l"></div>
            </div>
            <div class="slider">
                @foreach($bannerGames as $game)
                    @include('general.banner_game', ['game' => $game])
                @endforeach
            </div>
        </section>

        @if($isDesktop)
            @include('home.partials.desktop')
        @else
            @include('home.partials.mobile')
        @endif
    </div>

    <div class="top-5 flx scrollbar">
        @include('general.top_5_zone',[
            'title'=>$isDesktop ? trans('Upcoming') : trans('Upcoming Mobile Games'),
            'gamesList'=>$premiumPornGames
            ])
        @include('general.top_5_zone',[
            'title'=>$isDesktop ? trans('Top 5 Android Games') : trans('Top 5 Free PC Games'),
            'gamesList'=>$premiumPornGames
            ])
        @include('general.top_5_zone',[
            'title'=>$isDesktop ? trans('Top 5 iOS Games') : trans('Top 5 Premium PC Games'),
            'gamesList'=>$premiumPornGames
            ])
    </div>

    <section class="cnt-home-tags flx-column">
        <h3 class="section-title">@lang('Hottest Genres')</h3>
        <div class="tags flx-w flx-a-c">
            @foreach($hottestGenres as $genre)
                <a href="{{ route('home') }}" class="button outlined blue ripple">{{ $genre['name'] }} <span class="tags-count fnt-medium">({{$genre['gamesCount']}})</span></a>
            @endforeach
            <a href="{{ route('home') }}" class="more-tags flx-c col-blue ripple">+</a>
        </div>
    </section>

@endsection


@push('stylesheets_stack')
@endpush

@push('inline_scripts')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush

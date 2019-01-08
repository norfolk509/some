<section class="top-5-zone flx-column">
    <span class="section-title">{{ $title }}</span>

    @foreach($gamesList as $game)
        @if ($loop->first)
            <a href="/" class="card-top-5">
                {{-- <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['title'] }}" class="img"> --}}
                <img src="{{ asset('images/temp/top-5-img-large-'.mt_rand(1,3).'.jpg') }}" alt="{{ $game['title'] }}" class="img-large">
                <span class="card flx-a-c">
                    <span class="number col-blue">0{{ $loop->index+1 }}</span>
                    <span class="desc flx-column">
                        <span class="general-title txt-one-line">{{ $game['title'] }} very long title</span>
                        <span class="genres fnt-small-2 col-blue">{{ $game['genres'][0] }}</span> {{-- TODO display only first 1 genre, regardless of how many are set --}}
                    </span>
                    <span class="flx icons">
                        @svg('icon-os-windows', 'icon-os-windows fill-white')
                        @svg('icon-os-mac', 'icon-os-mac fill-white')
                        @svg('icon-os-linux', 'icon-os-linux fill-white')
                    </span>
                    <span class="button label filled primary fnt-medium txt-up">@lang('pre-register')</span>
                    {{-- <span class="button fnt-medium txt-up">@lang('upcoming')</span> --}}
                </span>
            </a>
        @else
            <a href="/" class="card-top-5">
                <span class="card flx-a-c">
                    <span class="number col-blue">0{{ $loop->index+1 }}</span>
                    <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['title'] }}" class="img">
                    <span class="desc flx-column">
                        <span class="general-title txt-one-line">{{ $game['title'] }} very long title</span>
                        <span class="genres fnt-small-2 col-blue">{{ $game['genres'][0] }}</span> {{-- TODO display only first 1 genre, regardless of how many are set --}}
                        <span class="flx">
                            <i class="icon-os-windows"></i>
                            <i class="icon-os-mac"></i>
                            <i class="icon-os-linux"></i>
                        </span>
                    </span>
                    <span class="button label filled primary fnt-medium txt-up">@lang('pre-register')</span>
                    {{-- <span class="button fnt-medium txt-up">@lang('upcoming')</span> --}}
                </span>
            </a>
        @endif
        @if($loop->index === 4)
            @break
        @endif
    @endforeach

    <a href="/" class="link-more col-blue ripple">@lang('See All Games')</a>
</section>

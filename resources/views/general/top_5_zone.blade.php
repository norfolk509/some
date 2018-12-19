<h1 class="fnt-large-1">{{ $title }}</h1>

@foreach($gamesList as $game)
    @if ($loop->first)
        <div class="top-5-big-card" style="background-image: url('{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}') ;">
            <span class="nr">0{{ $loop->index+1 }}</span>
            <a href="/" class="">
                <h3 class="">{{ $game['title'] }}</h3>
                <span class="platforms flx-a-c">
                <i class="icon-os-windows"></i>
                <i class="icon-os-mac"></i>
                <i class="icon-os-linux"></i>
            </span>
            </a>
        </div>
    @else
        <div class="top-5-card {{ ($loop->index > 1) ? 'br-top' : '' }}">
            <span class="nr">0{{ $loop->index+1 }}</span>
            <a href="/" class="">
                <img src="{{ $game['gameImgVerticalTopRankingWidgetUrl'] }}" alt="{{ $game['title'] }}" height="70" width="70">
                <div class="game-info">
                    <h3 class="">{{ $game['title'] }}</h3>
                    <span class="platforms flx-a-c">
                <i class="icon-os-windows"></i>
                <i class="icon-os-mac"></i>
                <i class="icon-os-linux"></i>
            </span>
                </div>
            </a>
        </div>
    @endif
    @if($loop->index === 4)
        @break
    @endif
@endforeach

@extends('layouts.app')

@section('content')

    {{--data to be restructured--}}
    <img src="{{$game['platformsSupported'][0]['backgroundUrl']}}" alt="{{$game['title']}}">

    {{--to be restructured--}}
    @if (!empty($game['platformsSupported'][0]))
        <div class="flx-w">
            <a href="#" class="button filled primary">Play free now <span>Browser Game</span></a>
        </div>
    @endif

    @if (!empty($game['platformsSupported'][1]))
        <div class="flx-w">
            <a href="#" class="button filled primary">Android app <span>Download</span></a>
        </div>
    @endif

    {{--right column 2/3--}}
    <h1 class="fnt-large-1">{{$game['title']}}</h1>

    {{--right column 1/3--}}

    {{--Publisher and developer to be restructured--}}
    @if(!empty($game['platformsSupported'][0]['publisher']))
        <span>Publisher:<span> {{$game['platformsSupported'][0]['publisher']}}
    @endif
    @if(!empty($game['platformsSupported'][0]['developer']))
        | <span>Developer:<span> {{$game['platformsSupported'][0]['developer']}}
    @endif

    {{--Game notifications--}}
    @if(!empty($user))
        {!! Form::open(['url' => 'user/set-game-notifications/' . $user['id'] . '/' .  $game['id'], 'method' => 'post', 'id' => 'gameNotifications']) !!}
            {{ Form::checkbox('gameNotifications', 'checked', $user['gameNotifications']) }}
            {{ Form::label('gameNotifications', trans('Receive game notification email')) }}
        {!! Form::close() !!}
    @else
       <input type="checkbox" id="js-login-required" name="js-login-required" checked>
       <label for="js-login-required">@lang('Receive game notification email')</label>
    @endif

    {{--summary--}}
    @if(!empty($game['platformsSupported'][0]['summary']))
        <h2 class="fnt-large-1">@lang('Summary of Game')</h2>
        <p>
            {{$game['platformsSupported'][0]['summary']}}
        </p>
    @endif

    {{--Key Features--}}
    @if(!empty($game['platformsSupported'][0]['keyFeatures']))
        <h2 class="fnt-large-1">@lang('Key Features')</h2>
        <p>
            {!! str_limit($game['platformsSupported'][0]['keyFeatures'], $limit = 150, $end = '<span id="js-read-more" class="col-red">+' . trans('Read more') . '</span>')!!}
        </p>
    @endif

    {{--News and updates--}}
    @if(!empty($game['newsUpdates']))
        <h2 class="fnt-large-1">@lang('News and updated')</h2>
        @foreach($game['newsUpdates'] as $news )
            <h3 class="col-blue">
                <a href="{{$news['newsLink']}}">{{$news['title']}}</a>
            </h3>
            <p>{{$news['createdAt']->format('m/d/Y h:m A')}}</p>
            <p>{!! str_limit($news['description'], $limit = 100, $end = '<a href="' . $news['newsLink'] . '"> ...</a>')!!}</p>
        @endforeach
        <a class="col-red">+ @lang('More news')</a>
    @endif

    {{--/right column 1/3 ends--}}

    {{--right column 1/3 --}}

    {{--add to favorites--}}
    @if(!empty($user))
        {{ Form::open(['url' => 'user/set-favorite-game/' . $user['id'] . '/' .  $game['id'], 'method' => 'post', 'id' => 'favoriteGame']) }}
            {{ Form::checkbox('favoriteGame', 'checked', $user['isFavorite']) }}
            {{ Form::label('favoriteGame', trans('Add to favorites')) }}
        {!! Form::close() !!}
    @else
        <input type="checkbox" id="js-login-required" name="js-login-required" checked>
        <label for="js-login-required">@lang('Add to favorites')</label>
    @endif

    {{--also available--}}
    @if(count($game['platformsSupported']) > 1)
        <h2 class="fnt-large-1">@lang('Also available on')</h2>
        {{--these values are hardcoded untill new game data structure--}}
        <div><span class="desktop"></span>@lang('Install on Desktop')</div>
        <div><span class="android"></span>@lang('Install on Android')</div>
        <div><span class="ios"></span>@lang('Install on iOs')</div>
    @endif

    {{--genres--}}
    @if(!empty($game['genres']))
        <h2 class="fnt-large-1">@lang('Genre')</h2>
        @foreach($game['genres'] as $genre)
            <div class="flx-w">
                <p class="button outlined blue ripple">{{ $genre }}</p>
            </div>
        @endforeach
    @endif

    {{--genres--}}
    @if(!empty($game['tags']))
        <h2 class="fnt-large-1">@lang('Tags')</h2>
        @foreach($game['tags'] as $tag)
            <div class="flx-w">
                <p class="button outlined blue ripple">{{ $tag }}</p>
            </div>
            @endforeach
    @endif

    {{--game information--}}
    {{--data will be restructured; show only if downloadable--}}
    <h2 class="fnt-large-1">@lang('Game information')</h2>
    @if ($game['platformsSupported'])
        <p>
            <span>@lang('Plarforms:') </span>
            @foreach ($game['platformsSupported'] as $platform)
                {{$platform['platform']}}
            @endforeach
        </p>
    @endif
    @if($game['platformsSupported'][0]['languages'])
        <p>
            <span>@lang('Languages:') </span>
            @foreach ($game['platformsSupported'][0]['languages'] as $lang)
                {{$lang}}
            @endforeach
        </p>
    @endif
    {{--will be restructured--}}
    @if($game['platformsSupported'][0]['publisher'])
        <p>
            <span>@lang('Publisher:') </span> {{$game['platformsSupported'][0]['publisher']}}
        </p>
    @endif
    @if($game['platformsSupported'][0]['releaseDate'])
        <p>
            <span>@lang('Release Date:') </span> {{$game['platformsSupported'][0]['releaseDate']->format('M d, Y')}}
        </p>
    @endif
    @if($game['appInfo'])
        <p>
            <span>@lang('Size:') </span> {{ $game['appInfo']['apkSize'] }}
        </p>
    @endif

    {{--social network--}}
    {{--these values are hardcoded untill new game data structure--}}
    <div><span class="social-icon discord"></span>@lang('Discord &mdash; Join the discussion')</div>
    <div><span class="social-icon twitter"></span>@lang('Twitter &mdash; Tweet at us')</div>
    <div><span class="social-icon facebook"></span>@lang('Facebook &mdash; Follow us')</div>

    {{--/right column 1/3 ends--}}
    {{--/right column 2/3 ends--}}

    {{--left column 1/3 --}}
    {{--gallery--}}
    {{--data will be restructured--}}
    @if(!empty($game['videos']) || !empty($game['platformsSupported'][0]['screenshots']))
        @foreach($game['videos'] as $video)
            <a href="{{$video['gameVideoUrl']}}">
                <img src="{{$video['gameVideoImgUrl']}}" />
            </a>
        @endforeach
        @foreach($game['platformsSupported'][0]['screenshots'] as $screenshot)
                @if(!($loop->index % 2))
                    @php ($thumb = $screenshot )
                @else
                    <a href="{{$screenshot}}">
                        <img src="{{$thumb}}" alt = "{{$game['title']}}" />
                    </a>
                @endif
        @endforeach
    @endif

    {{--similar games--}}
    @if (!empty($similarGames))
        <h2 class="fnt-large-1">@lang('Similar Games')
            <a href="#">@lang('See all')</a>
        </h2>
        @foreach($similarGames as $key => $value)
            @include('general.card_game_vertical', ['game' => $value])
        @endforeach
    @endif

    <p class="button outlined blue ripple" id="js-modal-share">@lang('Share')</p>
    <p class="button outlined blue ripple" class="js-modal-embed">@lang('Embed')</p>
    <p class="button outlined blue ripple" class="js-modal-requirements">@lang('System requirements')</p>

    {{--/left column 1/3 ends--}}

    {{--modals content--}}
    {{--share--}}
    {{--TODO: copied the existing ones for now--}}
    <div id="share">
        <div class="social-icons">
            <a class="share" href="https://twitter.com/intent/tweet?text={{$game['title']}}&amp;url={{Route::current()->getName()}}" rel="nofollow" target="_blank">
                   <img src="/images/icon-social-twitter.svg" alt="Twitter">
            </a>
            <a class="share" href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;https://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());' rel="nofollow">
                <img src="/images/icon-social-pinterest.svg" alt="Pinterest">
            </a>
            <a class="share" href="https://www.facebook.com/sharer/sharer.php?u={{Route::current()->getName()}}" rel="nofollow" target="_blank">
                <img src="/images/icon-social-facebook.svg" alt="Facebook">
            </a>
            <a class="share" href="https://plus.google.com/share?url={{Route::current()->getName()}}&amp;t={{$game['title']}}" rel="nofollow" target="_blank">
                <img src="/images/icon-social-google.svg" alt="Google">
            </a>
            <a class="share popup" href="http://vk.com/share.php?url={{Route::current()->getName()}}" rel="nofollow" target="_blank">
                <img src="/images/icon-social-vk.svg" alt="Vkontakte">
            </a>
            <a class="share" href="https://www.reddit.com/submit?url={{Route::current()->getName()}}&amp;title={{$game['title']}}" rel="nofollow" target="_blank">
                <img src="/images/icon-social-reddit.svg" alt="Reddit"></a>

            <a class="share popup" href="http://www.tumblr.com/share?u={{Route::current()->getName()}}&amp;t={{$game['title']}}" rel="nofollow" target="_blank">
                <img src="/images/icon-social-tumblr.svg" alt="Tumblr">
            </a>
        </div>
    </div>
    <div id="embed">
        <div>
            <h2>Play{{$game['title']}}</h2>
            <img src="{{$game['widgets'][0]['gameWidgetThumbnailUrl']}}" alt="{!! trans($game['title'])!!}">
            {{$game['widgets'][0]['gameWidgetDescription']}}
            {{--TODO: add conditions to display text for differen game types--}}
            <button>@lang('Play Free Now')</button>
        </div>
        {!! Form::open() !!}
            {!!  Form::text('js-affiliate-code', trans('Enter your affiliate code here')) !!}
        {!! Form::close() !!}
        <p>If you don’t have an affiliate code and would like to register to our program, please <a href="http://www.nutakuaffiliates.com/">Click here</a></p>
        <p>Copy and paste the code below into your website to make the above widget appear</p>

        <div>
            {!! Form::open() !!}
                {!!  Form::textarea('js-embed-code', '<iframe src="' . Request::getSchemeAndHttpHost() . '/widget/games/' . $game['titleId'] . '/" frameborder="0" width="650"  height="170"></iframe>', ['readonly']) !!}
            {!! Form::close() !!}
        </div>

        <p>Close</p>

    </div>
    {{--system requirements--}}
    {{--TODO: data will be restructured; show only if downloadable game--}}
    @if(!empty($game['platformsSupported'][0]['systemRequirements']))
        <div id="requirements">
            <h2 class="fnt-large-1">@lang('Game information')</h2>
            <p>{{$game['platformsSupported'][0]['systemRequirements']}}</p>
        </div>
    @endif


@endsection



@push('inline_scripts')
<scripts>
<script>
$(function() {
    $("input[name='gameNotifications']").change(function() {
        sendPost($("#gameNotifications"));
    });

    $("input[name='favoriteGame']").change(function() {
        sendPost($("#favoriteGame"));
    });

    $("input[name='js-login-required']").change(function() {
        loginPopup();
    });

    $("#js-modal-share").click(function() {
        modalOpen($('#share'));
    });

    $("#js-modal-embed").click(function() {
        modalOpen($('#embed'));
    });

    $("#js-modal-requirements").click(function() {
        modalOpen($('#requirements'));
    });

//    TODO
//    copyTextToClip($("input[name='embed-code']"));

    $("input[name='js-affiliate-code']").change(function() {
        addAffiliateCode(this);
    });

    function addAffiliateCode(el){
        var form = $("textarea[name='js-embed-code']");
        var code = '<iframe src="'
                    + '{{ Request::getSchemeAndHttpHost() }}'
                    + '/widget/games/'
                    + '{{$game['titleId']}}'
                    + '/?ats='
                    + el.value
                    + '" frameborder="0" width="650"  height="170"></iframe>';
        form.val(code);
    }


//    to Daniel: shall we put next two functions in resources/js so everyone use them?
    function sendPost(form) {
        $.ajax({
            type: "POST",
            url:  form.attr('action'),
            data: form.serialize(),
            cache: false,
            success: function(data){
                alert ('this is what will be send to endpoint: ' + JSON.stringify(data));
            },
            error: function(jqXHR, errorText) {
                alert( "Request failed: " + errorText );
            }
        });
    };

    function loginPopup() {
//       todo:  login popup
        alert ('I am a login popup');
    }

//    todo: open modal with corresponding content
    function modalOpen(content) {
        console.log(content);
    }

});
</script>
</scripts>
@endpush



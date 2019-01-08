@extends('layouts.app')

@section('content')

    <div>
        <h1>@lang('static.about')</h1>
    </div>
    <section>
        <div>
            <div>
                <h2>@lang('static.about_do_1')<br>
                    @lang('static.about_do_2')</h2>

                <p>@lang('static.who_we_are.text_1')</p>

                <p>@lang('static.who_we_are.text_2')</p>

                <p>@lang('static.who_we_are.text_3')</p>

                <p>@lang('static.who_we_are.text_4')</p>

                <a href="/publishers/" class="mainbtn">@lang('static.publishers_button')</a>
            </div>
        </div>
    </section>
    <section>
        <div><p>@lang('static.banner_text')</p></div>
    </section>
    <div>
        <h3>@lang('static.nutaku_games')</h3>

        <div class="list">
            <ul>
                <li>@lang('static.pc')</li>
                <li>@lang('static.android')</li>
                <li>@lang('static.mobile')</li>
            </ul>
            <ul>
                <li>@lang('static.premium')</li>
                <li>@lang('static.free')</li>
                <li>@lang('static.virtual')</li>
            </ul>
        </div>

        <h3>@lang('static.nutaku_popular_games')</h3>

        <div>
            <ul>
                <li>@lang('static.visual_novel')</li>
                <li>@lang('static.rpg')</li>
                <li>@lang('static.dating_sims')</li>
            </ul>
            <ul>
                <li>@lang('static.mmo')</li>
                <li>@lang('static.strategy')</li>
                <li>@lang('static.clickers')</li>
            </ul>
        </div>


        <div class="socials">
            <a href="https://www.facebook.com/nutakugames" target="_blank" class="facebook"></a>
            <a href="https://twitter.com/nutakugames" target="_blank" class="twitter"></a>
            <a href="https://www.instagram.com/nutakugames/" target="_blank" class="instagram"></a>
            <a href="https://www.youtube.com/user/nutakugames" target="_blank" class="youtube"></a>
            <a href="https://www.snapchat.com/add/nutakugames" target="_blank" class="snapchat"></a>
            <a href="https://www.twitch.tv/nutakugames" target="_blank" class="twitch"></a>
        </div>
    </div>
@endsection

{{-- @if($user == 'loggedin') --}}
    <div class="user-gold-balance flx-a-c mar-a-l">
        @include("layouts.partials.user_gold_balance", ["buttonClass" => "white"])
    </div>
    <div class="user logged-in flx-a-c js-dropdown-action">
        <img src="{{ asset('/images/temp/avatar-1.jpg') }}" class="avatar" alt="avatar">
        <div class="username flx-column">
            <span class="general-title full-w txt-one-line">NutakuCyrax</span>
            <span class="flx-a-c fnt-small-3 col-dark-red">Settings <i class="arrow-lines down dark-red"></i></span>
        </div>

        <div class="dropdown js-dropdown">
            @include("layouts.partials.user_settings")
        </div>
    </div>
    {{--<div class="flx-a-c js-notification">
        @svg('icon-notification', 'notification-icon')
    </div>--}}
{{-- @else
    <div class="user flx-a-c mar-a-l">
        <span class="button filled white ripple js-signup"><span class="hide-mobile">@lang('Free')</span> @lang('Sign Up')</span>
        <span class="button outlined white ripple js-login">@lang('Login')</span>
    </div>
@endif --}}

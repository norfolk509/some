<header class="header-height flx-a-c">
    <span class="device-menu-icon flx js-menu-icon"></span>

    <div class="left-side flx-a-c">
        <a href="/" class="flx-a-c header-logo">
            @svg('nutaku-logo-icon', 'header-logo-icon')
            @svg('nutaku-logo-text', 'header-logo-text')
        </a>
    </div>

    <nav class="header-nav flx-a-c js-header-nav">
        <a href="#" class="ripple navbar-priority-1">@lang('Games')</a>
        <a href="/" class="ripple navbar-priority-2">@lang('LGBTQ+')</a>
        <a href="/" class="ripple navbar-priority-1">@lang('Community')</a>
        <a href="/blog/" class="ripple navbar-priority-2">@lang('News & Blog')</a>
        <a href="/support/" class="ripple navbar-priority-2">@lang('Support')</a>
    </nav>

    <div class="flx-a-c navbar js-dropdown-action js-navbar">
        <i class="icon-discover"></i>

        <div class="dropdown js-dropdown">
            <div class="menu-list fnt-small-3"></div>
        </div>
    </div>

    <div class="header-language flx-a-c js-lang js-dropdown-action">
        @lang('EN')
        <i class="arrow-triangle down"></i>

        <div class="dropdown js-dropdown">
            <ul class="menu-list fnt-small-3">
                @include("layouts.partials.language_options")
            </ul>
        </div>
    </div>

    @include("layouts.partials.user_auth_options")
</header>

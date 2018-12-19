<footer>
    <div class="flx">
        @svg('nutaku-logo-icon', 'footer-logo-icon')

        <div class="footer-links flx">
            <ul class="language-footer-top menu-list fnt-medium js-footer-menu">
                <li class="title">
                    @lang('Language')
                    <span class="footer-language fnt-small-3">English</span>
                    <i class="arrow-triangle down"></i>
                </li>
                @include("layouts.partials.language_options")
            </ul>

            <ul class="menu-list fnt-medium js-footer-menu">
                <li class="title col-primary">@lang('Nutaku') <i class="arrow-triangle down"></i></li>
                <li><a href="/about/">@lang('About Us')</a></li>
                <li><a href="/games/">@lang('Browser Games')</a></li>
                <li><a href="/games/download/">@lang('Downloadable Games')</a></li>
                <li><a href="/games/mobile/">@lang('Mobile Games')</a></li>
                <li><a href="/events/">@lang('Game Events')</a></li>
            </ul>

            <ul class="menu-list fnt-medium js-footer-menu">
                <li class="title col-primary">@lang('Work With Us') <i class="arrow-triangle down"></i></li>
                <li><a href="/publishers/">@lang('Game Publisher and Developers')</a></li>
                <li><a href="http://www.nutakuaffiliates.com/">@lang('Affiliate Program')</a></li>
                <li><a href="/promo/press/">@lang('Press')</a></li>
            </ul>

            <ul class="menu-list fnt-medium js-footer-menu">
                <li class="title col-primary">@lang('Support') <i class="arrow-triangle down"></i></li>
                <li><a href="/support/">@lang('FAQ')</a></li>
                <li><a href="/support/payment-inquiries/">@lang('Payment Support')</a></li>
                <li><a href="/support/general-inquiries/">@lang('Website Support')</a></li>
                <li><a href="/support/game-inquiries/">@lang('Game Support')</a></li>
            </ul>

            <ul class="menu-list fnt-medium js-footer-menu">
                <li class="title col-primary">@lang('Discover') <i class="arrow-triangle down"></i></li>
                <li><a href="/blog/">@lang('Blog')</a></li>
                <li><a href="">@lang('Merch Store')</a></li>
                <li><a href="/">@lang('Community')</a></li>
                <li><a href="/directory/pc-games/">@lang('Game Directory')</a></li>
            </ul>
        </div>
    </div>

    <div class="flx-a-c brd-btm">
        <div class="language-footer flx-a-c">
            <span class="title col-blue fnt-small-3">@lang('Language')</span>

            <div class="lang-selector flx-a-c js-dropdown-action">
                <span class="flx-a-c fnt-small-3">
                    @lang('English')
                    <i class="arrow-triangle down fnt-small"></i>
                </span>

                <div class="dropdown js-dropdown">
                    <ul class="menu-list fnt-small-3">
                        @include("layouts.partials.language_options")
                    </ul>
                </div>
            </div>
        </div>

        <div class="socials-footer flx-a-c">
            <a href="https://twitter.com/nutakugames" class="flx">
                <span class="social-icon twitter"></span>
            </a>
            <a href="https://www.facebook.com/nutakugames" class="flx">
                <span class="social-icon facebook"></span>
            </a>
            <a href="https://www.youtube.com/user/nutakugames" class="flx">
                <span class="social-icon youtube"></span>
            </a>
            <a href="https://discord.gg/aHxtbtX" class="flx">
                <span class="social-icon discord"></span>
            </a>
            <a href="https://www.instagram.com/nutakugames/" class="flx">
                <span class="social-icon instagram"></span>
            </a>
        </div>
    </div>

    <div class="copyright flx-column fnt-small-2">
        <p>
            All models appearing on this website are 18 years or older. Click <a href="/notice/">here</a> for records required pursuant to 18 U.S.C. 2257 Record Keeping Requirements Compliance Statement. By entering this site you swear that you are of legal age in your area to view adult material and that you wish to view such material.<br>
            MG BILLING US CORP, 1209 ORANGE STREET, WILMINGTON, DE-19801, USA<br>
            MG BILLING IRELAND LIMITED, 77 SIR JOHN ROGERSON’S QUAY, SUITE 105, DUBLIN2, IRELAND.
        </p>

        <div class="flx-j-c fnt-medium">
            <a href="/terms/" class="link">Terms of Service</a>
            <a href="/legal/privacy" class="link">Privacy Policy</a>
        </div>
    </div>
</footer>

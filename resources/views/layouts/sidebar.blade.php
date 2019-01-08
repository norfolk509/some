<section class="sidebar flx scrollbar">
    <div class="sidebar-icons-bar">
        <div class="header-height flx-a-c">
            <a href="/" class="logo">
                @svg('nutaku-logo-icon', 'sidebar-logo-icon')
            </a>
        </div>

        <div class="sidebar-icons-item flx-c js-sidebar-item" data-item="sidebarGames">
            @svg('icon-games', 'sidebar-item-icon')
        </div>

        <div class="sidebar-icons-item flx-c js-sidebar-item" data-item="sidebarGoldstore">
            <span class="icon-gold"></span>
        </div>

        <div class="sidebar-icons-item flx-c js-sidebar-item" data-item="sidebarSupport">
            @svg('icon-support', 'sidebar-item-icon')
        </div>

        <div class="sidebar-icons-item flx-c js-sidebar-item" data-item="sidebarSettings">
            @svg('icon-settings', 'sidebar-item-icon')
        </div>

        <div class="sidebar-icons-item flx-c js-sidebar-item" data-item="sidebarDiscover">
            @svg('icon-discover', 'sidebar-item-icon')
        </div>
    </div>
    <div class="sidebar-sections flx-column">
        <div class="header-height flx-a-c">
            <span class="close-sidebar flx-a-c js-close-sidebar">
                <i class="arrow-lines left"></i>
                @lang('Close')
            </span>
        </div>

        {{-- <div id="sidebarTags" class="flyout-normal js-flyout">
            <ul class="menu-list sidebar-list nospace">
                <li class="title">Tranding Tags</li>
                <li><a href="">Character Evolution (186)</a></li>
            </ul>
        </div> --}}

        <div id="sidebarGames" class="flyout-normal js-flyout">
            <ul class="menu-list sidebar-list">
                <li class="title">Favorites</li>
            </ul>
            <div class="recent-games flx-a-c">
                {{-- TO DO: modify in dynamic --}}
                <a href="" class="card-recent flx"><img src="{{ asset('/images/temp/thumbnail_150x150_1.jpg') }}" alt=""></a>
                <a href="" class="card-recent flx"><img src="{{ asset('/images/temp/thumbnail_150x150_2.jpg') }}" alt=""></a>
                <a href="" class="card-recent flx"></a>
            </div>
            <ul class="menu-list sidebar-list">
                <li class="title"><a href="">All Games</a></li>
                <li class="title"><a href="">PC Games</a></li>
                <li><a href="">Free Browser Games</a></li>
                <li><a href="">Free PC Games</a></li>
                <li><a href="">Premium Games</a></li>
                <li><a href="">Newest Games</a></li>
                <li><a href="">Pre-registration</a></li>
                <li><a href="">Upcoming</a></li>
                <li><a href="">On Sale</a></li>
                <li class="title"><a href="">Mobile Games</a></li>
                <li><a href="">Android Games</a></li>
                <li><a href="">iOS Games</a></li>
                <li><a href="">Newest</a></li>
                <li><a href="">Pre-registration</a></li>
                <li><a href="">Upcoming</a></li>
                <li><a href="">On Sale</a></li>
                <li class="title"><a href="">Game Events</a></li>
            </ul>
        </div>

        <div id="sidebarGoldstore" class="flyout-normal js-flyout">
            <ul class="menu-list sidebar-list">
                <li class="title">Quick Buy Gold</li>
            </ul>
        </div>

        <div id="sidebarSupport" class="flyout-normal js-flyout">
            <ul class="menu-list sidebar-list">
                <li class="title">Support</li>
                <li><a href="/support/payment-inquiries/">Payment</a></li>
                <li><a href="/support/general-inquiries/">Account</a></li>
                <li><a href="/support/game-inquiries/">Gameplay</a></li>
                <li><a href="/">Announcements</a></li>
                <li><a href="/">Trust &amp; Safety</a></li>
                <li><a href="/support/">FAQ</a></li>
            </ul>
        </div>

        <div id="sidebarSettings" class="flyout-normal js-flyout">
            <ul class="menu-list sidebar-list">
                <li class="title">Settings</li>
                <li><a href="/members/profile/">My Profile</a></li>
                <li><a href="/members/profile/">Edit Profile</a></li>
                <li><a href="/members/profile/followers/">Followers</a></li>
                <li><a href="/members/game-messages/">Messages</a></li>
                <li><a href="/members/message/">Support Tickets</a></li>
                <li><a href="/logout/">Sign Out</a></li>
            </ul>
        </div>

        <div id="sidebarDiscover" class="flyout-normal js-flyout">
            <ul class="menu-list sidebar-list">
                <li class="title"><a href="/about/">About Us</a></li>
                <li class="title"><a href="/blog/">Blog</a></li>
                <li class="title">Work With Us</li>
                <li><a href="/publishers/">Game Publisher and Developers</a></li>
                <li><a href="http://www.nutakuaffiliates.com/">Affiliate Program</a></li>
                <li><a href="/promo/press/">Press</a></li>
                <li class="title">Hang out with us:</li>
                <li><a href="https://discord.gg/aHxtbtX" target="_blank" class="flx-a-c"><span class="social-icon discord"></span> Discord</a></li>
                <li><a href="https://twitter.com/nutakugames" target="_blank" class="flx-a-c"><span class="social-icon twitter"></span> Twitter</a></li>
                <li><a href="https://www.facebook.com/nutakugames" target="_blank" class="flx-a-c"><span class="social-icon facebook"></span> Facebook</a></li>
            </ul>

            {{-- <ul class="menu-list sidebar-list">
                <li class="title">Night/Day View</li>
            </ul>
            <div class="night-day flx-a-c">
                <span class="flx-c selected" id="layoutNight">
                    @svg('icon-moon', 'icon-moon')
                </span>
                <span class="flx-c" id="layoutDay">
                    @svg('icon-sun', 'icon-sun')
                </span>
            </div> --}}
        </div>
    </div>
</section>

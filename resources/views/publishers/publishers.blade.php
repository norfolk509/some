@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                <h1>@lang('static.publishers_developers')</h1>
                <h2>@lang('static.publishers_title')</h2>
                <a href="mailto:publishing@nutaku.net" class="mainbtn">@lang('static.contact_us')</a>
                <a href="#">@lang('static.learn_about_button')</a>
                <h2>@lang('static.why_nutaku.title')?</h2>
                <h3>@lang('static.why_nutaku.text')</h3>
                <ul>
                    <li>
                        <h3>@lang('static.why_nutaku.title_1')</h3>
                        <p>@lang('static.why_nutaku.text_1')</p>
                    </li>
                    <li>
                        <h3>@lang('static.why_nutaku.title_2')</h3>
                        <p>@lang('static.why_nutaku.text_2')</p>
                    </li>
                    <li>
                        <h3>@lang('static.why_nutaku.title_3')</h3>
                        <p>@lang('static.why_nutaku.text_3')</p>
                    </li>
                </ul>
                <div>
                    <div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <div data-scroll-index="1">
            <div>
                <div>
                    <h2>@lang('static.growing_community')</h2>
                    <div>@lang('static.growing_community_text')</div>
                </div>
                <div>
                    <div>
                        <ul>
                            <li>
                                <p>@lang('static.community.members_no')</p>
                                <p>@lang('static.community.members')</p>
                            </li>
                            <li>
                                <p>@lang('static.community.visits_no')</p>
                                <p>@lang('static.community.visits')</p>
                            </li>
                            <li>
                                <p>@lang('static.community.age_percent')</p>
                                <p>@lang('static.community.age')</p>
                            </li>
                            <li>
                                <p>@lang('static.community.followers_no')</p>
                                <p>@lang('static.community.followers')</p>
                            </li>
                            <li>
                                <div>
                                    <p>@lang('static.community.premium_members_percent')</p>
                                    <p>@lang('static.community.premium_members_percent')</p>
                                </div>
                                <img src="/images/publishers/world-map.png" alt="">
                            </li>
                            <li>
                                <p>@lang('static.community.stories_no')</p>
                                <p>@lang('static.community.stories')</p>
                            </li>
                            <li>
                                <p>@lang('static.community.advertising')</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-scroll-index="2">
        <div>
            <div>
                <h2>@lang('static.marketing_services.title')</h2>
                <div>
                    @lang('static.marketing_services.text')
                </div>
                <div>
                    <p><span>@lang('static.marketing_services.title_1')</span></p>
                    <p>@lang('static.marketing_services.text_1')</p>
                </div>
                <div>
                    <p><span>@lang('static.marketing_services.title_2')</span></p>
                    <p>@lang('static.marketing_services.text_2')</p>
                </div>
                <div>
                    <p><span>@lang('static.marketing_services.title_3')</span></p>
                    <p>@lang('static.marketing_services.text_3')</p>
                </div>
                <a href="mailto:publishing@nutaku.net" class="mainbtn">@lang('static.contact_us')</a>
                <img src="/images/publishers/girl-marketing.png" alt="" class="girl">
            </div>
        </div>
    </div>

    <div data-scroll-index="3">
        <div>
            <div>
                <h2>@lang('static.internal_promotion.title')</h2>
                <ul>
                    <li>
                        <h3>@lang('static.internal_promotion.title_1')</h3>
                        <p>@lang('static.internal_promotion.text_1')</p>
                    </li>
                    <li>
                        <h3>@lang('static.internal_promotion.title_2')</h3>
                        <p>@lang('static.internal_promotion.text_2')</p>
                    </li>
                    <li>
                        <h3>@lang('static.internal_promotion.title_3')</h3>
                        <p>@lang('static.internal_promotion.text_3')</p>
                    </li>
                </ul>
                <div>
                    <img src="/images/publishers/promo-1.png" alt="" class="left">
                    <img src="/images/publishers/promo-2.png" alt="" class="right">
                    <img src="/images/publishers/promo-3.png" alt="" class="center">
                </div>
            </div>
        </div>
    </div>

    <div data-scroll-index="4">
        <div>
            <div>
                <h2> @lang('static.payment_processing.title_1')</h2>
                <div>@lang('static.payment_processing.text_1')</div>
                <h3>@lang('static.payment_processing.title_2')</h3>
                <p>@lang('static.payment_processing.text_2')</p>
                <div id="lineChart"></div>
            </div>
        </div>
    </div>

    <div data-scroll-index="5">
        <div>
            <div>
                <h2>@lang('static.support.title')</h2>
                <div>@lang('static.support.text')</div>
                <h3>@lang('static.support.title_1')</h3>
                <p>@lang('static.support.text_1')</p>
            </div>
            <div>
                <div>
                    <ul>
                        <li>
                            <p>@lang('static.support.call.title')</p>
                            <p>@lang('static.support.call.text')</p>
                        </li>
                        <li>
                            <p>@lang('static.support.chat.title')</p>
                            <p>@lang('static.support.chat.text')</p>
                        </li>
                        <li>
                            <p>@lang('static.support.email.title')</p>
                            <p>@lang('static.support.email.text')</p>
                        </li>
                        <li>
                            <p>@lang('static.support.social.title')</p>
                            <p>@lang('static.support.social.text')</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <div></div>
                    </div>
                </div>
                <h3>@lang('static.support.title_2')</h3>
                <p>@lang('static.support.text_2')</p>
            </div>
        </div>
    </div>

    <div data-scroll-index="6">
        <div>
            <div>
                <h2>@lang('static.app_browser_support.title')</h2>
                <div>@lang('static.app_browser_support.text')</div>
                <div>
                    <div>
                        <img src="/images/publishers/mobile-shape.png" alt="" class="mobile">
                    </div>
                    <div>
                        <p>@lang('static.app_browser_support.title_1')</p>
                        <p>@lang('static.app_browser_support.text_1')</p>
                        <p>@lang('static.app_browser_support.title_2')</p>
                        <p>@lang('static.app_browser_support.text_2')</p>
                        <p>@lang('static.app_browser_support.title_3')</p>
                        <p>@lang('static.app_browser_support.text_3')</p>
                    </div>
                    <div>
                        <p>@lang('static.app_browser_support.title_4')</p>
                        <p>@lang('static.app_browser_support.text_4')</p>
                        <img src="/images/publishers/girl-apps.png" alt="" class="girl">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-scroll-index="7">
        <div>
            <div>
                <h2>@lang('static.case_study.title')</h2>
                <div>@lang('static.case_study.text')</div>
                <div >
                    <p>@lang('static.case_study.title_1')</p>
                    <p>@lang('static.case_study.title_1')</p>
                </div>
                <ul>
                    <li>
                        <p>@lang('static.case_study.report.launch')</p>
                        <p >
                            <span>@lang('static.case_study.report.launch_number')</span>
                            @lang('static.case_study.report.players')
                        </p>
                    </li>
                    <li>
                        <p>@lang('static.case_study.report.week2')</p>
                        <p>
                            <span>@lang('static.case_study.report.week2_number')</span>
                            @lang('static.case_study.report.players')
                        </p>
                        <p>
                            <span>@lang('static.case_study.report.week2_direct')</span>
                            @lang('static.case_study.report.active_players')
                        </p>
                    </li>
                    <li>
                        <p>@lang('static.case_study.report.week4')</p>
                        <p>
                            <span>@lang('static.case_study.report.week4_number')</span>
                            @lang('static.case_study.report.players')
                        </p>
                        <p>
                            <span>@lang('static.case_study.report.week4_direct')</span>
                            @lang('static.case_study.report.active_players')
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div data-scroll-index="8">
        <div>
            <div>
                <h2>@lang('static.game_funding.title')</h2>
                <div>
                    <p>@lang('static.game_funding.title_1')</p>
                    <p>@lang('static.game_funding.text_1')</p>
                    <br>
                    <p>@lang('static.support.email.title') <a href="mailto:publishing@nutaku.net">publishing@nutaku.net</a>@lang('static.more_info')</p>
                </div>
            </div>
        </div>
    </div>

    <div data-scroll-index="9">
        <div>
            <div>
                <a href="mailto:publishing@nutaku.net" class="mainbtn">@lang('static.contact_us')</a>
                <img src="/images/publishers/girl-bottom.png" alt="" class="girl">
            </div>
        </div>
    </div>
@endsection

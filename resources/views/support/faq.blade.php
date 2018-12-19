@extends('layouts.app')

@section('content')
    @include('support.styles')

    <section class="support-new">

        <div class="top faq">
            <div class="layout">
                <h1 class="title-xl">@lang('Frequently Asked Questions')</h1>
            </div>
        </div>

        <div class="content">
            <div class="layout">
                <div class="columns">

                    <div class="column-left">
                        <div class="details">
                            <h2>{{ $selectedQuestion }}</h2>
                            <p>{!! $answer !!}</p>
                        </div>
                    </div>

                    <div class="column-right">
                        <ul class="accordion">
                            @foreach($faqList as $category => $data)
                                <li {{ $category == $selectedCategory ? 'class=open' : '' }}>
                                    <div class="head">{{ $category }}</div>
                                    <div class="items">
                                        @foreach($data as $qs)
                                            <a href="/support/faq/{{ $qs['category_no'] }}/{{ $qs['qa_no'] }}" class="{{ $qs['category_no'] == $category_id && $qs['qa_no'] == $question_id ? 'active title' : 'title' }}" data-trackid="{{ $trackAction }}">
                                                @lang($qs['question'])
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="columns">
                    <div class="column-left"></div>
                    <div class="column-right">
                        <a href="/support/" class="mainbtn back" data-trackid="{{ $trackAction }}:LINK cta - 'BACK TO SUPPORT' btn">
                            <span class="arrow"></span>@lang(' Back to Support')
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="bottom faq">
            <div class="layout">
                <p class="title-xl">@lang('Support Contacts')</p>
                <div class="other-support">
                    @include('support._partials.payment_big_button', ['trackAction' => $trackAction])

                    @include('support._partials.account_big_button', ['trackAction' => $trackAction])

                    @include('support._partials.games_big_button', ['trackAction' => $trackAction])
                </div>
            </div>
        </div>

    </section>
@endsection
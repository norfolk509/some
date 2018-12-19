@extends('layouts.app')

@section('content')
    @include('support.styles')

    <section class="support-new">

        <div class="top faq">
            <div class="layout">

                <p class="title-xl">@lang('Support Contacts')</p>

                <div class="other-support">

                    @include('support._partials.payment_big_button', ['trackAction' => $trackAction])

                    @include('support._partials.account_big_button', ['trackAction' => $trackAction])

                    @include('support._partials.games_big_button', ['trackAction' => $trackAction])

                </div>

                <h1 class="title-xl">@lang('Frequently Asked Questions')</h1>

            </div>
        </div>

        <div class="content">
            <div class="layout">
                <ul class="accordion">
                    @foreach($faqList as $category => $data)
                        <li>
                            <div class="head">{{ $category }}</div>
                            <div class="items">
                                @foreach($data as $question)
                                    <a href="/support/faq/{{ $question['category_no'] }}/{{ $question['qa_no'] }}" data-trackid="{{ $trackAction }}:LINK faq - '{{ $question['category_no'] . $question['qa_no'] }}'">
                                        <span class="title">{{ $question['question'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>
@endsection

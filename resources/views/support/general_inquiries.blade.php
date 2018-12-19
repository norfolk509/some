@extends('layouts.app')

@section('content')
    @include('support.styles')

    <section class="support-new">
        @include('general.notices', ['noticeList' => $noticeList, 'partialTrack' => $partialTrack])

        <span class="chibi web"></span>

        <div class="top">
            <div class="layout">
                <span class="top-icon support-icon web"></span>
                <h1 class="title-xl">@lang('Website Support')</h1>
            </div>
        </div>

        <div class="content">
            <div class="layout">

                <p class="desc">@lang('Contact us for issues with your account, account information and logging in.')</p>
                <p class="desc"><em>@lang('Nutaku support is only available in English.')</em></p>
                <p class="info"><a href="/support/">@lang('Before creating a ticket, make sure you have checked the FAQ for most common problems')</a></p>

                @if($errors->any())
                    @include('general.error_box', [
                        'title' => trans('There was an error with your information:'),
                        'error_list' => $errors->all()
                    ])
                @endif

                <h2 class="title-large">@lang('Create a Ticket')</h2>

                {{ Form::open(array('url' => '/support/general-inquiries/confirm/', 'method' => 'POST')) }}
                    @if(!$isLogin)
                        <div class="item">
                            <label for="name">@lang('Your Name:')</label>
                            {{ Form::text('yourName', (!empty($params['yourname']) ? $params['yourname'] : null), ["tabindex" => "1", "id" => "name", "data-trackid" => $trackAction . ":LINK support - name"]) }}
                        </div>
                        <div class="item">
                            <label for="email">@lang('Email Address:')</label>
                            {{ Form::email('mailAddress', (!empty($params['mailAddress']) ? $params['mailAddress'] : null), ["tabindex" => "2", "id" => "email", "data-trackid" => $trackAction . ":LINK support - email"]) }}
                        </div>
                        <div class="item">
                            <label for="email2">@lang('Email Address:')</label>
                            {{ Form::email('reenterMailAddress', (!empty($params['reenterMailAddress']) ? $params['reenterMailAddress'] : null), ["tabindex" => "3", "id" => "email2", "data-trackid" => $trackAction . ":LINK support - email confirm"]) }}
                        </div>
                    @endif

                <div class="item distance">
                    <label for="subject">@lang('Subject:')</label>
                    {{ Form::select('mySelection', $subjectSelection, (!empty($params['mySelection']) ? $params['mySelection'] : null), ["onchange"=>"addInout();", "tabindex" => "4", "id" => "subject", "data-trackid" => $trackAction . ":LINK support - subject"]) }}
                </div>
                <div class="item appended" id="input-appended">
                    <label></label>
                    {{ Form::text('subject', (!empty($params['subject']) ? $params['subject'] : null), ["class"=>"other-issue-input"]) }}
                </div>

                <div class="item message">
                    <label for="message">@lang('Explain the question you have or the issue you are experiencing:')</label>
                    <sub>
                        <p class="message-info">@lang('Please include as much detail as possible.')</p>
                    </sub>
                    {{ Form::textarea('message', (!empty($params['message']) ? $params['message'] : null), ["tabindex" => "6", "data-trackid" => $trackAction . ":LINK support - message"]) }}
                </div>

                <div class="item">
                    {{ Form::submit(trans('Send'), ["class" => "mainbtn", "data-trackid" => $trackAction . ":LINK cta - proceed btn", "tabindex" => "7"]) }}
                </div>

                {{ Form::close() }}
            </div>
        </div>

        <p class="title-xl">@lang('Other Support Contacts')</p>

        <div class="other-support">
            @include('support._partials.payment_big_button', ['trackAction' => $trackAction])

            @include('support._partials.games_big_button', ['trackAction' => $trackAction])
        </div>

    </section>

    <script type="text/javascript">
        $(function(){
            addInout();
        });

        function addInout(){
            var selectedITem = $('#subject').find(':selected').val().toLowerCase();
            if(selectedITem === 'other'){
                $('.other-issue-input').prop('disabled', false);
                $('.appended').show();
            } else {
                $('.appended').hide();
                $('.other-issue-input').prop('disabled', true);
            }
        }
    </script>
@endsection
@extends('layouts.app')

@section('content')
    @include('support.styles')

    <section class="support-new">

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
                <h2 class="title-large">@lang('Review your Ticket')</h2>

                @if($errors->any())
                    @include('general.error_box', [
                        'title' => trans('There was an error with your information:'),
                        'error_list' => $errors->all()
                    ])
                @endif

                <form class="review" action="/support/general-inquiries/submit/" method="POST" id="form">
                    <input type="hidden" name="yourName" value="{{ $params['yourName'] }}">
                    <input type="hidden" name="mailAddress" value="{{ $params['mailAddress'] }}">
                    <input type="hidden" name="reenterMailAddress" value="{{ $params['reenterMailAddress'] }}">
                    <input type="hidden" name="mySelection" value="{{ $params['mySelection'] }}">
                    <input type="hidden" name="subject" value="{{ !empty($params['subject']) ? $params['subject'] : '' }}">
                    <input type="hidden" name="message" value="{{ $params['message'] }}">

                    <div class="item">
                        <p>@lang('Please review your ticket below before submitting it to the website support team.')</p>
                    </div>

                    <div class="item">
                        <div class="message-content">
                            <span>@lang('Name:')</span><span>{{ $params['yourName'] }}</span>
                            <span>@lang('Email:')</span><span>{{ $params['mailAddress'] }}</span>
                            <span>@lang('Email Confirmation:')</span><span>{{ $params['reenterMailAddress'] }}</span>
                            <span>@lang('Subject')</span><span>{{ $subjects[$params['mySelection']] . (!empty($params['subject']) ? ' - ' . $params['subject'] : '') }}</span>
                            <span>@lang('Message:')</span><span>{{ $params['message'] }}</span>
                        </div>
                    </div>

                    <div class="item">
                        <a class="cancel" href="javascript:window.history.back();" data-trackid="NTK:TOUR:SUPPORTSITE:LINK cta - 'MODIFY MESSAGE CONTENT'">
                            Modify Message                        </a>
                        <input type="submit" class="mainbtn" value="Send"  data-trackid="NTK:TOUR:SUPPORTSITE:LINK cta - send message btn" />

                        <input type="hidden" name="csrf" value="{{ $csrf }}" dispName="none" id="csrf" />
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
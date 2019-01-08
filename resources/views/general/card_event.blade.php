<div class="card-event js-countdown">
    <a href="/" class="card flx-column">
        {{-- <img src="{{ $event['imageFileName'] }}" alt="{{ $event['alt'] }}"> --}}
        <img src="{{ asset('images/temp/img-card-event.jpg') }}" alt="{{ $event['alt'] }}">
        <span class="container flx">
            <span class="left flx-column">
                <span class="general-title full-w txt-one-line">{{ $event['title'] }}</span>
                <span class="counter fnt-medium" data-time="{{ $event['endTime'] }}">
                    <span class="days"></span><span>:</span><span class="hours"></span><span>:</span><span class="minutes"></span><span>:</span><span class="seconds"></span>
                </span>
                <span class="end-soon fnt-small">@lang('Ending soon')</span>
                {{-- <span class="fnt-small-2 full-w col-blue txt-one-line">{{ date('H:i:s',$event['beginTime']) }} - {{ date('H:i:s',$event['endTime']) }}</span> --}}
            </span>
            @svg('icon-timer','icon-timer mar-a-l')
        </span>
    </a>
</div>

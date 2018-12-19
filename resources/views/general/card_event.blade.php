<div class="card-event">
    <a href="/" class="card flx">
        <img src="{{ $event['imageFileName'] }}" alt="{{ $event['alt'] }}">
        <span class="container flx">
            <span class="flx-column">
                <h3 class="general-title full-w txt-one-line">{{ $event['title'] }}</h3>
                <span class="fnt-small-2 full-w col-blue txt-one-line">{{ date('H:i:s',$event['beginTime']) }} - {{ date('H:i:s',$event['endTime']) }}</span>
            </span>
            @svg('icon-timer','icon-timer mar-a-l fill-red')
        </span>
    </a>
</div>

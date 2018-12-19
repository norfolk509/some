@if(!empty($error_list))
    <p class="error-msg">
        {!! (!empty($title) ? $title . '<br />' : '') !!}

        @foreach($error_list as $error)
            {!! $error . '<br />' !!}
        @endforeach
    </p>
@endif
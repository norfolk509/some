@extends('layouts.app')

@section('content')

    @php
        include_once(storage_path('app/lgbt/variables.html'));
    @endphp

    {!! $content !!}

@endsection
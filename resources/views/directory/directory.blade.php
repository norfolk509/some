@extends('layouts.app')

@section('content')
    <div class="layout">
        <h1>@lang('static.directory.title')</h1>
        <div class="directory-left">
            <ul>
                <li>@lang('static.directory.our_directory')</li>
                <li><a href="/home">@lang('static.directory.main') (@lang('static.directory.all'))</a></li>
                <li><a href="/home">@lang('static.directory.games')</a></li>
                <li><a href="/home">@lang('static.directory.blog')</a></li>
                <li><a href="/about">@lang('static.directory.about')</a></li>
                <li><a href="/home">@lang('static.directory.affiliate')</a></li>
                <li><a href="/home">@lang('static.directory.support')</a></li>
            </ul>
        </div>
        <div class="directory-right">
            <h2><a href="/" >@lang('static.directory.site')</a></h2>
            <ul>
                <li><h2><a href="/home">@lang('static.directory.games')</a></h2></li>
                <li><h2><a href="/home">@lang('static.directory.blog')</a></h2></li>
                <li><h2><a href="/about" >@lang('static.directory.about')</a></h2></li>
                <li><h2><a href="/home" >@lang('static.directory.affiliate')</a></h2></li>
                <li><h2><a href="/home">@lang('static.directory.support')</a></h2>
                    <ul>
                        <li><a href="/home">@lang('static.directory.contact_website')</a></li>
                        <li><a href="/home">@lang('static.directory.contact_developers')</a></li>
                    </ul>
                    <span class="cover"></span>
                </li>
            </ul>
        </div>
    </div>
@endsection

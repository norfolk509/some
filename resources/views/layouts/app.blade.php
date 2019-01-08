<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
@include('layouts.head')
@stack('stylesheets_stack')
</head>
<body class="{{ device_agent()->isDesktop() ? 'dsktp' : '' }}">
<div id="page">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="main-content">
        @yield('content')
        @include('layouts.footer')
    </div>
    <div class="overlay"></div>
</div>

{{-- Example for including JS files --}}
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/nutaku.js') }}"></script>
@stack('inline_scripts')
</body>
</html>

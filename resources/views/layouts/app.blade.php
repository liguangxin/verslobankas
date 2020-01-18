<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap&subset=latin-ext" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col justify-between lg:h-full" id="app">
        <div>
            @include('partials.header')
            @include('partials.subheader')
            @include('partials.recent-search')
        </div>
        <div class="bg-blue-7">
            @yield('content')
        </div>
        <div>
            @include('partials.footer')
        </div>
    </div>
</body>
</html>

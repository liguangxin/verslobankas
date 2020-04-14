<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title') - Verslo bankas
    </title>

    @stack('header-css')
    @stack('header-scripts')

    <!-- Scripts defered -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script>
        window.app = {
            'csrf': '{{ csrf_token() }}',
            'routes': {
                'register': '{{ route('register') }}',
                'login': '{{ route('login') }}',
            },
        };
    </script>
</head>
<body>
    <div id="overlay" class="overlay"></div>
    <div id="overlay_transparent" class="overlay overlay-transparent"></div>
    <div class="flex flex-col justify-between lg:h-full" id="app" data-errors="{{ json_encode($errors->all()) }}">
        <div>
            @include('partials.header')
            @if(Route::currentRouteName() == 'home')
                @include('partials.subheader')
                @include('partials.recent-search')
            @endif
        </div>
        <div class="flex-1 bg-blue-7">
            @yield('content')
        </div>
        <div>
            @include('partials.footer')
        </div>
    </div>
    @include('partials.cities-list-modal')

    @stack('footer-scripts')
</body>
</html>

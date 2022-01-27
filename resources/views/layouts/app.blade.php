<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TargetSteppa') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/tyq7nbz.css">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    @stack('styles')
</head>

<body class="font-sans text-grey-900 text-sm ">
    <div id="app">
        <router-view></router-view>
    </div>
    {{--    <div class=" overflow-hidden animate-pulse-500 circle circle1 shadow" id="c2"></div>
    <div class=" animate-pulse circle circle2  shadow" id="c1"></div>
    <div class=" animate-pulse circle circle3  shadow" id="c3"></div>
    <div class=" animate-pulse circle circle4  shadow" id="c4"></div>
    <div class=" animate-pulse circle circle5 shadow" id="c5"></div>
    <div class=" animate-pulse circle circle6 shadow" id="c6"></div>--}}
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>

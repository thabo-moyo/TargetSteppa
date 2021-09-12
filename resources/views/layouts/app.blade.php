<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TargetSteppa') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/tyq7nbz.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body class="font-sans text-grey-900 text-sm">
    <div id="app">
        <main class="py-4">
            <div class="container d-flex justify-content-center align-items-center align-content-center position-relative">
                <div class="glass d-flex home-content ">
                    @include('layouts.includes.dashboard')
                    @yield('content')
                </div>
            </div>
            <div class="circle circle1 ease-in-4s " data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
            <div class="circle circle2 ease-in-4s" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"></div>
        </main>
    </div>
    @include('layouts.includes.footer')
</body>

</html>

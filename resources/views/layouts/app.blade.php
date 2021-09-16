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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/tyq7nbz.css">

</head>

<body class="font-sans text-grey-900 text-sm">
    <div id="app">
        <main class="pt-4 mb-4">
            <div class="container d-flex justify-content-center align-items-center align-content-center position-relative ">
                <div class="glass d-flex home-content position-relative shadow">
            @include('layouts.includes.dashboard')
            @yield('content')
                </div>
            </div>
            <div class="circle circle1 ease-in-4s shadow" data-aos="fade-left" data-aos-offset="300"
                data-aos-easing="ease-in-sine"></div>
            <div class="circle circle2 ease-in-4s shadow" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000"></div>
        </main>
    </div>
    @include('layouts.includes.footer')
</body>

</html>

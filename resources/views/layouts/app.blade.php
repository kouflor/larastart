<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('larastart.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/larastart.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @if(auth()->check() AND auth()->user()->confirm_token)
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-warning">
                        <strong>Alert!</strong> You need to verify your email address.
                    </div>
                </div>
            </div>
        @endif

        @yield('content')

        <flash message="{{ session('flash') }}"></flash>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"
            type="text/javascript"></script>
    @yield('footer')
</body>
</html>

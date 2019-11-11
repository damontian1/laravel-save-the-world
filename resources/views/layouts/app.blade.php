<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Save The World - Pet Adoption</title>
    <link rel='shortcut icon' type='image/x-icon' href='/storage/favicon.ico'/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <!-- Fancybox Plugin CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- User CSS -->
    <link href={{ asset('css/app.css') }} rel="stylesheet">
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">
    @include("partials.navbar")
    <div id="app" style="flex: 1; min-width: 350px;">
        <main>
            @yield('content')
        </main>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Fancybox Plugin JS -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOVdVZ3zaOCmKcbrD0MV7TyKJbFbIOpqk"></script>
    <!-- User JavaScript -->
    <script src={{ asset('js/app.js') }}></script>
</body>
</html>

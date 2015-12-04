<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestion de crise">
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="shortcut-icon" href="{{ asset('favicon.ico') }}" />
    <title>@yield('title', 'CrisisCenter') - CrisisCenter</title>
    <link href="{{ env('APP_ENV') == 'production' ? 'http://static.nuitinfo.martylamoureux.net/css/app.min.css' : asset('css/app.min.css') }}" rel="stylesheet">
</head>
<body class="@yield('body_class')">
<div id="wrapper">
    @yield('body')
</div>
<script src="{{ env('APP_ENV') == 'production' ? 'http://static.nuitinfo.martylamoureux.net/js/app.min.js' : asset('js/app.min.js') }}"></script>
</body>

</html>

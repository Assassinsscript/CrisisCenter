<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CrisisCenter') - CrisisCenter</title>
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
</head>
<body class="@yield('body_class')">
<div id="wrapper">
    @yield('body')
</div>
<script src="{{ asset('js/app.min.js') }}"></script>
</body>

</html>

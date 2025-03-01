<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <link rel="icon" type="image/png" href="/img/logo.png">
    </head>
    <body class="antialiased">
    <div id="app"></div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Code Snippets | Laravel Cameroun</title>

    @include('layouts.favicons')
    @include('layouts.ga')
</head>
<body>
    <pre>{{ $paste->code }}</pre>
</body>
</html>

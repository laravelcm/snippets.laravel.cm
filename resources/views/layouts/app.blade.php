<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @unless (request()->is('/'))
        {{-- We don't want to allow indexing of pastes. --}}
        <meta name="robots" content="noindex">
    @endif

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
            document.querySelector('html').classList.remove('light')
        } else {
            document.querySelector('html').classList.remove('dark')
            document.querySelector('html').classList.add('light')
        }
    </script>

    <title>Code Snippets | Laravel Cameroun</title>

    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/operator-mono" rel="stylesheet">
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}" defer></script>

    @include('layouts.favicons')
    @include('layouts.ga')
</head>
<body class="bg-gray-50 dark:bg-dark">

    @yield('content')

    <x-notify />

</body>
</html>

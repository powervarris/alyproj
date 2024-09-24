<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

    .navbar-light .navbar-nav .nav-link {
        color: #FF69B4; /* Hot pink color */
        font-family: Oswald;
        font-weight: 400;
    }
    a, h1, h4, .x-button {
        color: #FF69B4; /* Hot pink color */
        text-decoration: none;
    }
    .album-title {
        margin-bottom: 30px;
    }
    a:hover {
        color: #FF69B4; /* Hot pink color */
        text-decoration: underline;
    }
    body {
        background-color: whitesmoke; /* Light pink */
        font-family: Oswald;
        font-size: 18px;
        font-weight: 300;
    }
    </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>

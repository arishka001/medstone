<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Главная</title>
        <meta name="description" content="" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <x-header.header />

        <main id="main">
            {{ $slot }}
        </main>

        <x-footer.footer />
    </body>
</html>

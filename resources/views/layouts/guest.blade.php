<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400;1,700&family=Sniglet&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
<div class="font-sans min-h-screen bg-dots-darker bg-center bg-background selection:bg-red-500 selection:text-white antialiased flex flex-col justify-between">
    <livewire:layout.header />
    <div class="relative flex-1 flex justify-center items-center">
            {{ $slot }}
    </div>
    <livewire:layout.footer />
</div>

@stack('modals')

@livewireScripts
</body>
</html>

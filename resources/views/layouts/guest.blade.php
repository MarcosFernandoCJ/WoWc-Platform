<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scrollbar scrollbar-thumb-primary scrollbar-w-2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/fonts.css', 'resources/js/app.js'])
    @stack('scripts')

    <!-- Styles -->
    @livewireStyles

</head>

<body class="flex flex-col min-h-screen h-full">
    <div class="min-h-screen flex flex-col text-base-content antialiased h-full">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>

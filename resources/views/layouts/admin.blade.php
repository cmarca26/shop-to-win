<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-900">

    @include('layouts.partials.admin.navbar')

    @include('layouts.partials.admin.sidebar')

    <div class="p-4 sm:ml-64">
        <x-banner />

        <div class="p-6 mt-14">
            {{ $slot }}
        </div>

        @include('layouts.partials.footer')

    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>

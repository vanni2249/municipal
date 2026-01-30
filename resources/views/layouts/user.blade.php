<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="max-w-3xl mx-auto p-2 md:p-4 space-y-4 bg-gray-100 font-sans antialiased flex flex-col min-h-screen">
    <div class="w-full">
        @livewire('users.layout.navbar')
    </div>
    <main class="">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
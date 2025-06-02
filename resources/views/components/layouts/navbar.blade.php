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

<body class="bg-gray-200 font-sans antialiased flex flex-col min-h-screen">
    <nav @class([
                    'h-16 w-full', 
                    'bg-black' => request()->segment(1) == '',
                    'bg-white' => request()->segment(1) != '',
                ])>
        <div class="max-w-7xl px-4 mx-auto h-full">
            <div class="flex justify-between items-center h-full">
                {{ $header?? '' }}
            </div>
        </div>
    </nav>
    <main class="flex-grow min-h-96">
        {{ $slot }}
    </main>
    <footer class="w-full bg-gray-300">
        {{ $footer??'' }}
    </footer>
    @stack('scripts')
    @livewireScripts
</body>

</html>
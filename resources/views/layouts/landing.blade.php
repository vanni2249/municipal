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
    {{--  --}}
    <main class="flex-grow min-h-96">
        {{ $slot }}
    </main>
    <footer class="max-w-7xl mx-auto px-4 pb-4 pt-2 w-full">
        <div class=" bg-gray-300 p-4 rounded-2xl">

            <ul class=" text-sm text-gray-700 flex flex-col items-center md:flex-row md:justify-between  space-y-1">
                <li class="font-bold">
                    &copy; {{ date('Y') }} MyApp. All rights reserved.
                </li>
                <li class="text-gray-600 text-xs">
                    Hecho con ❤️ en Puerto Rico
                </li>
            </ul>
        </div>
    </footer>
    @stack('scripts')
    @livewireScripts
</body>

</html>

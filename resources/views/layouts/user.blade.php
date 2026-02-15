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

<body class="bg-gray-200 font-sans antialiased flex flex-row min-h-screen">

    <div id="main-content" class="flex-grow flex max-w-7xl mx-auto flex-col transition-all">
        <div class="px-2 pt-2">
            <nav class="bg-white h-16 px-4 w-full rounded-xl">
                <div class="flex justify-between items-center h-full">
                    <div class="flex space-x-4">
                        {{-- <div class=" items-center justify-center">
                            <button id="sidebar-toggle" class="cursor-pointer">
                                <x-icon icon="bars-3" />
                            </button>
                        </div> --}}
                        <a href="{{ route('users.accounts.index') }}" class="font-bold ">MyCity</a>
                    </div>
                    <ul class="flex space-x-6 md:space-x-8">
                        <li class="inline-block">
                            <a href="" class="text-gray-800 hover:text-gray-600">
                                <x-icon icon="bell" />
                            </a>
                        </li>
                        <li class="inline-block">
                            @livewire('users.layout.dropdown-user')
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main class="flex-grow px-2 py-2">
            {{-- @livewire('users.layout.header') --}}
            
            {{ $slot }}
        </main>
        <footer class="mx-auto px-2 pb-2 w-full ">
            <div class="bg-gray-300 rounded-xl">

                <ul
                    class="px-4 py-4 text-sm text-gray-800 flex flex-col justify-center items-center md:flex-row md:justify-between md:items-center space-y-1">
                    <li class="font-bold">
                        &copy; {{ date('Y') }} MyApp. All rights reserved.
                    </li>
                    <li class="text-gray-700 text-xs">
                        Hecho con ❤️ en Puerto Rico
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    @stack('scripts')
    @livewireScripts
</body>

</html>

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
    <nav class="max-w-7xl mx-auto p-4 w-full">
        <div class="bg-white rounded-xl py-4 px-4 md:px-6 h-full">
            <div class=" flex justify-between items-center h-full">
                <div>
                    <a href="{{ route('users.dashboard') }}" class="text-xl font-bold">MyApp's</a>
                </div>
                @php
                    $items = [
                        [
                            'key' => 'Servicios',
                            'route' => 'users.services.index',
                            'active' => 'services' 
                        ],
                        [
                            'key' => 'Solicitudes',
                            'route' => 'users.applications.index',
                            'active' => 'applications' 
                        ],
                        [
                            'key' => 'Rentas',
                            'route' => 'users.rents.index',
                            'active' => 'rents'
                        ],
                        [
                            'key' => 'Radicaciones',
                            'route' => 'users.settlements.index',
                            'active' => 'settlements'
                        ],
                        [
                            'key' => 'Registros',
                            'route' => 'users.registers.index',
                            'active' => 'registers'
                        ],
                        [
                            'key' => 'Noticias',
                            'route' => 'users.news.index',
                            'active' => 'news'
                        ],
                ];
                @endphp
                <ul class="text-xs font-semibold text-gray-800 hidden md:flex space-x-8">
                    @foreach ($items as $item)
                    <li @class([
                        'inline-block border-b-2 hover:border-gray-800',
                        'border-gray-600' => request()->segment(2) == $item['active'],
                        'border-transparent' => request()->segment(2) != $item['active']
                    ])>
                        <a href="{{ route($item['route']) }}" class="font-bold">
                            {{ $item['key'] }}
                        </a>
                    </li>
                        
                    @endforeach
                </ul>
                <ul class="flex space-x-6 md:space-x-8">
                    <li class="inline-block">
                        <a href="" class="text-gray-800 hover:text-gray-600">
                            <img src="{{ asset('icons/bell.svg') }}" alt="bell">
                        </a>
                    </li>
                    <li class="inline-block">
                        <a href="" class="text-gray-800 hover:text-gray-600">
                            <img src="{{ asset('icons/user-circle.svg') }}" alt="user">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="flex-grow min-h-96">
        {{ $slot }}
    </main>
    <footer class="max-w-7xl mx-auto p-4 w-full ">
        <div class="bg-gray-300 rounded-xl">

            <ul
                class="px-4 py-4 text-sm text-gray-700 flex flex-col justify-center items-center md:flex-row md:justify-between md:items-center space-y-1">
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
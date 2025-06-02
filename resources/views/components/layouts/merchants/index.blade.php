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
                @php
                    $items = [
                         [
                            'key' => 'Servicios',
                            'route' => 'merchants.services.index',
                            'active' => 'services'
                        ],
                        [
                            'key' => 'Negocios',
                            'route' => 'merchants.businesses.index',
                            'active' => 'businesses'
                        ],
                        [
                            'key' => 'Solicitudes',
                            'route' => 'merchants.applications.index',
                            'active' => 'applications' 
                        ],
                        [
                            'key' => 'Radicaciones',
                            'route' => 'merchants.settlements.index',
                            'active' => 'settlements'
                        ],
                        [
                            'key' => 'Interacciones',
                            'route' => 'merchants.interactions.index',
                            'active' => 'interactions'
                        ],
                        [
                            'key' => 'Noticias',
                            'route' => 'merchants.news.index',
                            'active' => 'news'
                        ],
                ];
                @endphp
                <div class="flex items-center h-full space-x-4">
                    <div class="md:hidden ">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <div class="flex">

                                    <button class="cursor-pointer">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                                    </button>
                                </div>
                            </x-slot>
                            <x-slot name="content">
                            @foreach ($items as $item)
                                <x-dropdown-link href="{{ route($item['route']) }}">
                                    {{ $item['key'] }}
                                </x-dropdown-link>
                            @endforeach
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div>
                        <a href="{{ route('merchants.dashboard') }}" class="text-xl font-bold">MyApp's</a>
                    </div>
                </div>
                <ul class="text-xs font-semibold text-gray-800 hidden md:flex md:space-x-6 lg:space-x-8">
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
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <img src="{{ asset('icons/bell.svg') }}" class="cursor-pointer" alt="bell">
                            </x-slot>
                            <x-slot name="content">
                                <ul class="py-1 px-2">
                                    @for ($i = 0; $i < 2; $i++)
                                    <li>
                                        <a href="" class="block p-2 hover:bg-gray-100 rounded-lg">
                                            <small class="text-xs text-gray-500 font-bold">
                                                <b>Mensaje de Interacción</b>
                                            </small>
                                            <p class="text-xs text-gray-800 font-bold line-clamp-2">
                                                Respuesta a tu mensaje sobre radicacion de renovacion de patenta.
                                            </p>
                                            <small class="text-xs text-gray-500">{{ rand(1, 12) }} hours ago</small>
                                        </a>
                                    </li>
                                    @endfor
                                </ul>
                                <div>
                                    <a href="{{ route('merchants.notifications.index') }}"
                                        class="block text-center text-xs text-gray-800 hover:text-gray-600 font-bold py-2">
                                        Ver todas las notificaciones
                                    </a>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </li>
                    <li class="inline-block">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <img src="{{ asset('icons/user-circle.svg') }}" class="cursor-pointer" alt="user">
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="">
                                    Mi Perfil
                                </x-dropdown-link>
                                <x-dropdown-link href="">
                                    Salir
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                        <a href="" class="text-gray-800 hover:text-gray-600">
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

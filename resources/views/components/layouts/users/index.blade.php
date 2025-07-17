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
    <div id="sidebar" class="fixed h-screen w-0 lg:w-64 transition-all py-4 pl-4 overflow-auto">
        <aside class="bg-black rounded-xl w-full h-full overflow-auto">
            <header class="h-16 border-b border-gray-900 flex items-center text-white px-6">
                <div class="flex justify-between items-center w-full">
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-gray-200">
                            MyCity
                        </span>
                        <span class="text-xs font-extrabold text-gray-600">
                        </span>
                    </div>
                    <button class="cursor-pointer lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler text-gray-400 icons-tabler-outline icon-tabler-x">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </header>
            <ul class="p-4 text-xs font-bold uppercase space-y-1">
                @foreach (App\Data\Sidebar\User::items() as $item)
                    <x-layouts.sidebar-link href="{{ route($item['route']) }}" @class(['bg-gray-800' => request()->segment(2) == $item['path']])>
                        {{ $item['name'] }}
                    </x-layouts.sidebar-link>
                @endforeach
            </ul>
        </aside>
    </div>
    <div id="main-content" class="flex-grow flex lg:ml-64 flex-col transition-all">
        <div class="px-4 pt-4">
            <nav class="bg-white h-16 px-4 w-full rounded-xl">
                <div class="flex justify-between items-center h-full">
                    <div class="flex space-x-4">
                        <div class="hidden lg:flex items-center justify-center">
                            <button id="sidebar-toggle" class="cursor-pointer">
                                <img src="{{ asset('icons/menu-2.svg') }}" alt="" />
                            </button>
                        </div>
                        <div class="lg:hidden flex items-center justify-center">
                            <x-dropdown align="left">
                                <x-slot name="trigger">
                                    <button
                                        class="text-gray-800 hover:text-gray-600 font-bold flex items-center justify-center">
                                        <img src="{{ asset('icons/menu-2.svg') }}" alt="dropdown" />
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    {{-- @foreach (App\Data\Links\Sidebar\Agency::items() as $item)
                                        <x-dropdown-link href="{{ route($item['route']) }}">
                                            {{ $item['name'] }}
                                        </x-dropdown-link>
                                    @endforeach --}}
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <a href="" class="font-bold lg:hidden">MyCity</a>
                    </div>
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
            </nav>
        </div>
        <main class="flex-grow min-h-96">
            {{ $slot }}
        </main>
        <footer class="mx-auto px-4 pb-4 w-full ">
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
    {{-- <nav class="max-w-7xl mx-auto px-4 pt-4 w-full">
        <div class="bg-white rounded-xl py-4 px-4 md:px-6 h-full">
            <div class=" flex justify-between items-center h-full">
                @php
                    $items = [
                        [
                            'users' => ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers'],
                            'key' => 'Servicios',
                            'route' => request()->segment(1) . '.services.index',
                            'active' => 'services' 
                        ],
                        [
                            'users' => ['accountants'],
                            'key' => 'Comerciantes',
                            'route' => request()->segment(1) . '.merchants.index',
                            'active' => 'merchants' 
                        ],
                        [
                            'users' => ['merchants'],
                            'key' => 'Comercios',
                            'route' => request()->segment(1) . '.businesses.index',
                            'active' => 'businesses' 
                        ],
                        [
                            'users' => ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers'],
                            'key' => 'Interraciones',
                            'route' => request()->segment(1) . '.interactions.index',
                            'active' => 'interactions'
                        ],
                        [
                            'users' => ['citizens', 'merchants'],
                            'key' => 'Solicitudes',
                            'route' => request()->segment(1) . '.applications.index',
                            'active' => 'applications' 
                        ],
                        [
                            'users' => ['citizens', 'merchants'],
                            'key' => 'Rentas',
                            'route' => request()->segment(1) . '.rents.index',
                            'active' => 'rents'
                        ],
                        [
                            'users' => ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers'],
                            'key' => 'Radicaciones',
                            'route' => request()->segment(1) . '.settlements.index',
                            'active' => 'settlements'
                        ],
                        [
                            'users' => ['citizens'],
                            'key' => 'Registros',
                            'route' => request()->segment(1) . '.registers.index',
                            'active' => 'registers'
                        ],
                ];
                @endphp
                <!-- Logo & menu -->
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
                                @foreach (collect($items)->filter(function ($item) {
                                    return in_array(request()->segment(1), $item['users']);
                                })->all() as $item)
                                <x-dropdown-link href="{{ route($item['route']) }}">
                                    {{ $item['key'] }}
                                </x-dropdown-link>
                            @endforeach
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div>
                        <a href="{{ route('users.dashboard') }}" class="text-xl font-bold">MyApp's</a>
                    </div>
                </div>
                <!-- Menu -->
                <menu class="text-xs font-semibold text-gray-800 hidden md:flex md:space-x-6 lg:space-x-8">
                    @foreach (collect($items)->filter(function ($item) {
                        return in_array(request()->segment(1), $item['users']);
                    })->all() as $item)
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
                </menu>
                <!-- Notifications & Profile -->
                <menu class="flex space-x-6 md:space-x-8">
                    <li class="inline-block">
                        <a href="{{ route(request()->segment(1) . '.notifications.index') }}" class="text-gray-800 hover:text-gray-600">
                            <img src="{{ asset('icons/bell.svg') }}" class="cursor-pointer" alt="bell">
                        </a>
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
                </menu>
            </div>
        </div>
    </nav>
    <main class="flex-grow min-h-96">
        {{ $slot }}
    </main>
    <footer class="max-w-7xl mx-auto px-4 pb-4 w-full ">
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
    </footer> --}}
    @stack('scripts')
    @livewireScripts
</body>

</html>
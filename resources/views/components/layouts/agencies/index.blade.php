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
                            MyApps
                        </span>
                        <span class="text-xs font-extrabold text-gray-600">
                            @switch(request()->segment(1))
                                @case('public-works')
                                    Obras-publicas
                                @break

                                @case('citizens-help')
                                    Oficina de Ayuda al ciudadano
                                @break

                                @case('recreation-sports')
                                    Departemento de Recreacion y Deportes
                                @break

                                @case('emergency-management')
                                    Departament de Manejo de Emergencia
                                @break

                                @case('city-police')
                                    Policia Municipal
                                @break

                                @case('city-administrator')
                                    Administrador de la ciudad
                                @break

                                @case('mayors-office')
                                    Oficina del Alcalde
                                @break

                                @case('city-legislature')
                                    Legislatura de la ciudad
                                @break

                                @case('human-resources')
                                    Recursos Humanos
                                @break

                                @case('it-office')
                                    Oficina de IT
                                @break

                                @case('press-office')
                                    Oficina de Prensa
                                @break

                                @case('finance-department')
                                    Departamento de Finanzas
                                @break

                                @default
                                    xxxxx
                            @endswitch
                        </span>
                    </div>
                    <button class="cursor-pointer lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler text-gray-400 icons-tabler-outline icon-tabler-x">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </header>
            <ul class="p-4 text-xs font-bold uppercase space-y-1">
                @foreach (App\Data\Links\Sidebar\Agency::items() as $item)
                    @if (in_array(request()->segment(1), $item['agencies']))
                        <x-layouts.sidebar-link href="{{ route($item['route']) }}" @class(['bg-gray-800' => request()->segment(2) == $item['path']])>
                            {{ $item['name'] }}
                        </x-layouts.sidebar-link>
                    @endif
                @endforeach
            </ul>
        </aside>
    </div>

    <div id="main-content" class="flex-grow flex lg:ml-64 flex-col transition-all">
        <div class="px-4 pt-4">
            <nav class="bg-white h-16 px-4 w-full rounded-xl">
                <div class="flex justify-between items-center h-full">
                    <button id="sidebar-toggle" class="cursor-pointer">
                        <img src="{{ asset('icons/menu-2.svg') }}" alt="">
                    </button>
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
        <main class="flex-grow min-h-96 py-4">
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
    @stack('scripts')
    @livewireScripts
</body>
</html>

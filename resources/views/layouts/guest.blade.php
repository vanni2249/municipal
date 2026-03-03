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
    <nav>
        <div class="max-w-7xl mx-auto px-2 md:px-4 pt-2 md:pt-4 pb-2">
            <div @class(['bg-white flex justify-between items-center rounded-2xl p-4'])>
                <div class="flex items-center space-x-12">
                    <a href="/" @class(['text-xl font-semibold']) wire:navigate>
                        {{-- <div>
                            <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 256 256"
                                class="w-8 h-8 mx-auto">
                                <!-- Generator: Adobe Illustrator 30.2.1, SVG Export Plug-In . SVG Version: 2.1.1 Build 1)  -->
                                <defs>
                                    <style>
                                        .st0 {
                                            fill: #dda931;
                                        }
                                    </style>
                                </defs>
                                <g id="LOGOV">
                                    <path class="st0"
                                        d="M116.63,226.55l.67-28.95c0-57.31-5.21-97.09-15.64-119.35-11.02-23.44-24.51-35.16-40.49-35.16-14.42,0-27.18,9.21-38.27,27.62l-5.66-3c16.42-25.51,34.35-38.27,53.79-38.27,46.44,0,69.66,53.28,69.66,159.83l35.53-55.57c21.54-33.64,32.31-54.68,32.31-63.11,0-2.81-3.33-4.22-9.99-4.22h-8.88l1.33-6.77h47.75l-1.44,6.77h-9.22l-99.81,157.39-11.65,2.77Z" />
                                    <polygon class="st0"
                                        points="162.33 42.7 167.16 70.61 185.68 58.91 173.99 77.43 195.36 82.26 173.99 87.09 185.68 105.61 167.16 93.91 162.33 144.17 157.51 93.91 138.98 105.61 150.68 87.09 129.31 82.26 150.68 77.43 138.98 58.91 157.51 70.61 162.33 42.7" />
                                </g>
                            </svg>
                        </div> --}}
                        MyApp's
                    </a>
                    <ul class="text-sm hidden md:flex space-x-4 text-gray-800 font-bold hover:text-gray-900">
                        <li class="hover:text-gray-700">
                            <a href="{{ route('services.index', ['type' => 'citizen']) }}" wire:navigate>
                                Ciudadanos
                            </a>
                        </li>
                        <li class="hover:text-gray-700">
                            <a href="{{ route('services.index', ['type' => 'merchant']) }}" wire:navigate>
                                Comerciantes
                            </a>
                        </li>
                        <li class="hover:text-gray-700">
                            <a href="{{ route('press-reales.index') }}" wire:navigate>
                                Comunicados
                            </a>
                        </li>
                        <li class="hover:text-gray-700">
                            <a href="{{ route('events.index') }}" wire:navigate>
                                Eventos
                            </a>
                        </li>
                        <li class="hover:text-gray-700">
                            <a href="{{ route('departments.show', ['department' => 'mayor-office']) }}" wire:navigate>
                                Departamentos
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex md:hidden text-white">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full text-gray-900 border border-gray-900 hover:border-gray-800 hover:bg-gray-800 hover:text-gray-100 cursor-pointer focus:outline-none focus:ring-1 focus:ring-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 6l16 0" />
                                    <path d="M4 12l16 0" />
                                    <path d="M4 18l16 0" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('welcome')" wire:navigate>
                                Inicio
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('services.index', ['type' => 'citizen'])" wire:navigate>
                                Ciudadanos
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('services.index', ['type' => 'merchant'])" wire:navigate>
                                Comerciantes
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('press-reales.index')" wire:navigate>
                                Comunicados
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('events.index')" wire:navigate>
                                Eventos
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('departments.show', ['department' => 'mayor-office'])"
                                wire:navigate>
                                Departamentos
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('login')" wire:navigate>
                                Inicio de sesión
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('register')" wire:navigate>
                                Registrarse
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden md:flex justify-between items-center space-x-2">
                    <a href="{{ route('login') }}"
                        class="border border-transparent hover:border-gray-800 hover:bg-gray-800 hover:text-gray-100 py-2 px-4 rounded-md text-xs font-bold uppercase"
                        wire:navigate>
                        Iniciar sesión
                    </a>
                    <a href="{{ route('register') }}"
                        class="border border-black bg-black hover:bg-gray-800 py-2 px-4 rounded-md text-xs font-bold uppercase text-white hover:text-gray-100"
                        wire:navigate>
                        Regístrate
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex-grow max-w-7xl w-full mx-auto px-2 md:px-4 ">
        {{ $slot }}
    </main>
    <footer class="max-w-7xl mx-auto px-2 md:px-4 pb-2 md:pb-4 pt-2 w-full">
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

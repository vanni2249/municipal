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
    <div id="sidebar" class="fixed h-screen w-0 lg:w-64 transition-all py-4 pl-4">
        <aside class="bg-black rounded-xl w-full h-full flex flex-col overflow-hidden">
            <header class="h-16 flex items-center text-white px-6 border-b border-gray-900">
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
            <ul class="grow text-white p-4 text-xs overflow-auto no-scrollbar font-bold uppercase space-y-1">
                @switch(request()->segment(1))
                    @case('citizens')
                        @livewire('citizens.layout.sidebar')
                    @break

                    @case('businesses')
                        @livewire('businesses.layout.sidebar')
                    @break

                    @case('admin')
                        @livewire('admin.layout.sidebar')
                    @break

                    @default
                @endswitch
            </ul>
            <footer class="h-24 border-t border-gray-900"></footer>
        </aside>
    </div>

    <div id="main-content" class="flex-grow flex lg:ml-64 flex-col transition-all">
        <div class="px-2 md:px-4 pt-2 md:pt-4">
            <nav class="bg-white h-16 px-4 w-full rounded-xl">
                <div class="flex justify-between items-center h-full">
                    <div class="flex space-x-4">
                        <div class="hidden lg:flex items-center justify-center">
                            <button id="sidebar-toggle" class="cursor-pointer">
                                <x-icon icon="bars-3" />
                            </button>
                        </div>
                        <div class="lg:hidden flex items-center justify-center">
                            <x-dropdown align="left">
                                <x-slot name="trigger">
                                    <button
                                        class="text-gray-800 hover:text-gray-600 font-bold flex items-center justify-center">
                                        <x-icon icon="bars-3" />
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    @switch(request()->segment(1))
                                        @case('citizens')
                                            @livewire('citizens.layout.sidebar')
                                        @break

                                        @case('businesses')
                                            @livewire('businesses.layout.sidebar')
                                        @break

                                        @case('admin')
                                            @livewire('admin.layout.sidebar')
                                        @break

                                        @default
                                    @endswitch
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <a href="" class="font-bold lg:hidden">MyCity</a>
                    </div>
                    <ul class="flex space-x-6 md:space-x-8">
                        <li class="inline-block">
                            <a href="" class="text-gray-800 hover:text-gray-600">
                                <x-icon icon="bell" />
                            </a>
                        </li>
                        <li class="inline-block">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <x-icon icon="user-circle" />
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link href="">
                                        Mi Perfil
                                    </x-dropdown-link>
                                    <x-dropdown-link href="{{ route('logout') }}">
                                        Salir
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main class="flex-grow min-h-96 px-2 py-4 md:p-4">
            {{ $slot }}
        </main>
        <footer class="mx-auto px-2 md:px-4 pb-2 md:pb-4 w-full ">
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

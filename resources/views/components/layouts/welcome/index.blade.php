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
    <nav @class(['w-full',
        ' bg-black' => request()->routeIs('welcome')])>
        <div class="max-w-7xl mx-auto p-4">
            <div  @class(['flex justify-between items-center rounded-2xl p-4',
            'bg-gray-800' => request()->routeIs('welcome'),
            'bg-white' => !request()->routeIs('welcome')])
            class="">
                <a href="/" @class(['text-xl font-semibold',
                'text-gray-200' => request()->routeIs('welcome'),
                'text-gray-800' => !request()->routeIs('welcome')])>
                    MyApp's
                </a>
                @php
                    $items = [
                        [
                            'label' => 'Ciudadano',
                            'route' => 'users.login',
                        ],
                        [
                            'label' => 'Comerciante',
                            'route' => 'merchants.login',
                        ],
                        [
                            'label' => 'Contador',
                            'route' => 'accountants.login',
                        ],
                        [
                            'label' => 'Contratista',
                            'route' => 'contractors.login',
                        ],
                        [
                            'label' => 'Supplidor',
                            'route' => 'suppliers.login',
                        ],
                        [
                            'label' => 'Empleados',
                            'route' => 'employees.login',
                        ],
                    ];
                @endphp
                <nav class="hidden lg:flex space-x-4 text-sm font-semibold">
                    @foreach ($items as $item)
                        <a href="{{ route($item['route']) }}" 
                        @class(['text-gray-300 hover:text-gray-100' => request()->routeIs('welcome'),
                        'text-gray-700 hover:text-gray-900' => !request()->routeIs('welcome')])>
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </nav>
                <div class="flex lg:hidden text-white">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600">
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
                            @foreach ($items as $item)
                                <x-dropdown-link :href="route($item['route'])">
                                    {{ $item['label'] }}
                                </x-dropdown-link>
                            @endforeach
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex-grow min-h-96">
        {{ $slot }}
    </main>
    <footer class="w-full bg-gray-300">
        <div class="max-w-7xl mx-auto">

            <ul
                class="px-4 py-2 text-sm text-gray-700 flex flex-col items-center md:flex-row md:justify-between  space-y-1">
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

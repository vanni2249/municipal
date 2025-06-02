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
    <aside id="sidebar" class="bg-black fixed h-screen w-0 lg:w-64 overflow-auto transition-all">
        <header class="h-16 border-b border-gray-900 flex items-center text-white px-6">
            <div class="flex justify-between items-center w-full">
                <div class="flex flex-col">
                    <span class="text-sm font-semibold text-gray-200">
                        {{ $sidebarTitle?? 'MyApps' }}
                    </span>
                    <span class="text-xs font-extrabold text-gray-600">
                        {{ $sidebarSubtitle?? '' }}
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
            {{ $sidebarLinks?? '' }}
        </ul>
    </aside>
    <div id="main-content" class="flex-grow flex lg:ml-64 flex-col transition-all">
        <nav class="bg-white h-16 px-4 w-full">
            <div class="flex justify-between items-center h-full">
                <button id="sidebar-toggle" class="cursor-pointer">
                    <img src="{{ asset('icons/menu-2.svg') }}" alt="">
                </button>
                {{ $header?? '' }}
            </div>
        </nav>
        <main class="flex-grow min-h-96">
            {{ $slot }}
        </main>
        <footer class="w-full bg-gray-300">
            {{ $footer??'' }}
        </footer>
    </div>
    @stack('scripts')
    @livewireScripts
</body>

</html>
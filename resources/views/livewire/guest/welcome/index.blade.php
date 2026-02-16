<div>
    <!-- Hero Section -->
    <section style="background-image: url('{{ asset('img/app/morro.webp') }}');"
        class="h-[30rem] flex flex-col border-0 bg-cover bg-center relative bg-transparent">
        <nav @class(['w-full', ' ' => request()->routeIs('welcome')])>
            <div class="max-w-7xl mx-auto p-2 md:p-4">
                <div @class([
                    'flex justify-between items-center bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20',
                ])>
                    <div class="flex items-center space-x-12">

                        <a href="/" @class(['text-xl font-semibold text-gray-200']) wire:navigate>
                            MyApp's
                        </a>
                        <ul class="text-sm hidden md:flex space-x-4 text-gray-200 font-bold">
                            <li class="hover:text-gray-400">
                                <a href="{{ route('services.index', ['type' => 'citizen']) }}" wire:navigate>
                                    Ciudadanos
                                </a>
                            </li>
                            <li class="hover:text-gray-400">
                                <a href="{{ route('services.index', ['type' => 'merchant']) }}" wire:navigate>
                                    Comerciantes
                                </a>
                            </li>
                            <li class="hover:text-gray-400">
                                <a href="{{ route('press-reales.index') }}" wire:navigate>
                                    Comunicados
                                </a>
                            </li>
                            <li class="hover:text-gray-400">
                                <a href="{{ route('events.index') }}" wire:navigate>
                                    Eventos
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex lg:hidden text-white">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600">
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
                                <x-dropdown-link :href="route('login')" wire:navigate>
                                    Inicio de sesión
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('register')" wire:navigate>
                                    Registrarse
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="hidden lg:flex justify-between items-center space-x-2">
                        <a href="{{ route('register') }}"
                            class=" hover:bg-white/10 border border-transparent hover:border-white/20 py-2 px-4 rounded-lg text-xs font-bold uppercase text-white hover:text-gray-300 transition-all duration-200"
                            wire:navigate>
                            Regístrate
                        </a>
                        <a href="{{ route('login') }}"
                            class="border border-white/20 hover:bg-white/10 hover:text-gray-100 py-2 px-4 rounded-lg text-xs text-white font-bold uppercase transition-all duration-200"
                            wire:navigate>
                            iniciar sesión
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="grow mb-4 max-w-7xl px-4 mx-auto flex flex-col items-center justify-center h-auto">
            <div class="grow flex flex-col justify-center items-center h-full">
                <h1
                    class="text-[1.2rem] md:text-4xl text-center font-normal tracking-tight text-white flex flex-col space-y-1 lg:space-y-4">
                    <span class="text-gray-200 text-[1.2rem] md:text-2xl">
                        Bienvenido al sitio web oficial de la
                    </span>
                    <span class="text-[2.1rem] md:text-6xl font-bold text-white tracking-tighter">
                        Ciudad de
                        <span class="text-blue-400">
                            {{ $city }}.
                        </span>
                    </span>
                </h1>
                <p class="text-gray-100 text-sm text-center max-w-2xl py-4">
                    Este sitio web es un esfuerzo por parte del gobierno municipal de la ciudad de {{ $city }}
                    para
                    brindar a los ciudadanos acceso a información y servicios en línea.
                </p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Citizen Services Section -->
    <section id="citizen-services" class="px-2 md:px-4 max-w-7xl mx-auto py-2 space-y-2">
        @foreach ($accountTypes as $type)
            <div>
                <x-card class="border-b-4 border-blue-300">
                    <header class="flex justify-between items-center">
                        <x-h2 class="text-lg font-bold text-gray-900">
                            Servicios del {{ $type->name }}
                        </x-h2>
                        <a href="{{ route('services.index', ['type' => $type->slug]) }}"
                            class="text-sm text-blue-500 hover:underline" wire:navigate>
                            Ver todos
                        </a>
                    </header>
                </x-card>
                <div class="grid grid-cols-12 gap-2 mt-2">
                    @foreach ($type->services()->limit(4)->get() as $service)
                        <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                            class="block bg-white hover:shadow col-span-6 md:col-span-3 p-2 md:p-4 rounded-xl space-x-4"
                            wire:navigate>
                            <div class=" flex justify-center flex-col">
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="">
                                        <x-icon icon="{{ $service->icon }}" height="56" width="56"
                                            class="text-gray-800 stroke-1" />

                                    </div>
                                    <div class="text-center">
                                        <span class="py-2 text-xs text-gray-700 tracking-wide">
                                            {{ $service->serviceType->name }}
                                        </span>
                                        <p class="text-sm font-bold text-gray-900">
                                            {{ $service->title }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>
    <!-- End Citizen Services Section -->
    <!-- News Section -->
    <section class="bg-gray-300 py-2">
        <div class="max-w-7xl px-2 md:px-4 mx-auto space-y-2">
            <x-card class="border-b-4 border-blue-300">
                <header class="flex justify-between items-center">
                    <x-h2>
                        Comunicados
                    </x-h2>
                    <a href="{{ route('press-reales.index') }}" class="text-sm text-blue-500 hover:underline" wire:navigate>
                        Ver todas
                    </a>
                </header>
            </x-card>
            <div class="grid grid-cols-12 gap-2">
                @for ($i = 0; $i < 4; $i++)
                    <a href="{{ route('press-reales.show', $i) }}" class="block col-span-full lg:col-span-6" wire:navigate>
                        <x-card class="h-full hover:shadow lg:p-8">
                            <div>

                                <span class="text-xs text-gray-700">
                                    12 de Octubre de 2024
                                </span>
                                <p class="font-bold text-gray-950">
                                    Última noticia sobre los eventos administrativos relacionados con el servicio
                                </p>
                                <ul class="text-gray-800">
                                    <li class="flex space-x-1 items-center text-sm">
                                        <x-icon icon="user" height="14" width="14"
                                            class="text-white bg-gray-700 stroke-1 inline-block rounded" />
                                        <span>
                                            Autor: Juan Perez
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </x-card>
                    </a>
                @endfor
            </div>

        </div>
    </section>
    <!-- End News Section -->
    <!-- Events Section -->
    <section>
        <div class="max-w-7xl px-2 md:px-4 mx-auto space-y-2 mt-2">
            <x-card class="border-b-4 border-blue-300">
                <header class="flex justify-between items-center">
                    <x-h2>
                        Eventos
                    </x-h2>
                    <a href="{{ route('events.index') }}" class="text-sm text-blue-500 hover:underline" wire:navigate>
                        Ver todas
                    </a>
                </header>
            </x-card>
            <div class="grid grid-cols-12 gap-2">
                @for ($i = 0; $i < 4; $i++)
                    <a href="{{ route('events.show', $i) }}" class="block col-span-full lg:col-span-6" wire:navigate>
                        <x-card class="h-full hover:shadow lg:p-8">
                            <div class="md:flex">
                                <div>
                                    <span class="text-xs text-gray-700">
                                        12 de Octubre de 2024
                                    </span>
                                    <p class="font-bold text-gray-950">
                                        La ultima information sobre los eventos administrativos relacionados con el
                                        servicio
                                    </p>
                                    <ul class="text-gray-800">
                                        <li class="flex space-x-1 items-start text-sm">
                                            <x-icon icon="clock" height="16" width="16"
                                                class="text-gray-700 stroke-1 inline-block" />
                                            <span>
                                                Hora: 10:00 AM - 12:00 PM
                                            </span>
                                        </li>
                                        <li class="flex space-x-1 items-start text-sm">
                                            <x-icon icon="map-pin" height="16" width="16"
                                                class="text-gray-700 stroke-1 inline-block" />
                                            <span>
                                                Ubicación: Oficina de Servicios Municipales
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </x-card>
                    </a>
                @endfor
            </div>
        </div>
    </section>
    <!-- End Events Section -->
</div>

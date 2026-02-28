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
    <section id="citizen-services" class="px-2 md:px-4 max-w-7xl mx-auto py-4 lg:py-8 space-y-8 lg:space-y-8">
        @foreach ($accountTypes as $type)
            <div>
                {{-- <x-card class="border-b-4 border-blue-300"> --}}
                <header class="flex flex-row justify-between items-center py-2 px-2">
                    <div class="">
                        <x-h2 class="text-lg font-bold text-gray-900">
                            Servicios del {{ $type->name }}
                        </x-h2>
                        <p class="text-sm text-gray-700">
                            Aquí encontrarás los servicios disponibles para {{ $type->name }}.
                        </p>

                    </div>
                    <div>
                        <a href="{{ route('services.index', ['type' => $type->slug]) }}"
                            class="text-xs font-bold bg-white p-2 rounded-full text-gray-800 hover:shadow whitespace-nowrap"
                            wire:navigate>
                            Ver todos
                        </a>
                    </div>
                </header>
                {{-- </x-card> --}}
                <div class="grid grid-cols-12 gap-2 mt-2">
                    @foreach ($type->services()->limit(4)->get() as $service)
                        <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                            class="block bg-white hover:shadow col-span-6 lg:col-span-3 p-2 md:p-4 lg:p-6 rounded-xl space-x-4"
                            wire:navigate>
                            <x-card-service :service="$service" />
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>
    <!-- Press Releases Section -->
    <section class="bg-gray-300 py-4 lg:py-8">
        <div class="max-w-7xl px-2 md:px-4 mx-auto">
            <header class="flex justify-between items-center p-2">
                <div>
                    <x-h2>
                        Comunicados
                    </x-h2>
                    <p class="text-sm text-gray-700">
                        Aquí encontrarás los últimos comunicados relacionados con el gobierno municipal de
                        {{ $city }}.
                    </p>
                </div>
                <a href="{{ route('press-reales.index') }}"
                    class="text-xs font-bold bg-white p-2 rounded-full text-gray-800 hover:shadow whitespace-nowrap"
                    wire:navigate>
                    Ver todos
                </a>
            </header>
            <div class="grid grid-cols-12 gap-2 mt-2">
                @for ($i = 0; $i < 4; $i++)
                    <a href="{{ route('press-reales.show', $i) }}" class="block col-span-full lg:col-span-6"
                        wire:navigate>
                        <x-card class="h-full hover:shadow lg:p-8">
                            <div class="flex space-x-4">
                                {{-- <div class="flex jus shrink-0">
                                    <div class="flex justify-start items-center h-[96px] w-[96px] rounded-xl">
                                        <img src="{{ asset('img/news/2.png') }}" alt="lake" class="object-cover rounded">
                                    </div>

                                </div> --}}
                                <div class="grow">
                                    <span class="text-xs text-gray-700">
                                        12 de Octubre de 2024
                                    </span>
                                    <p class="font-bold text-gray-950 py-2">
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
                            </div>
                        </x-card>
                    </a>
                @endfor
            </div>

        </div>
    </section>
    <!-- Events Section -->
    <section>
        <div class="max-w-7xl px-2 md:px-4 mx-auto  py-4 lg:py-8">
            {{-- <x-card class="border-b-4 border-blue-300"> --}}
            <header class="flex justify-between items-center p-2">
                <div>
                    <x-h2>
                        Eventos
                    </x-h2>
                    <p class="text-sm text-gray-700">
                        Aquí encontrarás los próximos eventos relacionados con el gobierno municipal de
                        {{ $city }} .
                    </p>
                </div>
                <a href="{{ route('events.index') }}"
                    class="text-xs font-bold bg-white p-2 rounded-full text-gray-800 hover:shadow whitespace-nowrap"
                    wire:navigate>
                    Ver todos
                </a>
            </header>
            {{-- </x-card> --}}
            <div class="grid grid-cols-12 gap-2 mt-2">
                @for ($i = 0; $i < 4; $i++)
                    <a href="{{ route('events.show', $i) }}" class="block col-span-full lg:col-span-6" wire:navigate>
                        <x-card class="h-full hover:shadow lg:p-8">
                            <div class="md:flex">
                                <div>
                                    <span class="text-xs text-gray-700">
                                        12 de Octubre de 2024
                                    </span>
                                    <p class="font-bold text-gray-950 py-2">
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
    <!-- Departments Section -->
    <section class="bg-gray-300 py-4 lg:py-8">
        <div class="max-w-7xl px-2 md:px-4 mx-auto space-y-2">
            <header class="flex justify-start items-center p-2">
                <div>
                    <x-h2>
                        Departamentos
                    </x-h2>
                    <p class="text-sm text-gray-700">
                        Aquí encontrarás los departamentos relacionados con el gobierno municipal de
                        {{ $city }}.
                    </p>
                </div>
            </header>
            <div class="bg-white p-4 lg:p-8 rounded-2xl">

                <ul class="flex flex-wrap justify-start gap-2 lg:gap-4 text-gray-800">
                    @foreach ($departments as $department)
                        <li
                            class="bg-gray-200 rounded-full text-sm font-bold hover:bg-gray-300 transition-colors duration-200">
                            <a href="{{ route('departments.show', $department->slug) }}"
                                class="p-2 flex space-x-4 items-center" wire:navigate>
                                <div>
                                    {{ $department->name }}

                                </div>
                                <div>
                                    <x-icon icon="arrow-up-right" height="16" width="16" />
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- Accountant Section -->
    <section>
        <div class="max-w-7xl px-2 md:px-4 mx-auto space-y-2 py-4 lg:py-8 pb-2">
            <header class="flex justify-start items-center p-2">
                <div>
                    <x-h2>
                        Contadores
                    </x-h2>
                    <p class="text-sm text-gray-700">
                        Control y gestión de servicios para contadores y sus clientes en el gobierno municipal de {{ $city }}.
                    </p>
                </div>
            </header>
            <div class="bg-white p-4 lg:p-8 rounded-2xl space-y-2">
                <x-h3 class="text-md font-bold text-gray-900">
                    ¿Eres contador?
                </x-h3>
                <p class="text-sm text-gray-700">
                    Si eres un contador y tienes clientes en la ciudad de {{ $city }}, puedes registrarte
                    en
                    nuestro sitio web para acceder a servicios exclusivos para contadores y sus clientes. Debes
                    cominicarte con el soporte para validar tu cuenta como contador y así poder acceder a los
                    servicios exclusivos para contadores y sus clientes.
                </p>
                <div class="py-6 lg:py-0 lg:pt-6">
                    <a href="{{ route('register') }}"
                        class="text-md font-bold bg-blue-500 px-8 py-2 rounded-full text-white hover:bg-blue-600 whitespace-nowrap"
                        wire:navigate>
                        Regístrate
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

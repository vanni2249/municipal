<div>
    <section style="background-image: url('{{ asset('img/app/morro.webp') }}');"
        class="h-[30rem] flex flex-col border-0 bg-cover bg-center relative bg-transparent">
        {{-- Put image background --}}
        <nav @class(['w-full', ' ' => request()->routeIs('welcome')])>
            <div class="max-w-7xl mx-auto p-4">
                <div @class([
                    'flex justify-between items-center bg-white/10 backdrop-blur-md rounded-2xl p-4',
                    'border border-white/20',
                ]) class="">
                    <a href="/" @class(['text-xl font-semibold text-gray-200']) wire:navigate>
                        MyApp's
                    </a>
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
                            San Jose.
                        </span>
                    </span>
                </h1>
                <p class="text-gray-100 text-sm text-center max-w-2xl py-4">
                    Este sitio web es un esfuerzo por parte del gobierno municipal de la ciudad de San Jose para
                    brindar a los ciudadanos acceso a información y servicios en línea.
                </p>
            </div>
        </div>
    </section>

    <section id="citizen-services" class="p-4 max-w-7xl px-4 mx-auto py-4">

        @foreach ($accountTypes as $type)
            <header class="mt-8 mb-4 px-1">
                <h1 class="text-lg font-bold text-gray-900 leading-3">
                    Servicios del {{ $type->name }}
                </h1>
            </header>
            <div id="{{ $type->slug }}" class="grid grid-cols-12 gap-2">

                @foreach ($type->services()->limit(4)->get() as $service)
                    <div class="bg-white col-span-6 md:col-span-3 p-2 md:p-4 rounded-xl space-x-4">
                        <div class=" flex justify-center flex-col">
                            <div class="flex-1 flex flex-col items-center">
                                <div class="">
                                    <x-icon icon="shirt-sport" height="44" width="44" />

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
                            {{-- <p class="hidden md:block text-sm text-gray-700 line-clamp-2">
                                {{ $service->description }}
                            </p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        {{-- </div> --}}
    </section>

    <section class="bg-blue-400 p-4 mt-4"></section>
</div>

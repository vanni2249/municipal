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
                            class=" hover:bg-gray-500 border border-transparent hover:border-gray-500 py-2 px-4 rounded-lg text-xs font-bold uppercase text-white hover:text-gray-300"
                            wire:navigate>
                            Regístrate
                        </a>
                        <a href="{{ route('login') }}"
                            class="border border-gray-500 hover:bg-gray-500 hover:text-gray-100 py-2 px-4 rounded-lg text-xs text-white font-bold uppercase"
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
    <section class="grid grid-cols-12 gap-2 lg:gap-4 pt-4  max-w-7xl px-4 mx-auto">
        <header id="services" class="col-span-full pt-4 px-2">
            <h2 class="font-bold text-xl text-gray-800">
                Servicios municipales
            </h2>
        </header>
        <div class="col-span-12 grid grid-cols-12 gap-2 md:gap-4">
            @foreach ($services as $service)
                <x-card class="col-span-full md:col-span-6 lg:col-span-4 flex flex-col">
                    <div>
                        <small class="text-gray-700">
                            {{ $service->serviceType->name }}
                        </small>
                        <br>
                        <strong class="text-md">{{ $service->title }}</strong>
                    </div>
                    <p class="text-sm text-gray-600 line-clamp-2 grow mb-4">
                        {{ $service->description }}
                    </p>
                    {{-- <div class="flex justify-between items-center mt-auto">
                    <div class="text-sm text-gray-800">
                       <x-money-format :amount="$service->amount" />
                    </div>
                    <div class="flex justify-end">
                        <x-link-button href="{{ route('businesses.services.show', $service->ulid) }}" variant="light">Aplicar</x-link-button>
                    </div>
                </div> --}}
                </x-card>
            @endforeach
        </div>
    </section>
</div>

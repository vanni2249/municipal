<div>
    <section class="bg-black h-[30rem] border-0">
        {{-- <img src="{{ asset('img/app/puerto-rico.jpg') }}" alt="Puerto Rico" class="absolute inset-0 w-full h-full object-cover opacity-30"> --}}
        <div class="max-w-7xl px-4 mx-auto flex flex-col items-center justify-center h-full">
            <div class="grow flex flex-col justify-center items-center h-full">
                <h1
                    class="text-[1.2rem] md:text-4xl text-center font-normal tracking-tight text-white flex flex-col space-y-1 lg:space-y-4">
                    <span class="text-gray-200 text-[1.2rem] md:text-2xl">
                        Bienvenido al sitio web oficial de la
                    </span>
                    <span class="text-[2.1rem] md:text-6xl font-bold text-white tracking-tighter">
                        Ciudad de
                        <span class="text-red-600">
                            San Jose.
                        </span>
                    </span>
                </h1>
                <p class="text-gray-400 text-sm text-center max-w-2xl py-4">
                    Este sitio web es un esfuerzo por parte del gobierno municipal de la ciudad de San Antonio para
                    brindar a los ciudadanos acceso a información y servicios en línea.
                </p>
                <ul class="flex md:hidden items-center flex-row space-x-1 ">
                    {{-- <li>
                        <a href="{{ route('users.login') }}"
                            class="bg-gray-700 hover:bg-gray-800 border-gray-400 text-gray-200 hover:text-white px-6 py-2 text-xs uppercase font-bold rounded-full">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a href="{{ route('users.register') }}"
                            class="border border-gray-700 hover:border-gray-700 hover:bg-gray-800 text-gray-300 hover:text-gray-100 px-6 py-2 text-xs uppercase font-bold rounded-full">Registrarse</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </section>
    {{-- <section class="max-w-7xl px-4 mx-auto pt-4">
        <x-card>
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="grow">
                    <h2 class="text-gray-800 text-lg font-bold">
                        Tienes numero de registro?
                    </h2>
                    <p class="text-gray-600 text-sm mt-1">
                        Si ya tienes un número de registro, puedes adjuntar el numero de registro con una cuenta de usuario nueva.
                    </p>
                </div>
                <div class="w-full md:w-auto flex ">
                </div>
            </div>
        </x-card>
    </section> --}}
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

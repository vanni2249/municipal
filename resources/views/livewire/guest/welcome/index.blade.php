<div>
   <section class="bg-black h-[30rem] border-0">
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
                            San Antonio.
                        </span>
                    </span>
                </h1>
                <p class="text-gray-400 text-xs md:sm text-center max-w-2xl py-4">
                    Este sitio web es un esfuerzo por parte del gobierno municipal de la ciudad de San Antonio para
                    brindar a los ciudadanos acceso a información y servicios en línea.
                </p>
                <ul
                    class="flex md:hidden items-center flex-row space-x-1 ">
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
    <section class="max-w-7xl px-4 mx-auto pt-4">
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
                    {{-- <x-link-button href="{{ route('users.attach') }}" class="w-full whitespace-nowrap" label="Adjuntar numero de registro" /> --}}
                </div>
            </div>
        </x-card>
    </section>
    <section class="grid grid-cols-12 gap-2 lg:gap-4 pt-4  max-w-7xl px-4 mx-auto">
        <header id="services" class="col-span-full pt-4 px-2">
            <h2 class="font-bold text-xl text-gray-800">
                Servicios municipales
            </h2>
        </header>
        <!-- Citizens services -->
        @php
            $services = [
                [
                    'key' => 'citizen',
                    'name' => 'Servicios al ciudadano',
                    'query' => App\Data\Services\User::items(),
                    'route' => 'users.login',
                ],
                [
                    'key' => 'merchant',
                    'name' => 'Servicios al comerciante',
                    'query' => App\Data\Services\Merchant::items(),
                    'route' => 'users.login',
                    
                ],
                [
                    'key' => 'accountant',
                    'name' => 'Servicios al contador',
                    'query' => App\Data\Services\Accountant::items(),
                    'route' => 'users.login',
                    
                ],
                [   
                    'key' => 'contractor',
                    'name' => 'Servicios al contratista',
                    'query' => App\Data\Services\Contractor::items(),
                    'route' => 'users.login',
                    
                ],
                [
                    'key' => 'supplier',
                    'name' => 'Servicios al Supplidor',
                    'query' => App\Data\Services\Supplier::items(),
                    'route' => 'users.login',
                    
                ],
                [
                    'key' => 'visitors',
                    'name' => 'Servicios al visitante',
                    'query' => App\Data\Services\Visitor::items(),
                    'route' => 'users.login',
                ],
            ];
        @endphp     
        @foreach ($services as $service)
        <div class="bg-white col-span-full md:col-span-6 lg:col-span-4 px-4 py-6 md:p-6 lg:p-8 rounded-xl flex flex-col space-y-6">
            <header class="flex items-center justify-between">
                <h2 class="text-lg font-bold text-gray-700 leading-3">
                    {{ $service['name'] }}
                </h2>
            </header>
            @if ($service['key'] != 'employee')
                
            <ul class="grow text-sm space-y-4 py-2 px-1">
                @foreach (collect($service['query'])->take(6) as $item)
                <li class="text-gray-600 line-clamp-1 ">
                    {{ $item['title'] }}
                </li>
                @endforeach
            </ul>
            @endif
            <footer class="flex justify-center">
                {{-- <a href="{{ route($service['route'], ['role' => $service['key']]) }}"
                    class="border border-gray-300 font-bold text-gray-600 hover:text-gray-800 transition-all hover:bg-gray-200 w-full text-center text-xs py-2 rounded-full">
                    Acceder a los servicios --}}
                </a>
            </footer>
        </div>
        @endforeach
    </section>
    </section>
</div>
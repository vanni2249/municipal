<x-layouts.welcome>
    
    <!-- Hero -->
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
                <p class="text-gray-600 text-xs md:sm text-center max-w-2xl py-4">
                    Este sitio web es un esfuerzo por parte del gobierno municipal de la ciudad de San Antonio para
                    brindar a los ciudadanos acceso a información y servicios en línea.
                </p>
                <ul
                    class="flex flex-col items-center md:flex-row space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                    <li>
                        <a href="#"
                            class="border border-gray-900 hover:border-gray-900 hover:bg-gray-900 text-gray-300 hover:text-gray-100 px-6 py-2 text-xs uppercase font-bold rounded-full">Ciudadanos</a>
                    </li>
                    <li>
                        <a href="#"
                            class="bg-gray-900 hover:bg-gray-800 border-gray-400 text-gray-200 hover:text-white px-6 py-2 text-xs uppercase font-bold rounded-full">Comerciantes</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-12 gap-4 py-8 lg:py-16  max-w-7xl px-4 mx-auto">
        <header id="services" class="col-span-full pt-4">
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
                    'route' => 'merchants.login',

                ],
                [
                    'key' => 'accountant',
                    'name' => 'Servicios al contador',
                    'query' => App\Data\Services\Accountant::items(),
                    'route' => 'accountants.login',

                ],
                [   
                    'key' => 'contractor',
                    'name' => 'Servicios al contratista',
                    'query' => App\Data\Services\Contractor::items(),
                    'route' => 'contractors.login',

                ],
                [
                    'key' => 'supplier',
                    'name' => 'Servicios al Supplidor',
                    'query' => App\Data\Services\Supplier::items(),
                    'route' => 'suppliers.login',

                ],
                [
                    'key' => 'employee',
                    'name' => 'Servicios al empleado',
                    'query' => App\Data\Services\User::items(),
                    'route' => 'employees.login',

                ],

            ];
        @endphp     
        @foreach ($services as $service)
            
        <div class="bg-white col-span-full md:col-span-4 lg:col-span-4 px-4 py-6 md:p-6 lg:p-8 rounded-xl flex flex-col space-y-6">
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
                <a href="{{ route($service['route']) }}"
                    class="border border-gray-300 font-bold text-gray-600 hover:text-gray-800 transition-all hover:bg-gray-200 w-full text-center text-xs py-2 rounded-full">
                    Acceder a los servicios
                </a>
            </footer>
        </div>
        @endforeach
    </section>

    <!-- public announcement -->
    <section class="bg-gray-300 py-8 lg:py-16">
        <div class="grid grid-cols-12 gap-4 max-w-7xl px-4 mx-auto">
            <header id="public-announcement" class="col-span-full pt-4">
                <h2 class="font-bold text-xl text-gray-900">Anuncios publicos
                </h2>
            </header>

            @for ($i = 0; $i < 4; $i++) 
            <a href="{{ route('announcements.show', ['announcement' => $i]) }}"
                class="col-span-full lg:col-span-6 bg-white hover:shadow p-4 md:p-6 lg:p-8 rounded-xl flex flex-col md:flex-row space-x-4">
                <div class=" md:flex md:items-center md:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline text-gray-700 icon-tabler-speakerphone">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18 8a3 3 0 0 1 0 6" />
                        <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                        <path
                            d="M12 8h0l4.524 -3.77a.9 .9 0 0 1 1.476 .692v12.156a.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                    </svg>
                </div>
                <div class="flex flex-col  md:flex-row space-y-4">
                    <h2 class="text-lg font-bold text-gray-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                    </h2>
                    <div class="text-xs flex flex-col lg:flex-row lg:justify-between space-x-2">
                        <span class="whitespace-nowrap text-gray-600">
                            Contrato: 123456789
                        </span>
                    </div>

                </div>
            </a>
            @endfor
            <footer class="col-span-full pt-8 lg:pt-16">
                <div class="flex justify-center">
                    <a href="{{ route('announcements.index') }}"
                        class="bg-black text-center text-white px-4 py-2 rounded hover:bg-gray-800">
                        Ver todos los anuncios publicos
                    </a>
                </div>
            </footer>
        </div>
    </section>
    <!-- News -->
    <section class="grid grid-cols-12 gap-4 max-w-7xl mx-auto px-4 py-8 lg:py-16">
        <header id="news" class="col-span-full">
            <h2 class="font-bold text-xl text-black pt-4">Noticias</h2>
        </header>

        @for ($i = 0; $i < 2; $i++) 
        <a href="{{ route('news.show', ['new' => $i]) }}"
            class="col-span-full md:col-span-6 bg-white rounded-xl hover:shadow flex flex-col space-x-4">
            <div class="bg-gray-400 w-full h-64 lg:h-86 rounded-t-xl"></div>
            <div class="flex flex-col space-y-4 p-4">

                <h2 class="text-lg font-bold text-gray-800 line-clamp-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nemo eligendi a quidem optio libero sequi animi magni provident repellat ad, nam ut neque pariatur unde itaque consequatur quis ipsum?
                </h2>
                <div class="text-xs flex items-center text-gray-600 space-x-2">
                    <span class="">
                        hace 2 dias
                    </span>
                </div>
            </div>
            </a>
            @endfor
            <footer class="col-span-full pt-8 lg:pt-16">
                <div class="flex justify-center">
                    <a href="{{ route('news.index') }}"
                        class="bg-black text-center text-white px-4 py-2 rounded hover:bg-gray-800">
                        Ver todas las noticias
                    </a>
                </div>
            </footer>
    </section>
    <!-- Events -->
    <section class="bg-gray-300 py-8 lg:py-16">
        <div class="grid grid-cols-12 gap-4 max-w-7xl px-4 mx-auto">
            <header id="events" class="col-span-full pt-4">
                <h2 class="font-bold text-xl text-black">Eventos</h2>
            </header>
            @for ($i = 0; $i < 4; $i++) 
            <a href="{{ route('events.show', ['event' => $i]) }}"
                class="col-span-full md:col-span-6 bg-white hover:shadow p-4 md:p-8 rounded-xl flex flex-col space-y-4">
                
                <h2 class="text-lg font-bold text-gray-800 line-clamp-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                </h2>
                <ul class="flex flex-col space-y-2 text-xs text-gray-600">
                    <li class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 7v5l3 3" />
                            </svg>
                        </span>
                        <span>
                            10:00 AM - 12:00 PM
                        </span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path
                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                        </span>
                        <span class="line-clamp-1">
                            Northwest Recreation Center 2913 Northland Dr. Austin TX 78757
                        </span>
                    </li>
                </ul>
            </a>
            @endfor
            <footer class="col-span-full pt-8 lg:pt-16">
                <div class="flex justify-center">
                    <a href="{{ route('events.index') }}"
                        class="bg-black text-center text-white px-4 py-2 rounded hover:bg-gray-800">
                        Ver todos los eventos
                    </a>
                </div>
            </footer>
        </div>
    </section>
   
    <!-- press release -->
    <section class=" py-8 lg:py-16">
        <div class="grid grid-cols-12 gap-4 max-w-7xl px-4 mx-auto">
            <header id="press-release" class="col-span-full pt-4">
                <h2 class="font-bold text-xl text-black">
                    Comunicado de prensa
                </h2>
            </header>

            @for ($i = 0; $i < 4; $i++) 
            <a href="{{ route('releases.show', ['release' => $i]) }}"
                class="col-span-full lg:col-span-6 bg-white hover:shadow p-4 md:p-6 lg:p-8 rounded-xl flex flex-col md:flex-row space-x-4">
                <div class="flex md:items-center md:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler text-gray-600 icons-tabler-outline icon-tabler-file-description">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M9 17h6" />
                        <path d="M9 13h6" />
                    </svg>
                </div>
                <div class="flex flex-col space-y-4">
                    <p class="text-lg font-bold text-black">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                    </p>
                    <div class=" text-xs flex justify-between space-x-2">
                        <span class=" text-gray-600">
                            Hace 3 dias
                        </span>
                    </div>
                </div>
                </a>
                @endfor
                <footer class="col-span-full pt-8 lg:pt-16">
                    <div class="flex justify-center">
                        <a href="{{ route('releases.index') }}"
                            class="bg-black text-center text-white px-4 py-2 rounded hover:bg-gray-800">
                            Ver todos los comunicados de prensa
                        </a>
                    </div>
                </footer>
        </div>
    </section>
     <!-- Agencies municipilitiy -->
    <section class="bg-gray-300 py-8 lg:py-16">
        <div class="grid grid-cols-12 gap-4 max-w-7xl px-4 mx-auto">
        <header id="agency" class="col-span-full">
            <h2 class="font-bold text-xl text-black pt-4">
                Entidades municipales
            </h2>
        </header>

        <ul class="col-span-full grid grid-cols-12 gap-4">
            @foreach (App\Data\Agency::items() as $item)
            <li class="col-span-full md:col-span-6 lg:col-span-4">
                <a href="{{ route('agencies.show', ['agency' => $item['slug']]) }}"
                    class="bg-white hover:shadow h-full p-4 md:p-6 lg:p-8 rounded-xl flex flex-row items-center space-x-4">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-building-cog">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21h9" />
                            <path d="M9 8h1" />
                            <path d="M9 12h1" />
                            <path d="M9 16h1" />
                            <path d="M14 8h1" />
                            <path d="M14 12h1" />
                            <path
                                d="M5 21v-16c0 -.53 .211 -1.039 .586 -1.414c.375 -.375 .884 -.586 1.414 -.586h10c.53 0 1.039 .211 1.414 .586c.375 .375 .586 .884 .586 1.414v7" />
                            <path
                                d="M16 18c0 .53 .211 1.039 .586 1.414c.375 .375 .884 .586 1.414 .586c.53 0 1.039 -.211 1.414 -.586c.375 -.375 .586 -.884 .586 -1.414c0 -.53 -.211 -1.039 -.586 -1.414c-.375 -.375 -.884 -.586 -1.414 -.586c-.53 0 -1.039 .211 -1.414 .586c-.375 .375 -.586 .884 -.586 1.414z" />
                            <path d="M18 14.5v1.5" />
                            <path d="M18 20v1.5" />
                            <path d="M21.032 16.25l-1.299 .75" />
                            <path d="M16.27 19l-1.3 .75" />
                            <path d="M14.97 16.25l1.3 .75" />
                            <path d="M19.733 19l1.3 .75" />
                        </svg>
                    </span>
                    <p class="text-lg font-bold text-gray-800">
                        {{ $item['name'] }}
                    </p>
                </a>
            </li>
            @endforeach
        </ul>

        <footer class="col-span-full pt-8 lg:pt-16">
            <div class="flex justify-center">
                <a href="{{ route('agencies.index') }}"
                    class="bg-black text-center text-white px-4 py-2 rounded hover:bg-gray-800">
                    Ver todas las agencias municipales
                </a>
            </div>
        </footer>
        </div>
    </section>
    <!-- Facilidaties -->
    <section class="grid grid-cols-12 gap-4 max-w-7xl px-4 mx-auto py-8 lg:py-16">
        <header id="city-hall" class="col-span-full">
            <h2 class="font-bold text-xl text-black pt-4">
                Facilidadades del gobierno municipal
            </h2>
        </header>
        @foreach (collect(App\Data\Facility::items())->take(6) as $item)
        <a href="{{ route('facilities.show', ['facility' => $item['slug']]) }}" 
            class="col-span-full md:col-span-6 lg:col-span-4">
            <x-card class="rounded-xl hover:shadow p-4 md:p-6 lg:p-8">
                <span class="text-xs font-bold text-gray-500 uppercase">{{ $item['category'] }}</span>
                <p class="text-lg font-bold pb-2">{{ $item['name'] }}</p>
                <ul class="text-gray-600 space-y-2 text-xs">
                    <li class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path
                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                        </span>
                        <span>
                            {{ $item['location'] }}
                        </span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 7v5l3 3" />
                            </svg>
                        </span>
                        <span>
                            {{ $item['opening_hours'] }}
                        </span>
                    </li>
                </ul>
            </x-card>
        </a>
        @endforeach
        <footer class="col-span-full pt-8 lg:pt-16">
            <div class="flex justify-center">
                <a href="{{ route('facilities.index') }}"
                    class="bg-black hover:bg-gray-800 text-center text-white px-4 py-2 rounded">
                    Ver todas las facilidades municipales
                </a>
            </div>
        </footer>
    </section>

</x-layouts.welcome>
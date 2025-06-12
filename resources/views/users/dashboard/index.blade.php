<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4">
        <div class="grid grid-cols-12 gap-4">
            <!-- Profile box -->
            <x-card class="col-span-full p-4 lg:p-8 rounded-xl" color="bg-black">
                <header class="flex justify-between items-start">
                    <div>
                        <span class="text-xs font-bold text-gray-200">Bienvenidos</span>
                        <h2 class="text-2xl font-bold text-white">
                            Juan del Pueblo
                        </h2>
                    </div>
                    <div>
                        <div>
                            <span href="#" class="text-xs text-gray-200  font-bold">
                                @switch(request()->segment(1))
                                    @case('visitors')
                                        Visitante
                                    @break

                                    @case('citizens')
                                        Ciudadano
                                    @break

                                    @case('merchants')
                                        Comerciante
                                    @break

                                    @case('accountants')
                                        Contador
                                    @break

                                    @case('contractors')
                                        Contratista
                                    @break

                                    @case('suppliers')
                                        Proveedor
                                    @break

                                    @default
                                @endswitch
                            </span>
                        </div>
                    </div>
                </header>
            </x-card>
            <!-- Interaction box -->
            @if (in_array(request()->segment(1), ['citizens', 'merchants', 'accountants']))
                <x-card class="col-span-full p-4 lg:p-8 rounded-xl">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                        <div>
                            <h2 class="text-lg text-gray-800 font-bold">Solicitar interaccion</h2>
                            <p class="text-sm text-gray-700 pt-4">
                                Puede solicitar interraccion para resolver dudas o cualquier situacion relacionado a
                                cualquier servicio.
                                Recibira una llamada devuelta si solicita una llamada o un mensaje atraves de esta
                                palataforma.
                            </p>
                        </div>
                        <div>
                            <div class="flex space-x-2 rounded-full">
                                <div class="flex w-1/2">
                                    <a href="{{ route(request()->segment(1) . '.interactions.calls.create') }}" class="w-full bg-gray-200 hover:bg-gray-300 p-2 rounded-full flex justify-center items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                        </svg>
                                        <span class="text-xs text-gray-700 font-bold pr-5">
                                            Llamada
                                        </span>
                                    </a>
                                </div>
                                <div class="flex w-1/2">
                                    <a href="{{ route(request()->segment(1) . '.interactions.messages.create') }}" class="w-full bg-gray-200 hover:bg-gray-300 p-2 rounded-full flex justify-center items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 9h8" />
                                            <path d="M8 13h6" />
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                        </svg>
                                        <span class="text-xs text-gray-700 font-bold pr-5">
                                            Mensaje
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>
            @endif
            <!-- Services box -->
            <x-card class="col-span-full p-4 lg:p-8 h-full rounded-xl">
                <header class="flex justify-between items-start mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Servicios
                    </h2>
                    <div>
                        <a href="{{ route(request()->segment(1) . '.services.index') }}" class="text-xs text-gray-700">
                            Ver mas
                        </a>
                    </div>
                </header>
                <div class="grid grid-cols-12 gap-2">
                    @foreach (collect(\App\Data\Service::items())->filter(function ($item) {
                        return in_array(request()->segment(1), $item['users']);
                    })->take(8) as $item)
                        <a href="#"
                            class="flex flex-col space-y-1 col-span-6 md:col-span-4 lg:col-span-3 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
                            @if (isset($item['img']))
                                <div>
                                    <img src="{{ asset($item['img']) }}" class="rounded-t-xl" alt="">
                                </div>
                            @endif
                            <div class="p-2 lg:p-4">
                                <span class="text-sm text-gray-700 font-bold">
                                    {{ $item['title'] }}
                                </span>
                                <span class="text-gray-500 line-clamp-2">
                                    {{ $item['sub-title'] }}
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </x-card>
            <!-- Sidebar box -->
            {{-- <div class="col-span-full md:col-span-4">
                @include('users.partials.sidebar-box')
            </div> --}}

        </div>
    </div>

</x-layouts.users>

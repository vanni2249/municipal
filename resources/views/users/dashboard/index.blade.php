<x-layouts.users>
    <div class="p-4">
        <div class="grid grid-cols-12 gap-4">
            <!-- Profile box -->
            <x-card class="col-span-full lg:col-span-3 p-4 rounded-xl" color="bg-black">
                <header class="flex justify-between items-center text-gray-200 mb-4">
                    <h2 class="text-lg font-bold">
                        Bienvenido
                    </h2>
                    <small class="text-xs capitalize">
                        {{ Auth::user()->category->name }}
                        {{ Auth::user()->category->es_name }}
                    </small>
                </header>
                <h2 class="text-2xl font-bold text-white">
                    {{ Auth::user()->name }}
                </h2>
            </x-card>
            <!-- Interaction box -->
            {{-- @if (in_array(request()->segment(1), ['citizens', 'merchants', 'accountants'])) --}}
                <x-card class="col-span-full lg:col-span-9   p-4 rounded-xl">
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
            {{-- @endif --}}
            <!-- Services box -->
            <x-card class="col-span-full p-4 h-full rounded-xl">
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
                    @foreach (collect(\App\Data\Service::items())->filter(function($item) {
                        return in_array(Auth::user()->category->en_name, $item['users'] ?? []);
                    })->take(8) as $item)
                        <a href="{{ route($item['route']) }}"
                            class="flex flex-col space-y-1 col-span-6 md:col-span-4 lg:col-span-3 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
                            @if (isset($item['img']))
                                {{-- <div>
                                    <img src="{{ asset($item['img']) }}" class="rounded-t-xl" alt="">
                                </div> --}}
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
            <!-- Activity -->
            <x-card class="col-span-full">
                <header class="flex justify-between items-start mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Historial de actividades
                    </h2>
                    <div>
                        <a href="{{ route(request()->segment(1) . '.services.index') }}" class="text-xs text-gray-700">
                            Ver mas
                        </a>
                    </div>
                </header>
                @php
                    $activities = collect([
                        ['date' => '2023-10-01', 'model' => 'Comerciante', 'description' => 'Anadio el comerciante con el nombre Juan del Pueblo'],
                        ['date' => '2023-10-02', 'model' => 'Comercio', 'description' => 'Creacion de Comercio con el nombre de Comercio 1'],
                        ['date' => '2023-10-03', 'model' => 'Solicitud', 'description' => 'Solicitud de interaccion con el comerciante Juan del Pueblo'],
                        ['date' => '2023-10-04', 'model' => 'Factura', 'description' => 'Factura generada para el comerciante Juan del Pueblo'],
                        ['date' => '2023-10-05', 'model' => 'Patente', 'description' => 'Patente generada para el comerciante Juan del Pueblo'],
                    ]);
                @endphp
                <x-table>
                    <x-slot name="head">
                        <tr>
                            <th class="p-4 w-64">Fecha</th>
                            <th class="p-4 w-64">Modelo</th>
                            <th class="p-4">Descripcion</th>
                            <th class="p-4 w-24 text-right">Accion</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($activities as $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4">{{ $item['date'] }}</td>
                                <td class="p-4">{{ $item['model'] }}</td>
                                <td class="p-4">{{ $item['description'] }}</td>
                                <td class="flex justify-end items-center px-4 py-2">
                                    <x-icon-link href="#" icon="eye"></x-icon-link>
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>

</x-layouts.users>

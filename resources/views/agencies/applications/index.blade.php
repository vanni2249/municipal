<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
        <!-- Table -->
        <div class="col-span-full lg:col-span-full">
            <x-card class="h-full rounded-xl">
                <header class="flex justify-between items-center mb-4">
                   <h1 class="text-lg font-bold">Solicitudes</h1> 

                </header>
                <div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
                    <div class="">
                        <x-input placeholder="Buscar" class="w-full" />
                    </div>
                    <div class="flex space-x-2">
                        <div class="bg-gray-200 rounded-md p-1">
                            <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostra</span>
                            <select class="mx-2 rounded-md text-sm">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
                        </div>
                        <div>
                            <x-button variant="light">Filtro</x-button>
                        </div>
                    </div>
                </div>
                <x-table>
                    <x-slot name="head">
                        <tr>
                            <th class="p-4 w-1/4">Fecha</th>
                            <th class="p-4 w-1/4">Categoria</th>
                            <th class="p-4 w-1/4">Nombre</th>
                            <th class="p-4 w-1/4">Estado</th>
                            <th class="p-4 w-14">Accion</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @foreach (App\Data\Application::items() as $item)
                            
                        <tr class="border-t border-gray-200">
                            <td class="px-4 py-1">hace {{ $item['date'] }} dias</td>
                            <td class="px-4 py-1">{{ $item['category'] }}</td>
                            <td class="px-4 py-1">
                                <span>{{ $item['name'] }}</span>
                                <br>
                                <span>{{ $item['who'] }}</span>
                            </td>
                            <td class="px-4 py-1">
                                <x-badge color="{{ $item['status_color'] }}">{{ $item['status'] }}</x-badge>
                            </td>
                            <td class="px-4 py-1 flex justify-end">
                                <x-icon-link href="{{ route(request()->segment(1). '.applications.show', ['application' => 1]) }}" icon="eye" />
                            </td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </x-card>
        </div>
        <!-- Sidebar -->
        {{-- <div class="col-span-full lg:col-span-3">
            <x-card>
                <header class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
                    <div class="flex space-x-2">
                        <div class="bg-gray-200 rounded-md p-1">
                            <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Ano</span>
                            <select class="mx-2 rounded-md text-sm">
                                <option value="2020">2025</option>
                                <option value="2021">2024</option>
                                <option value="2022">2023</option>
                                <option value="2023">2022</option>
                            </select>
                        </div>
                        <div class="bg-gray-200 rounded-md p-1">
                            <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mes</span>
                            <select class="mx-2 rounded-md text-sm">
                                <option value="2020">Enero</option>
                                <option value="2021">Febrero</option>
                                <option value="2022">Marzo</option>
                                <option value="2023">Abril</option>
                            </select>
                        </div>
                    </div>
                </header>
                <div class="grid grid-cols-2 gap-2">
                    @php
                        $items = [
                            ['title' => 'Totales', 'value' => '1,234', 'span' => 1],
                            ['title' => 'Aprobados', 'value' => '123', 'span' => 1],
                            ['title' => 'Rechazados', 'value' => '1,500', 'span' => 1],
                            ['title' => 'Pediendes', 'value' => '500', 'span' => 1],
                        ];
                    @endphp
                    @foreach ($items as $item)
                    <div class="bg-gray-100 col-span-{{ $item['span'] }} rounded p-2">
                        <small class="text-gray-600 text-xs">{{ $item['title'] }}</small>
                        <div class="flex items-baseline space-x-1">
                            <h2 class="text-xl font-bold text-gray-900">
                                {{ $item['value'] }}
                            </h2>
                        </div>
                    </div>
                    @endforeach
                    <div class="bg-gray-100 col-span-2 rounded-md">
                        <header class=" p-2">
                            <h3 class="font-bold text-gray-800">Categorias mas solicitadas</h3>
                        </header>
                        @php
                            $interactions = [
                                ['title' => 'Solicitud de recogido de escombros', 'count' => 10],
                                ['title' => 'Solicitud uso facilidades deportivas', 'count' => 5],
                            ];
                        @endphp
                        <ul class="text-xs text-gray-600">
                            @foreach ($interactions as $interaction)
                            <li class="flex justify-between items-center border-t border-gray-200 p-2">
                                <span>{{ $interaction['title'] }}</span>
                                <span class="text-xs text-gray-500">{{ $interaction['count'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </x-card>
        </div> --}}
    </div>
</x-layouts.agencies>
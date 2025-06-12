<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Facilidades" />
        </header>
        <div class="col-span-full lg:col-span-9">
            <x-card class="h-full">
                <header class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
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
                </header>
                <x-table>
                    <x-slot name="head">
                        <tr>
                            <th class="p-2 w-1/5">Categoria</th>
                            <th class="p-2 w-1/5">Nombre</th>
                            <th class="p-2 w-1/5">Direccion</th>
                            <th class="p-2 w-1/5">Telefono</th>
                            <th class="p-2 w-1/5">Status</th>
                            <th class="p-2 w-14">Accion</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @foreach (App\Data\Facility::items() as $item)
                            
                        <tr class="border-t border-gray-200">
                            <td class="px-2 py-1">{{ $item['category'] }}</td>
                            <td class="px-2 py-1">{{ $item['name'] }}</td>
                            <td class="px-2 py-1">{{ $item['address'] }}</td>
                            <td class="px-2 py-1">{{ $item['phone'] }}</td>
                            <td class="px-2 py-1">
                                <x-badge color="{{ $item['status_color'] }}">{{ $item['status'] }}</x-badge>
                            </td>
                            <td class="px-2 py-1 flex">
                                <x-icon-link href="#" icon="eye" />
                            </td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-3">
            <x-card>
                <div class="grid grid-cols-2 gap-2">
                    @php
                        $items = [
                            ['title' => 'Totales', 'value' => '34', 'span' => 1],
                            ['title' => 'Deportivas', 'value' => '23', 'span' => 1],
                            ['title' => 'Actividades', 'value' => '11', 'span' => 1],
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
                        <header class="p-2">
                            <h3 class="font-bold text-gray-800">Facilidades mas usadas</h3>
                        </header>
                        @php
                            $interactions = [
                                ['title' => 'Estadio Municipal', 'count' => 10],
                                ['title' => 'Parque beisbol converce', 'count' => 5],
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
        </div>
    </div>
</x-layouts.agencies>

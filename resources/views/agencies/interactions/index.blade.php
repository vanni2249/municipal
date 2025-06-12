<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Interacciones" />
            <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-button size="sm" class="flex items-center space-x-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                        </x-button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route(request()->segment(1) . '.interactions.messages.index') }}">Mensajes</x-dropdown-link>
                        <x-dropdown-link href="{{ route(request()->segment(1) . '.interactions.calls.index') }}">Llamadas</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
        <!-- Table -->
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
                            <th class="p-2 w-1/6">Fecha</th>
                            <th class="p-2 w-1/6">Categoria</th>
                            <th class="p-2 w-1/6">Sub-Categoria</th>
                            <th class="p-2 w-1/6">Remitente</th>
                            <th class="p-2 w-1/6">Destinatario</th>
                            <th class="p-2 w-1/6">Status</th>
                            <th class="p-2 w-14">Accion</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @for ($i = 0; $i < 10; $i++)
                            
                        @foreach (App\Data\Interaction::items() as $item)
    
                        <tr class="border-t border-gray-200">
                            <td class="px-2 py-1">hace {{ $item['date'] }} dias</td>
                            <td class="px-2 py-1">{{ $item['category'] }}</td>
                            <td class="px-2 py-1">{{ $item['sub-category'] }}</td>
                            <td class="px-2 py-1">
                                <span>
                                    {{ $item['sender'] }}
                                </span>
                                <br>
                                <span class="text-xs text-gray-500">{{ $item['sender_category'] }}</span>
                            </td>
                            <td class="px-2 py-1">{{ $item['receiver'] }}</td>
                            <td class="px-2 py-1">
                                <x-badge color="{{ $item['status_color'] }}">{{ $item['status'] }}</x-badge>
                            </td>
                            <td class="px-2 py-1 flex">
                                @if ($item['category'] === 'Mensaje')
                                    <x-icon-link href="{{ route(request()->segment(1) . '.interactions.messages.show', ['message' => 1]) }}" icon="eye" />
                                @else
                                    <x-icon-link href="{{ route(request()->segment(1) . '.interactions.calls.show', ['call' => 1]) }}" icon="eye" />

                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endfor

                    </x-slot>
                </x-table>
            </x-card>
        </div>
        <!-- Widgets -->
        <div class="col-span-full lg:col-span-3">
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
                            ['title' => 'Totales', 'value' => '1,234', 'completed' => '1,230', 'percentage' => 30, 'span' => 1],
                            ['title' => 'Llamadas', 'value' => '123', 'completed' => '120', 'percentage' => 10, 'span' => 1],
                            ['title' => 'Mensajes', 'value' => '1,500', 'completed' => '1,200', 'percentage' => 60, 'span' => 1],
                        ];
                    @endphp
                    @foreach ($items as $item)
                    <div class="bg-gray-100 col-span-{{ $item['span'] }} rounded p-2">
                        <small class="text-gray-600 text-xs">{{ $item['title'] }}</small>
                        <div class="flex items-baseline space-x-1">
                            <h2 class="text-xl font-bold text-gray-900">
                                {{ $item['value'] }}
                            </h2>
                            <span class="text-xs font-bold text-gray-500">
                                <small>/ {{ $item['completed'] }}</small>
                            </span>
                        </div>
                        <div class="text-xs text-gray-500">
                            <span class="font-bold">{{ $item['percentage'] }}%</span>
                        </div>
                    </div>
                    @endforeach
                    <div class="bg-gray-100 col-span-2 rounded-md">
                        <header class=" p-2">
                            <h3 class="font-bold text-gray-800">Interacciones mas solicitadas</h3>
                        </header>
                        @php
                            $interactions = [
                                ['title' => 'Solicitud de informacion', 'count' => 10],
                                ['title' => 'Solicitud de cita', 'count' => 5],
                                ['title' => 'Solicitud de documento', 'count' => 3],
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

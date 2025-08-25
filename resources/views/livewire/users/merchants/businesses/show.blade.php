<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Business Description -->
                <x-card class="rounded-xl p-4">

                    <header class="flex flex-row space-x-2 justify-between items-center mb-2">
                        <h2 class="text-lg font-bold text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis">
                            {{ $business->name ?? '...' }}
                        </h2>
                        <div class="flex flex-row items-center space-x-2">
                            <x-icon-button @click="$dispatch('open-modal', 'more-detail')" icon="eye" />
                            <x-icon-link
                                href="{{ route('users.merchants.businesses.edit', ['merchant' => $business->register_id, 'business' => $business->id]) }}" />
                            <x-modal name="more-detail" title="Detalles del negocio">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach ($items as $item)
                                        <x-detail-item-modal label="{{ $item['label'] }}"
                                            value="{{ $item['value'] }}" />
                                    @endforeach
                                </div>
                            </x-modal>
                            <x-dropdown align="right">
                                <x-slot name="trigger">
                                    <x-icon-button icon="ellipsis-vertical" />
                                </x-slot>
                                <x-slot name="content">
                                    @forelse ($services as $service)
                                        <x-dropdown-link
                                            href="{{ route('users.merchants.businesses.actions.create', ['merchant' => $merchant, 'business' => $business->id, 'service' => $service->id]) }}">
                                            {{ $service->es_name }}
                                        </x-dropdown-link>
                                    @empty
                                    @endforelse

                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="flex flex-wrap gap-2">
                        <x-badge value="{{ $business->code }}" />
                        <x-badge value="{{ $business->businessCategory->es_name ?? '...' }}" />
                        <x-badge value="{{ $business->businessType->es_name ?? '...' }}" />
                    </div>
                </x-card>
                <!-- Documentos -->
                <x-card class="rounded-xl">
                    <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Documentos
                        </h2>
                    </header>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @for ($i = 0; $i < 2; $i++)
                            <a href="" class="bg-gray-100 hover:bg-gray-200 block w-full p-2 md:p-4 rounded-xl">
                                <header class="flex justify-between items-center">
                                    <small class=" text-gray-600">
                                        {{ rand(10000, 99999) }}
                                    </small>
                                    @switch($i)
                                        @case(0)
                                            <x-badge color="green">
                                                Activo
                                            </x-badge>
                                        @break

                                        @case(1)
                                            <x-badge color="red">
                                                Vencida
                                            </x-badge>
                                        @break

                                        @default
                                    @endswitch
                                </header>
                                <ul class="text-sm pt-2">
                                    <li class="text-gray-800 text-md font-bold ">
                                        @switch($i)
                                            @case(1)
                                                Patente Temporera
                                            @break

                                            @case(0)
                                                Patente Oficial
                                            @break

                                            @default
                                        @endswitch
                                    </li>
                                    <li class="text-xs text-gray-600">
                                        @if ($i == 0)
                                            01 de enero de 2025 &bull; 31 de enero de 2025
                                        @else
                                            01 de febrero de 2024 &bull; 31 de enero de 2024
                                        @endif
                                    </li>
                                </ul>
                            </a>
                        @endfor
                    </div>
                </x-card>
                <!-- Activity -->
                <x-card class="col-span-full">
                    <header class="flex justify-between items-start mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Historial de actividades del negocio
                        </h2>
                        <div>
                            <a href="{{ route(request()->segment(1) . '.services.index') }}"
                                class="text-xs text-gray-700">
                                Ver mas
                            </a>
                        </div>
                    </header>
                    @php
                        $activities = collect([
                            [
                                'date' => '2023-10-01',
                                'model' => 'Comerciante',
                                'description' => 'Anadio el comerciante con el
                    nombre
                    Juan del Pueblo',
                            ],
                            [
                                'date' => '2023-10-02',
                                'model' => 'Comercio',
                                'description' => 'Creacion de Comercio con el nombre
                    de
                    Comercio 1',
                            ],
                            [
                                'date' => '2023-10-03',
                                'model' => 'Solicitud',
                                'description' => 'Solicitud de interaccion con el
                    comerciante Juan del Pueblo',
                            ],
                            [
                                'date' => '2023-10-04',
                                'model' => 'Factura',
                                'description' => 'Factura generada para el
                    comerciante
                    Juan del Pueblo',
                            ],
                            [
                                'date' => '2023-10-05',
                                'model' => 'Patente',
                                'description' => 'Patente generada para el
                    comerciante
                    Juan del Pueblo',
                            ],
                            [
                                'date' => '2023-10-03',
                                'model' => 'Solicitud',
                                'description' => 'Solicitud de interaccion con el
                    comerciante Juan del Pueblo',
                            ],
                            [
                                'date' => '2023-10-04',
                                'model' => 'Factura',
                                'description' => 'Factura generada para el
                    comerciante
                    Juan del Pueblo',
                            ],
                            [
                                'date' => '2023-10-05',
                                'model' => 'Patente',
                                'description' => 'Patente generada para el
                    comerciante
                    Juan del Pueblo',
                            ],
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
    </div>
</div>

<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Comerciante -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comerciante
                        </h2>
                        <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-button size="sm" variant="light" class="flex items-center space-x-2">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                                    </x-button>
                                </x-slot>
                                 <x-slot name="content">
                                    <x-dropdown-link href="">
                                        Editar comerciante
                                    </x-dropdown-link>
                                    <x-dropdown-link href="{{ route('accountants.merchants.businesses.create', ['merchant' => 1]) }}">
                                        Crear nuevo comercio
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Nombre del comerciante',
                                    'value' => 'Jose A Colon Santiago',
                                ],
                                [
                                    'key' => 'Numero de comerciante',
                                    'value' => '51ece8',
                                ],
                                [
                                    'key' => 'Registro de comerciante',
                                    'value' => '852147963',
                                ],
                                [
                                    'key' => 'Direccion Postal',
                                    'value' => '3213 Calle Principal, San Juan, PR',
                                ],
                                [
                                    'key' => 'Direccion residencial',
                                    'value' => 'N/A',
                                ],
                                [
                                    'key' => 'Numero de telefono',
                                    'value' => '678739028',
                                ],
                                [
                                    'key' => 'Estado',
                                    'value' => 'No',
                                ],
                            ];
                        @endphp
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            @foreach ($items as $item)
                                <ul>
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
                <!-- Comercios -->
                <x-card class="rounded-xl">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comercios
                        </h2>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 2; $i++) 
                        <a href="{{ route('accountants.merchants.businesses.show', ['merchant' => 1, 'business' => 2]) }}" class="bg-gray-100 hover:bg-gray-200 block w-full p-2 md:p-4 rounded-xl">
                            <header class="flex justify-between">
                                <small class="text-gray-600">
                                    Venta por mayorista
                                </small>
                                <div>
                                    @if ($i == 0)
                                    <x-badge color="green">
                                        Activo
                                    </x-badge>
                                    @else
                                    <x-badge color="red">
                                        Vencida
                                    </x-badge>
                                    @endif
                                </div>
                            </header>
                            <div>
                                <ul class="text-sm py-1">
                                    <li class="text-gray-800 text-md font-bold ">
                                        Farmacia Walgreens LLC
                                    </li>
                                    <li class="text-xs text-gray-600">{{ Str::random(5) . rand(11, 20) }}</li>
                                </ul>
                            </div>
                        </a>
                        @endfor
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>
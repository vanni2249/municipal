<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Renew Patent -->
                <x-card color="bg-red-300" class="rounded-xl">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0">
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">
                                Renovar patente
                            </h2>
                            <p class="text-sm text-gray-700">
                                La patente vence el 31 de enero de 2025, por favor renovarla antes de esa fecha.
                            </p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <x-button href="#" class="bg-red-500 w-full hover:bg-red-600 text-white">
                               Renovar
                            </x-button>
                        </div>
                    </header>
                </x-card>
                <!-- Print Patent -->
                <x-card color="bg-blue-300" class="rounded-xl">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0">
                        <h2 class="text-lg font-bold text-gray-900">
                            Imprimir o descargar la patente
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-button href="#" class="bg-blue-500 w-full hover:bg-blue-600 text-white">
                               Imprimir
                            </x-button>
                        </div>
                    </header>
                </x-card>
                <!-- Info patent -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Informacion de la Patente
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Tipo de patente',
                                    'value' => 'Oficial',
                                ],
                                [
                                    'key' => 'Fecha de emision',
                                    'value' => '01 de febrero de 2024',
                                ],
                                [
                                    'key' => 'Fecha de vencimiento',
                                    'value' => '31 de enero de 2025',
                                ],
                                [
                                    'key' => 'Numero de patente',
                                    'value' => Str::random(5) . rand(11, 20),
                                ],
                                [
                                    'key' => 'Estado',
                                    'value' => 'Activo',
                                ],
                                [
                                    'key' => 'Fecha de pago',
                                    'value' => '01 de febrero de 2024',
                                ],
                                [
                                    'key' => 'Monto pagado',
                                    'value' => '$' . number_format(rand(1000, 5000), 2),
                                ],
                                [
                                    'key' => 'Comercio',
                                    'value' => 'Farmacia ABC',
                                ],
                                [
                                    'key' => 'Domicilio',
                                    'value' => 'Calle Falsa 123, Ciudad, Pais',
                                ],
                                [
                                    'key' => 'Telefono',
                                    'value' => '+1234567890',
                                ],
                                [
                                    'key' => 'Tipo de comercio',
                                    'value' => 'Venta por mayorista',
                                ],
                                [
                                    'key' => 'Categoria',
                                    'value' => 'Farmacia',
                                ],
                                [
                                    'key' => 'Permiso de construccion',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Permiso de uso',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Patente temporaria',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Patente oficial',
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
                <!-- Periods -->
                <x-card class="rounded-xl">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Periodos
                        </h2>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 2; $i++) 
                        <a href="{{  route('accountants.merchants.businesses.patents.periods.show', ['merchant' => 1, 'business' => 1, 'patent' => 1, 'period' => 1]) }}" class="bg-gray-100 hover:bg-gray-200 block w-full p-2 md:p-4 rounded-xl">
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
                                            01/01/2025 &bull; 31/05/2025
                                        @break
                                        
                                        @case(0)
                                            01 de febrero de 2024 &bull; 31 de enero de 2024
                                        @break

                                        @default
                                    @endswitch
                                </li>
                                <li class="text-xs text-gray-600">
                                    @if ($i == 0)
                                    2 &bull; $560.65
                                    @else
                                     1 &bull; $560.65
                                    @endif
                                </li>
                            </ul>
                        </a>
                        @endfor
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>
<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Ruta
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Tipo de ruta',
                                    'value' => 'Ruta de inspeccion',
                                ],
                                [
                                    'key' => 'Dia de la ruta',
                                    'value' => '12/23/2025',
                                ],

                                [
                                    'key' => 'Paradas',
                                    'value' => '1',
                                ],
                                [
                                    'key' => 'Estado de la ruta',
                                    'value' => 'En proceso de evaluacion',
                                ],
                                [
                                    'key' => 'Fecha de creacion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Persona asignado',
                                    'value' => 'Juan Perez',
                                ],
                                [
                                    'key' => 'Fecha de ultima actualizacion',         
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Observaciones',
                                    'value' => 'Ninguna',
                                ],
                            ];
                        @endphp
                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($items as $item)
                                <ul class="col-span-4 md:col-span-2 lg:col-span-1">
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Paradas
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items3 = [
                                [
                                    'key' => 'Parada 1',
                                    'value' => 'Parada 1',
                                ],
                                [
                                    'key' => 'Parada 2',
                                    'value' => 'Parada 2',
                                ],
                                [
                                    'key' => 'Parada 3',
                                    'value' => 'Parada 3',
                                ],
                            ];
                        @endphp
                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($items3 as $item)
                                <ul class="col-span-4 md:col-span-2 lg:col-span-1">
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-span-full">
                <x-card class="rounded-xl">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comentarios
                        </h2>
                    </header>
                    <div class="col-span-full">
                        <p class="text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus suscipit non perferendis ab deserunt a iste laboriosam, vero perspiciatis sapiente quidem excepturi corporis, minus alias illum dicta debitis nulla. Optio.
                        </p>
                    </div>
                </x-card>
            </div>
        </div>
</x-layouts.agencies>

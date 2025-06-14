<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Inspeccion de renta
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Tipo de inspeccion',
                                    'value' => 'Inspeccion de renta',
                                ],
                                [
                                    'key' => 'Lugar rentado',
                                    'value' => 'Usos multiples de Converse',
                                ],

                                [
                                    'key' => 'Ruta asignada',
                                    'value' => 'Ruta 1',
                                ],
                                [
                                    'key' => 'Estado de la ruta',
                                    'value' => 'En proceso de evaluacion',
                                ],
                                [
                                    'key' => 'Fecha de inspeccion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Inspector antes del evento',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Fecha de inspeccion',         
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Inspector despues del evento',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Fecha de inspeccion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Observaciones',
                                    'value' => 'Ninguna',
                                ],
                                [
                                    'key' => 'Inspector despues del evento',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Fecha de inspeccion',
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
            {{-- <div class="col-span-full lg:col-span-4">
            </div> --}}
        </div>
</x-layouts.agencies>

<x-layouts.agencies>
        <div class="grid grid-cols-12 gap-4 px-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Facilidad
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Numero de facilidad',
                                    'value' => 'FAC-001',
                                ],
                                [
                                    'key' => 'Localizacion',
                                    'value' => 'Estadio Municipal',
                                ],
                                [
                                    'key' => 'Telefono',
                                    'value' => '+1 234 567 8900',
                                ],
                                [
                                    'key' => 'Encargado',
                                    'value' => 'Juan Perez',
                                ],
                                [
                                    'key' => 'Direccion',
                                    'value' => '123 Calle Principal, Ciudad, Pais',
                                ],
                                [
                                    'key' => 'Tipo de facilidad',
                                    'value' => 'Deportiva',
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
        </div>
</x-layouts.agencies>

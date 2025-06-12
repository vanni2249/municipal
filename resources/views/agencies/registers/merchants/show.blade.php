<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Comerciante" />
        </header>
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <header class="flex justify-between items-center">
                    <h3 class="font-bold text-gray-800">Detalles del Comerciante</h3>
                </header>
                @php
                    $items = [
                        ['label' => 'Nombre', 'value' => 'Geovanni Colon Barrios'],
                        ['label' => 'Email', 'value' => 'vanni2249@gmail.com'],
                        ['label' => 'Telefono', 'value' => '210-665-6749'],
                        ['label' => 'Estado', 'value' => '<x-badge color="green" class="capitalize">Activo</x-badge>'],
                        ['label' => 'ID de Ciudadano', 'value' => 'xrl1e4'],
                        ['label' => 'Tipo de Ciudadano', 'value' => 'Ciudadano'],
                        ['label' => 'Fecha de nacimiento', 'value' => '01/01/1990'],
                        ['label' => 'Genero', 'value' => 'Masculino'],
                        ['label' => 'Fecha de registro', 'value' => '12/08/2026'],
                        ['label' => 'Ultima Actualizacion', 'value' => '12/08/2026'],
                        ['label' => 'Ultima conexion', 'value' => 'hace 10 dias'],
                        ['label' => 'Estatus de verificacion', 'value' => 'Verificado'],
                    ];
                @endphp
                <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4 py-4">
                    @foreach ($items as $item)
                    <li class="col-span-4 md:col-span-2 lg:col-span-1">
                        <small class="font-bold">{{ $item['label'] }}</small>
                        <br>
                        <span>
                            {!! $item['value'] !!}
                        </span>
                    </li>
                        
                    @endforeach
                </ul>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-full">
            <x-card>
            </x-card>
        </div>
    </div>
</x-layouts.agencies>
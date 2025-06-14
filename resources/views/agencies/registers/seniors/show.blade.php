<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
        <div class="col-span-full lg:col-span-full">
            <x-card class="rounded-xl">
                <header class="flex justify-between items-center">
                    <h3 class="font-bold text-lg text-gray-800">Detalles de la Persona Mayor</h3>
                </header>
                @php
                    $items = [
                        ['label' => 'Nombre', 'value' => 'Geovanni Colon Barrios'],
                        ['label' => 'Nombre de contacto', 'value' => 'Geovanni Colon Barrios'],
                        ['label' => 'Email de contacto', 'value' => 'vanni2249@gmail.com'],
                        ['label' => 'Telefono de contacto', 'value' => '210-665-6749'],
                        ['label' => 'Estado', 'value' => '<x-badge color="green" class="capitalize">Activo</x-badge>'],
                        ['label' => 'ID de Persona Mayor', 'value' => 'xrl1e4'],
                        ['label' => 'Fecha de nacimiento', 'value' => '01/01/1990'],
                        ['label' => 'Genero', 'value' => 'Masculino'],
                        ['label' => 'Fecha de registro', 'value' => '12/08/2026'],
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
        {{-- <div class="col-span-full lg:col-span-full">
            <x-card>
            </x-card>
        </div> --}}
    </div>
</x-layouts.agencies>
<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
        <div class="col-span-full lg:col-span-full">
            <x-card class="rounded-xl">
                <header class="flex justify-between items-center">
                    <h3 class="font-bold text-lg text-gray-800">Detalles del Suplidor</h3>
                </header>
                @php
                    $items = [
                        ['label' => 'Nombre', 'value' => 'Geovanni Colon Barrios'],
                        ['label' => 'Email', 'value' => 'vanni2249@gmail.com'],
                        ['label' => 'Telefono', 'value' => '210-665-6749'],
                        ['label' => 'ID de Suplidor', 'value' => 'xrl1e4'],
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
        {{-- <div class="col-span-full lg:col-span-full">
            <x-card>
            </x-card>
        </div> --}}
    </div>
</x-layouts.agencies>
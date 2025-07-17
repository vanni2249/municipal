<div>
    <x-card class="rounded-xl max-h-96 overflow-hidden  ">
        <header class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg text-gray-800">Detalles del comercio</h3>
            @switch(request()->segment(3))
                @case('merchants')
                    {{-- <x-icon-link
                        href="{{ route(request()->segment(1) . '.registers.merchants.edit', ['merchant' => 1]) }}"></x-icon-link> --}}
                @break
            @endswitch
        </header>
        @php
            $items = [
                ['label' => 'Nombre', 'value' => 'Farmacia Walgreens LLC'],
                ['label' => 'Code', 'value' => 'WAL-123456'],
                ['label' => 'Comerciante', 'value' => 'Geovanni Colon Barrios'],
                ['label' => 'Email', 'value' => 'vanni2249@gmail.com'],
                ['label' => 'Telefono', 'value' => '210-665-6749'],
                ['label' => 'Estado', 'value' => '<x-badge color="green" class="capitalize">Activo</x-badge>'],
                ['label' => 'Fecha de registro', 'value' => '12/08/2026'],
                ['label' => 'Ultima Actualizacion', 'value' => '12/08/2026'],
                ['label' => 'Ultima conexion', 'value' => 'hace 10 dias'],
                ['label' => 'Estatus de verificacion', 'value' => 'Verificado'],
            ];
        @endphp
        <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4">
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

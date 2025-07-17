@php
    $collection = collect([
        [
            'title' => 'Interacciones',
            'value' => '1,234',
            'completed' => '1,230',
            'percentage' => 30,
            'percentage_key' => 'interacciones',
            'span' => 'full',
        ],
        [
            'title' => 'Registros',
            'value' => '123',
            'completed' => '115',
            'percentage' => 10,
            'percentage_key' => 'registraciones',
            'span' => 1,
        ],
        [
            'title' => 'Solicitudes',
            'value' => '56',
            'completed' => '56',
            'percentage' => 100,
            'percentage_key' => 'solicitudes',
            'span' => 1,
        ],
        [
            'title' => 'Radicaciones',
            'value' => '256',
            'completed' => '225',
            'percentage' => 86,
            'percentage_key' => 'radicaciones',
            'span' => 'full',
        ],
        [
            'title' => 'Rentas',
            'value' => '12',
            'completed' => '12',
            'percentage' => 100,
            'percentage_key' => 'rentas',
            'span' => 1,
        ],
        [
            'title' => 'Inspecciones',
            'value' => '148',
            'completed' => '144',
            'percentage' => 96,
            'percentage_key' => 'inspecciones',
            'span' => 1,
        ],
        [
            'title' => 'Rutas',
            'value' => '58',
            'completed' => '54',
            'percentage' => 93,
            'percentage_key' => 'rutas',
            'span' => 1,
        ],
        [
            'title' => 'Conexiones',
            'value' => '58',
            'completed' => '54',
            'percentage' => 93,
            'percentage_key' => 'rutas',
            'span' => 1,
        ],
    ]);
@endphp

@foreach ($collection as $item)
        <x-card class="col-span-6 md:col-span-4 xl:col-span-3 rounded-xl">
            <div class="flex justify-between items-center">
                <div>
                    <small class="text-gray-800">
                        {{ $item['title'] }}
                    </small>
                    <div class="flex items-baseline space-x-1">
                        <h2 class="text-lg font-bold text-gray-900">
                            {{ $item['value'] }}
                        </h2>
                        <span class="text-xs font-bold text-gray-500">
                            <small>/
                                {{ $item['completed'] }}
                            </small>
                        </span>
                    </div>
                    <div class="text-xs text-gray-500 line-clamp-1">
                        <span class="font-bold">
                            {{ $item['percentage'] }}%
                        </span> de {{ $item['percentage_key'] }}
                    </div>
                </div>
                <div>
                    @if ($item['percentage'] >= 95)
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-check text-green-400">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-down text-red-400">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 15l-4 4" />
                            <path d="M8 15l4 4" />
                        </svg>
                    @endif
                </div>
            </div>
        </x-card>
@endforeach

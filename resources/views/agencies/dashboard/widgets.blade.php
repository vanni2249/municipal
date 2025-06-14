@php
    $collection = collect([
        [
            'agencies' => [
                'it-office',
                'mayor-office',
                'finance-department'
            ],
            'title' => 'Interacciones',
            'value' => '1,234',
            'completed' => '1,230',
            'percentage' => 30,
            'percentage_key' => 'interacciones',
            'span' => 'full',
        ],
        [
            'agencies' => [
                'it-office',
                'mayors-office',
                'finance-department',
                'citizen-help-office'
            ],
            'title' => 'Registros',
            'value' => '123',
            'completed' => '115',
            'percentage' => 10,
            'percentage_key' => 'registraciones',
            'span' => 1,
        ],
        [
            'agencies' => [
                'it-office',
                'mayors-office',
                'recreation-sports-department'
            ],
            'title' => 'Solicitudes',
            'value' => '56',
            'completed' => '56',
            'percentage' => 100,
            'percentage_key' => 'solicitudes',
            'span' => 1,
        ],
        [
            'agencies' => [
                'it-office',
                'mayors-office',
                'finance-department',
                'public-works-department'
            ],
            'title' => 'Radicaciones',
            'value' => '256',
            'completed' => '225',
            'percentage' => 86,
            'percentage_key' => 'radicaciones',
            'span' => 'full',
        ],
        [
            'agencies' => [
                'it-office',
                'mayors-office',
                'finance-department',
            ],
            'title' => 'Rentas',
            'value' => '12',
            'completed' => '12',
            'percentage' => 100,
            'percentage_key' => 'rentas',
            'span' => 1,
        ],
        [
            'agencies' => [
                'it-office',
                'mayors-office',
                'finance-department',
                'public-works-department',
                'recreation-sports-department',
                'citizen-help-office'
            ],
            'title' => 'Inspecciones',
            'value' => '148',
            'completed' => '144',
            'percentage' => 96,
            'percentage_key' => 'inspecciones',
            'span' => 1,
        ],
        [
            'agencies' => [
                'it-office',
                'mayors-office',
                'finance-department',
                'public-works-department',
                'recreation-sports-department',
                'citizen-help-office'
            ],
            'title' => 'Rutas',
            'value' => '58',
            'completed' => '54',
            'percentage' => 93,
            'percentage_key' => 'rutas',
            'span' => 1,
        ],
    ]);
@endphp

@foreach ($collection as $item)
   @if (in_array(request()->segment(1), $item['agencies']))
    <x-card class="flex-shrink-0 w-48 md:w-56 rounded-xl">
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
    </x-card>
    @endif 
@endforeach
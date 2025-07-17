@php
$collection = [
    [
        'agencies' => [
            'it-office',
            'mayors-office',
            'finance-department'
        ],
        'title' => 'Interacciones',
        'route' => request()->segment(1) . '.interactions.index',
        'items' => [
            collect(App\Data\Interaction::items())->map(function ($item) {
                return [
                    'category' => $item['category'],
                    'sub-category' => $item['sub-category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
    ],
    [
        'agencies' => [
            'it-office',
            'mayors-office',
            'finance-department',
            'citizen-help-office'
        ],
        'title' => 'Registros',
        'route' => request()->segment(1).'.registers.index',
        'items' => [
            collect(App\Data\Register::items())->map(function ($item) {
                return [
                    'category' => $item['connection'],
                    'sub-category' => $item['category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
    ],
    [
        'agencies' => [
            'it-office',
            'mayors-office',
            'public-works-department',
            'recreation-sports-department'
        ],
        'title' => 'Solicitudes',
        'route' => request()->segment(1).'.applications.index',
        'items' => [
            collect(App\Data\Application::items())->map(function ($item) {
                return [
                    'category' => $item['who'],
                    'sub-category' => $item['category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
    ],
    [
        'agencies' => [
            'it-office',
            'mayors-office',
            'finance-department'
        ],
        'title' => 'Radicación',
        'route' => request()->segment(1).'.settlements.index',
        'items' => [
            collect(App\Data\Settlement::items())->map(function ($item) {
                return [
                    'category' => $item['who'],
                    'sub-category' => $item['category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
    ],
    [
        'agencies' => [
            'it-office',
            'mayors-office',
            'finance-department'
        ],
        'title' => 'Rentas',
        'route' => request()->segment(1).'.rents.index',
        'items' => [
            collect(App\Data\Rent::items())->map(function ($item) {
                return [
                    'category' => $item['who'],
                    'sub-category' => $item['category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
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
        'route' => request()->segment(1).'.inspections.index',
        'items' => [
            collect(App\Data\Inspection::items())->map(function ($item) {
                return [
                    'category' => $item['number'],
                    'sub-category' => $item['category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
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
        'route' => request()->segment(1).'.routes.index',
        'items' => [
            collect(App\Data\Route::items())->map(function ($item) {
                return [
                    'category' => $item['number'],
                    'sub-category' => $item['category'],
                    'date' => $item['date'],
                    'status' => $item['status'],
                    'status_color' => $item['status_color'],
                ];
            })->take(5)->toArray(),
        ],
    ],
];
@endphp
@foreach ($collection as $item)
    @if (in_array(request()->segment(1), $item['agencies']))
    <x-card class="col-span-12 md:col-span-6 lg:col-span-3">
        <header class="flex justify-between items-center">
            <h2 class="text-sm text-gray-800 font-bold">{{ $item['title'] }}</h2>
            <div>
                <a href="{{ route($item['route']) }}" class="text-xs text-gray-500">Ver mas</a>
            </div>
        </header>
        <ul class="py-4 space-y-2">
            @if (isset($item['items']))
                @foreach ($item['items']['0'] as $subItem)
                    <li>
                        <a href="#" class="flex justify-between items-start bg-gray-100 p-2 rounded">
                            <div class="grow flex flex-col items-start">
                                <small class="text-xs text-gray-600 font-bold">{{ $subItem['category'] }}</small>
                                <span class="text-sm text-gray-900 font-bold line-clamp-1">{{ $subItem['sub-category'] }}</span>
                                <span class="text-xs text-gray-500">hace {{ $subItem['date'] }} días</span>
                            </div>
                            <div class="flex-shrink-0">
                                <x-badge color="{{ $subItem['status_color'] }}">{{ $subItem['status'] }}</x-badge>
                            </div>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </x-card>

    @endif
@endforeach
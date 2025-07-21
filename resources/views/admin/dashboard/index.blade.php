<x-layouts.admin>
    <div class=" space-y-4">
        <!-- Dashboard Widgets -->
        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-full grid grid-cols-12 gap-2 px-4">
                @include('admin.dashboard.widgets')
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-12 gap-2 px-4">
        @php
            $applications = [
                [
                    'title' => 'Solicitud recogido de escombro',
                    'days' => '4',
                    'color' => 'blue',
                    'status' => 'En proceso',
                ],
                [
                    'title' => 'Solicitud de facilidades deportivas',
                    'days' => '2',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
                [
                    'title' => 'Solicitud de permiso de construcción',
                    'days' => '1',
                    'color' => 'yellow',
                    'status' => 'Pendiente',
                ],
                [
                    'title' => 'Solicitud de licencia comercial',
                    'days' => '3',
                    'color' => 'red',
                    'status' => 'Rechazado',
                ],
                [
                    'title' => 'Solicitud de asistencia social',
                    'days' => '5',
                    'color' => 'purple',
                    'status' => 'En revisión',
                ],
            ];
        @endphp
            <x-card class="col-span-12 lg:col-span-6 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Solicitudes recientes
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @foreach ($applications as $item)
                    <div class="bg-gray-100 p-2 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-sm">
                                {{ $item['title'] }}
                            </span>
                            <br>
                            <small class="text-xs text-gray-500">
                                hace {{ $item['days'] }} dias
                            </small>
                        </div>
                        <div>
                            <x-badge color="{{ $item['color'] }}" class="whitespace-nowrap" label="" value="">
                                {{ $item['status'] }}
                            </x-badge>
                        </div>
                    </div>
                @endforeach
            </x-card>
        @php
            $applications = [
                [
                    'title' => 'Radicacion de patente provincial',
                    'days' => '4',
                    'color' => 'blue',
                    'status' => 'En proceso',
                ],
                [
                    'title' => 'Radicacion de patente oficial',
                    'days' => '2',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
                [
                    'title' => 'Radicacion de permiso de construccion',
                    'days' => '1',
                    'color' => 'yellow',
                    'status' => 'Pendiente',
                ],
                [
                    'title' => 'Radicacion de licencia comercial',
                    'days' => '3',
                    'color' => 'red',
                    'status' => 'Rechazado',
                ],
                [
                    'title' => 'Radicacion de asistencia social',
                    'days' => '5',
                    'color' => 'purple',
                    'status' => 'En revisión',
                ],
            ];
        @endphp
            <x-card class="col-span-12 lg:col-span-6 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Radicaciones recientes
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @foreach ($applications as $item)
                    <div class="bg-gray-100 p-2 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-sm">
                                {{ $item['title'] }}
                            </span>
                            <br>
                            <small class="text-xs text-gray-500">
                                hace {{ $item['days'] }} dias
                            </small>
                        </div>
                        <div>
                            <x-badge color="{{ $item['color'] }}" class="whitespace-nowrap" label="" value="">
                                {{ $item['status'] }}
                            </x-badge>
                        </div>
                    </div>
                @endforeach
            </x-card>
        @php
            $applications = [
                [
                    'title' => 'Renta uso multiples norte',
                    'days' => '4',
                    'color' => 'blue',
                    'status' => 'En proceso',
                ],
                [
                    'title' => 'Renta uso multiples sureste',
                    'days' => '2',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
                [
                    'title' => 'Renta uso multiples oeste',
                    'days' => '1',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
                [
                    'title' => 'Renta uso multiples sur',
                    'days' => '3',
                    'color' => 'red',
                    'status' => 'Rechazado',
                ],
                [
                    'title' => 'Renta uso multiples este',
                    'days' => '5',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
            ];
        @endphp
            <x-card class="col-span-12 lg:col-span-6 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Rentas recientes
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @foreach ($applications as $item)
                    <div class="bg-gray-100 p-2 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-sm">
                                {{ $item['title'] }}
                            </span>
                            <br>
                            <small class="text-xs text-gray-500">
                                hace {{ $item['days'] }} dias
                            </small>
                        </div>
                        <div>
                            <x-badge color="{{ $item['color'] }}" class="whitespace-nowrap" label="" value="">
                                {{ $item['status'] }}
                            </x-badge>
                        </div>
                    </div>
                @endforeach
            </x-card>
        @php
            $applications = [
                [
                    'title' => 'Fatura de patente provincial',
                    'days' => '4',
                    'color' => 'blue',
                    'status' => 'En proceso',
                ],
                [
                    'title' => 'Factura de patente oficial',
                    'days' => '2',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
                [
                    'title' => 'Factura de permiso de construccion',
                    'days' => '1',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
                [
                    'title' => 'Factura de renta uso multiples',
                    'days' => '3',
                    'color' => 'red',
                    'status' => 'Cancelado',
                ],
                [
                    'title' => 'Factura de recogido de basura',
                    'days' => '5',
                    'color' => 'green',
                    'status' => 'Completado',
                ],
            ];
        @endphp
            <x-card class="col-span-12 lg:col-span-6 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Facturas recientes
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @foreach ($applications as $item)
                    <div class="bg-gray-100 p-2 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-sm">
                                {{ $item['title'] }}
                            </span>
                            <br>
                            <small class="text-xs text-gray-500">
                                hace {{ $item['days'] }} dias
                            </small>
                        </div>
                        <div>
                            <x-badge color="{{ $item['color'] }}" class="whitespace-nowrap" label="" value="">
                                {{ $item['status'] }}
                            </x-badge>
                        </div>
                    </div>
                @endforeach
            </x-card>
        </div>

        <!-- Additional Cards -->
        <div class="grid grid-cols-12 gap-2 px-4">
            <x-card class="col-span-12 md:col-span-6 lg:col-span-3 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Usuarios
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @php
                $users = [
                    [
                        'title' => 'Ciudadanos',
                        'count' => rand(100, 500),
                    ],
                    [
                        'title' => 'Comerciantes',
                        'count' => rand(100, 500),
                    ],
                    [
                        'title' => 'Contables',
                        'count' => rand(100, 500),
                    ],
                ];
                @endphp
                @foreach ($users as $item)
                    <div class="bg-gray-100 p-2 text-sm rounded-xl flex items-center justify-between">
                        <span>
                            {{ $item['title'] }}
                        </span>
                        <span class="font-bold text-gray-800">
                            {{ $item['count'] }}
                        </span>
                    </div>
                @endforeach
            </x-card>
            <x-card class="col-span-12 md:col-span-6 lg:col-span-3 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Registos
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @php
                $register = [
                    [
                        'title' => 'Mayor de edad',
                        'count' => rand(100, 500),
                    ],
                    [
                        'title' => 'Encamados',
                        'count' => rand(100, 500),
                    ],
                    [
                        'title' => 'Discapacitados',
                        'count' => rand(100, 500),
                    ],
                    [
                        'title' => 'Veteranos',
                        'count' => rand(100, 500),
                    ],
                ];
                @endphp
                @foreach ($register as $item)
                    <div class="bg-gray-100 p-2 text-sm rounded-xl flex items-center justify-between">
                        <span>
                            {{ $item['title'] }}
                        </span>
                        <span class="font-bold text-gray-800">
                            {{ $item['count'] }}
                        </span>
                    </div>
                @endforeach
            </x-card>
            <x-card class="col-span-12 md:col-span-6 lg:col-span-3 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Solicitudes
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @php
                    
                    $applications = [
                        [
                            'title' => 'Recogido de escombro',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Recogido de basura',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Facilidades deportivas',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Facilidades de actividad',
                            'count' => rand(100, 500),
                        ],
                    ];
                @endphp
                @foreach ($applications as $item)
                    <div class="bg-gray-100 p-2 text-sm rounded-xl flex items-center justify-between">
                        <span>
                            {{ $item['title'] }}
                        </span>
                        <span class="font-bold text-gray-800">
                            {{ $item['count'] }}
                        </span>
                    </div>
                @endforeach
            </x-card>
            <x-card class="col-span-12 md:col-span-6 lg:col-span-3 space-y-2 rounded-xl">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Radicaciones
                    </h2>
                    <a href="#" class="text-xs">Ver mas</a>
                </header>
                @php

                    $settlements = [
                        [
                            'title' => 'Permiso de construccion',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Permiso de uso',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Patente provincial',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Patente oficial',
                            'count' => rand(100, 500),
                        ],
                        [
                            'title' => 'Renovacion de patente',
                            'count' => rand(100, 500),
                        ],
                    ];
                @endphp
                @foreach ($settlements as $item)
                    <div class="bg-gray-100 p-2 text-sm rounded-xl flex items-center justify-between">
                        <span>
                            {{ $item['title'] }}
                        </span>
                        <span class="font-bold text-gray-800">
                            {{ $item['count'] }}
                        </span>
                    </div>
                @endforeach
            </x-card>
        </div>
    </div>
</x-layouts.admin>

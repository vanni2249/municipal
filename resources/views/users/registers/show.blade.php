<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-6">
                        <h2 class="text-lg font-bold text-gray-600">
                           Registro
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Fecha de creacion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Persona con impedimento',
                                    'value' => 'Jose Perez Gomez',
                                ],
                                [
                                    'key' => 'Estado del registro',
                                    'value' => 'En proceso de evaluacion',
                                ]
                            ];
                        @endphp
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
                            @foreach ($items as $item)
                                <ul class="py-1">
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>
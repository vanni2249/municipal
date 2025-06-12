<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Renta
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Lugar rentado',
                                    'value' => 'Usos multiples de Converse',
                                ],
                                [
                                    'key' => 'Estado de la solicitud',
                                    'value' => 'En proceso de evaluacion',
                                ],
                                [
                                    'key' => 'Fecha y hora de comienzo evento',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Fecha y hora de culminacion evento',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Inspector antes del evento',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Fecha de inspeccion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Observaciones',
                                    'value' => 'Ninguna',
                                ],
                                [
                                    'key' => 'Inspector despues del evento',
                                    'value' => 'No',
                                ],
                                [
                                    'key' => 'Fecha de inspeccion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Observaciones',
                                    'value' => 'Ninguna',
                                ],
                                [
                                    'key' => 'Costo estimado',
                                    'value' => '$100.00',
                                ],
                                [
                                    'key' => 'Forma de pago',
                                    'value' => 'Efectivo',
                                ],
                                [
                                    'key' => 'Nombre del solicitante',
                                    'value' => 'Juan Perez',
                                ],
                                [
                                    'key' => 'Telefono del solicitante',
                                    'value' => '+1 234 567 8900',
                                ],
                                [
                                    'key' => 'Nombre del evaluador',
                                    'value' => 'Maria Lopez',
                                ],
                                [
                                    'key' => 'Telefono del evaluador',
                                    'value' => '+1 234 567 8900',
                                ],
                            ];
                        @endphp
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($items as $item)
                                <ul>
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-span-full lg:col-span-4">
                @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>
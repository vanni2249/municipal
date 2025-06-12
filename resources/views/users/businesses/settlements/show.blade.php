<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full space-y-4">
                <!-- If settlement not paid -->
                <x-card color="bg-red-200" class="rounded-xl">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0">
                        <h2 class="text-lg font-bold text-gray-900">
                            Esta radicacion no ha sido pagada
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-button href="#" class="bg-green-500 hover:bg-green-600 text-white">
                                Pagar
                            </x-button>
                        </div>
                    </header>
                </x-card>
                <!-- Settlement -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                           Radicacion
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-button href="#" class="bg-blue-500 w-full hover:bg-blue-600 text-white">
                               Imprimir
                            </x-button>
                        </div>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items = [
                                [
                                    'key' => 'Tipo de radicacion',
                                    'value' => 'Permiso de construccion',
                                ],
                                [
                                    'key' => 'Lugar de construccion radicado',
                                    'value' => 'Converse',
                                ],
                                [
                                    'key' => 'Tipo de construccion',
                                    'value' => 'Edificio',
                                ],
                                [
                                    'key' => 'Direccion de construccion',
                                    'value' => 'Calle Falsa 123',
                                ],
                                [
                                    'key' => 'Fecha de radicacion',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Estado de la solicitud',
                                    'value' => 'En proceso de evaluacion',
                                ],
                                [
                                    'key' => 'Observaciones',
                                    'value' => 'Ninguna',
                                ],
                                [
                                    'key' => 'Inspector antes de la construccion',
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
                                    'key' => 'Inspector despues de la construccion',
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
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($items as $item)
                                <ul>
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
                <!-- Invoice -->
                <x-card class="rounded-xl">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Factura
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @php
                            $items2 = [
                                [
                                    'key' => 'Numero de factura',
                                    'value' => 'INV-123456',
                                ],
                                [
                                    'key' => 'Fecha de factura',
                                    'value' => 'Viernes 01 de enero de 2025',
                                ],
                                [
                                    'key' => 'Fecha de vencimiento',
                                    'value' => 'Viernes 15 de enero de 2025',
                                ],
                                [
                                    'key' => 'Monto total',
                                    'value' => '$100.00',
                                ],
                                [
                                    'key' => 'Estado de la factura',
                                    'value' => 'Pendiente',
                                ],
                                [
                                    'key' => 'Metodo de pago',
                                    'value' => 'Tarjeta de credito',
                                ],
                                [
                                    'key' => 'Descripcion',
                                    'value' => 'Pago por radicacion de permiso de construccion',
                                ],
                                [
                                    'key' => 'Costo estimado',
                                    'value' => '$100.00',
                                ],
                                [
                                    'key' => 'Forma de pago',
                                    'value' => 'En linea',
                                ],
                                [
                                    'key' => 'Nombre del solicitante',
                                    'value' => 'Juan Perez',
                                ],
                                [
                                    'key' => 'Telefono del solicitante',
                                    'value' => '+1 234 567 8900',
                                ],
                            ];
                        @endphp
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($items2 as $item)
                                <ul>
                                    <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                            <ul>
                                <li class="text-xs font-bold text-gray-500">Estado</li>
                                <li class="text-sm text-green-500 font-bold">Pagado</li>
                            </ul>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>
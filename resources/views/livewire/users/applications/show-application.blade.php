<div>
@php
    $items = [
        [
            'key' => 'Fecha de creacion',
            'value' => 'Viernes 01 de enero de 2025',
],
        [
            'key' => 'Tipo de servicio',
            'value' => 'Recogido de escombros',
        ],
        [
            'key' => 'Estado de la solicitud',
            'value' => 'En proceso de evaluacion',
        ],
        [
            'key' => 'Fecha de recogido',
            'value' => 'Viernes 01 de enero de 2025',
        ],
        [
            'key' => 'Fecha de entrega',
            'value' => 'Viernes 01 de enero de 2025',
        ],
        [
            'key' => 'Direccion de recogido',
            'value' => 'Calle 123, Ciudad, Estado',
        ],
        [
            'key' => 'Direccion de entrega',
            'value' => 'Calle 456, Ciudad, Estado',
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
        ]
    ]
@endphp
    <div class="bg-gray-100 p-4 rounded-xl">
        @foreach ($items as $item)
        <ul class="py-2">
            <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
            <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
        </ul>
        @endforeach
    </div>
</div>

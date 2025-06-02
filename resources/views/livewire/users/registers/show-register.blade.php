<div>
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
    <div class="bg-gray-100 p-4 rounded-xl">
        @foreach ($items as $item)
        <ul class="py-2">
            <li class="text-xs font-bold text-gray-500">{{ $item['key'] }}</li>
            <li class="text-sm text-gray-900 font-bold">{{ $item['value'] }}</li>
        </ul>
        @endforeach
    </div>
</div>


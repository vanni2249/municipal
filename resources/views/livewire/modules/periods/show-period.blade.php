<div >
    @php
        $items = [
                [
                    'key' => 'Tipo de periodo',
                    'value' => 'Renovacion',
                ],
                [
                    'key' => 'Regira desde',
                    'value' => '01-01-2025',
                ],
                [
                    'key' => 'Regira hasta',
                    'value' => '01-01-2026',
                ],
                [
                    'key' => 'Fecha de vencimiento',
                    'value' => '01-01-2026',
                ],
                [
                    'key' => 'Fecha de pago',
                    'value' => '01-01-2025',
                ],
                [
                    'key' => 'Monto',
                    'value' => '$100.00',
                ],
                [
                    'key' => 'Estado',
                    'value' => 'Pagado',
                ],
                
        ];
    @endphp
   <x-card>
        <header class="flex justify-between items-start">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    p-0884782983
                </h2>
            </div>
            
        </header>
       <ul class="grid grid-cols-12 gap-2 py-6">
        @foreach ($items as $item)
        <li class="col-span-full md:col-span-6 lg:col-span-3 bg-gray-100 p-2 rounded">
            <div class="flex flex-col gap-1">
                <span class="text-xs uppercase text-gray-500 font-semibold">{{ $item['key'] }}</span>
                <span class="text-sm text-gray-600 font-bold">{{ $item['value'] }}</span>
            </div>
        </li>
        @endforeach
       </ul>
    </x-card>
</div>
<div>
     @php
        $items = [

                [
                    'key' => 'email',
                    'value' => 'vanni2249@gmail.com',
                ],
                [
                    'key' => 'direccion postal',
                    'value' => 'Calle 123, San Juan, PR 00926',
                ],
                [
                    'key' => 'direccion fisica',
                    'value' => 'Calle 123, San Juan, PR 00926',
                ],
                [
                    'key' => 'horario',
                    'value' => 'Lunes a Viernes 8:00 am - 5:00 pm',
                ],
                [
                    'key' => 'telefono',
                    'value' => '+7871237894',
            ],
                [
                    'key' => 'phone',
                    'value' => '+7871237894',
                ],
                
        ];
    @endphp
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    Walgreens Farmacia
                </h2>
            </div>
        </header>
        <ul class="grid grid-cols-12 gap-4 py-6">
        @foreach ($items as $item)
        <li class="col-span-full md:col-span-6 lg:col-span-3 bg-gray-200 p-2 rounded">
            <div class="flex flex-col gap-1">
                <span class="text-xs uppercase text-gray-600 font-semibold">{{ $item['key'] }}</span>
                <span class="text-sm text-gray-800 font-bold">{{ $item['value'] }}</span>
            </div>
        </li>
        @endforeach
        </ul>
    </x-card>
</div>
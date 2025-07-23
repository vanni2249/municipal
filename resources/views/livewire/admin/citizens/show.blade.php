<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h3 class="text-lg font-bold text-gray-800">Detalles del Ciudadano</h3>
            {{-- <x-icon-link href="{{ route('users.citizens.edit' , ['citizen' => 1]) }}"></x-icon-link> --}}

        </header>
        @php
        $items = [
            ['label' => 'ID de Ciudadano', 'value' => $citizen->code ?? '...'],
            ['label' => 'Nombre', 'value' => $citizen->getName()],
            ['label' => 'Email', 'value' => $citizen->getEmail()],
            ['label' => 'Telefono', 'value' => $citizen->getPhone()],
            ['label' => 'Direccion', 'value' => $citizen->address ? $citizen->address : '...'],
            ['label' => 'Ciudad', 'value' => $citizen->city ?? '...'],
            ['label' => 'Codigo Postal', 'value' => $citizen->postal_code ?? '...'],
            ['label' => 'Fecha de Nacimiento', 'value' => $citizen->date_of_birth ?? '...'],
        ];

        $users = [
            ['label' => 'Email','value' => $citizen->user->email ?? '...'],
        ];
        @endphp
        <ul class="grid grid-cols-4 text-sm text-gray-800 space-y-4 py-4">
            @foreach ($items as $item)
            <li class="col-span-4 md:col-span-2 lg:col-span-1">
                <small class="font-bold">{{ $item['label'] }}</small>
                <br>
                <span class="text-gray-600">
                    {!! $item['value'] !!}
                </span>
            </li>
            @endforeach
            @if ($citizen->user)
                <li class="col-span-full"></li>
            @foreach ($users as $user)
                <li class="col-span-4 md:col-span-2 lg:col-span-1">
                    <small class="font-bold">{{ $user['label'] }}</small>
                    <br>
                    <span class="text-gray-600">
                        {!! $user['value'] !!}
                    </span>
                </li>
            @endforeach
            @endif

        </ul>
    </x-card>
</div>
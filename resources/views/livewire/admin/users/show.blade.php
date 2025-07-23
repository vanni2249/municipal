<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h3 class="font-bold text-lg text-gray-800">Usuario</h3>
            {{-- <x-icon-link href="{{ route('admin.accountants.edit' , ['accountant' => 1]) }}"></x-icon-link> --}}

        </header>
        @php
        $items = [
            ['label' => 'ID de User', 'value' => $user->code??'N/A'],
            ['label' => 'Nombre', 'value' => $user->name],
            ['label' => 'Email', 'value' => $user->email],
            ['label' => 'Telefono', 'value' => $user->phone],
            ['label' => 'Estado', 'value' => $user->approved_at ? '<x-badge color="green" class="capitalize">Aprobado</x-badge>' : '<x-badge color="red" class="capitalize">Inactivo</x-badge>'],
            ['label' => 'Tipo de Ciudadano', 'value' => $user->category->es_name ?? 'N/A'],
            ['label' => 'Fecha de registro', 'value' => $user->created_at->format('d/m/Y')],
            ['label' => 'Ultima conexion', 'value' => $user->getLastLogin()],
        ];
        @endphp
        <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4 py-4">
            @foreach ($items as $item)
            <li class="col-span-4 md:col-span-2 lg:col-span-1">
                <small class="font-bold">{{ $item['label'] }}</small>
                <br>
                <span class="capitalize text-sm">
                    {!! $item['value'] !!}
                </span>
            </li>

            @endforeach
        </ul>
    </x-card>
</div>
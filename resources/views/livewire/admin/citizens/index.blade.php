<div>
    <x-card class="h-full rounded-xl">
        <header class="flex justify-between items-center mb-4">
            <h1 class="text-lg font-bold">Ciudadanos</h1>
            <x-icon-link href="{{ route('admin.citizens.create') }}" icon="plus" />

        </header>
        <div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
            <div class="">
                <x-input placeholder="Buscar" class="w-full" />
            </div>
            <div class="flex space-x-2">
                <div class="bg-gray-200 rounded-md p-1">
                    <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostra</span>
                    <select class="mx-2 rounded-md text-sm">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                    </select>
                </div>
                <div>
                    <x-button variant="light">Filtro</x-button>
                </div>
            </div>
        </div>
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Nombre</th>
                    <th class="p-2 w-auto">Email</th>
                    <th class="p-2 w-auto">Telefono</th>
                    <th class="p-2 w-auto">Estado</th>
                    <th class="p-2 w-auto">Fecha<br />creacion</th>
                    <th class="p-2 w-auto">Ultima<br />conexion</th>
                    <th class="p-2 w-auto text-right">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach ($citizens as $citizen)

                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="px-2 py-1">
                        <small>
                            ...
                        </small>
                        <br>
                        <span>
                            {{ $citizen->getName() }}
                        </span>
                    </td>
                    <td class="px-2 py-1">
                        {{ $citizen->getEmail() }}
                        <br>
                        <small>
                            @if ($citizen->user)
                            Usuario
                            @else
                            Sin usuario
                            @endif
                        </small>
                    </td>
                    <td class="px-2 py-1">{{ $citizen->getPhone() }}</td>
                    <td class="px-2 py-1">
                        @if ($citizen->getStatus() === 'Approved')
                            <x-badge color="green" class="capitalize">Aprobado</x-badge>
                        @elseif ($citizen->getStatus() === 'Pending')
                            <x-badge color="yellow" class="capitalize">Pendiente</x-badge>
                        @else
                           ...
                        @endif
                    </td>
                    <td class="px-2 py-1">
                        {{ $citizen->getCreatedAt() }}
                    </td>
                    <td class="px-2 py-1">
                        @if ($citizen->user)
                            @if ($citizen->user->last_login_at)
                                <span class="text-gray-500">{{ $citizen->user->getLastLogin() }}</span>
                            @else
                                ...
                            @endif
                            
                        @else
                            ...
                        @endif
                    </td>
                    <td class="px-2 py-1 flex justify-end">
                        <x-icon-link href="{{ route('admin.citizens.show', ['citizen' => $citizen->id]) }}" icon="eye" />
                    </td>
                </tr>
                @endforeach
            </x-slot>
        </x-table>
    </x-card>
</div>
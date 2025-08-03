<div>
    <x-card class="h-full rounded-xl">
        <header class="flex justify-between items-center mb-4">
            <h1 class="text-lg font-bold">Usuarios</h1>
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
                    <th class="p-2 w-auto">Tipo</th>
                    <th class="p-2 w-auto">Email</th>
                    <th class="p-2 w-auto">Fecha<br />creacion</th>
                    <th class="p-2 w-auto">Aprobado</th>
                    <th class="p-2 w-auto">Ultima<br />conexion</th>
                    <th class="p-2 w-auto">Bloqueado</th>
                    <th class="p-2 w-auto text-right">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($users as $user)
                <tr class="border-t border-gray-200">
                    <td class="px-2 py-1">
                        <small>
                            {{ $user->code??'...' }}
                        </small>
                        <br>
                        <span>
                            {{ $user->name }}
                        </span>
                    </td>
                    <td class="px-2 py-1 capitalize">{{ $user->type->es_name }}</td>
                    <td class="px-2 py-1">{{ $user->email }}</td>
                    <td class="px-2 py-1">{{ $user->created_at->format('d/m/Y') }}</td>
                    <td class="px-2 py-1">
                        @if ($user->approved_at)
                        <x-badge color="green">Aprobado</x-badge>
                        @else
                        <x-badge color="red">No aprobado</x-badge>
                        @endif
                    </td>
                    <td class="px-2 py-1">
                        {{ $user->getLastLogin() }}
                    </td>
                    <td class="px-2 py-1">
                        @if ($user->blocked_at)
                        <x-badge color="red">Bloqueado</x-badge>
                        @else
                        <x-badge color="green">Activo</x-badge>
                        @endif
                    </td>
                    <td class="px-2 py-1 flex justify-end">
                        <x-icon-link href="{{ route('admin.users.show', ['user' => $user->id]) }}" icon="eye" />
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-4">No hay usuarios disponibles.</td>
                </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>
<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Comerciantes
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.merchants.create') }}" icon="plus" />
                </div>
            </div>
        </header>
        @if ($head)
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
        @endif

        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 ">Nombre</th>
                    <th class="p-2 ">Email</th>
                    <th class="p-2 ">Telefono</th>
                    <th class="p-2 ">Estado</th>
                    <th class="p-2 ">Fecha<br />creacion</th>
                    <th class="p-2 ">Ultima<br />conexion</th>
                    <th class="p-2 text-right">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($merchants as $merchant)
                    <tr class="border-t border-gray-200">
                        <td class="p-2">
                            <span>
                                ...
                            </span>
                            <br>
                            <span>
                                {{ $merchant->user ? $merchant->user->name : $merchant->name }}
                            </span>
                        </td>
                        <td class="p-2">{{ $merchant->user ? $merchant->user->email : $merchant->email }}</td>
                        <td class="p-2">{{ $merchant->phone }}</td>
                        <td class="p-2">
                            @if ($merchant->user && $merchant->user->approved_at)
                                <x-badge color="green" class="capitalize">Aprobado</x-badge>
                            @elseif ($merchant->user && $merchant->user->blocked_at)
                                <x-badge color="red" class="capitalize">Bloqueado</x-badge>
                            @else
                                ...
                            @endif
                        </td>
                        <td class="p-2">{{ $merchant->created_at->format('d/m/Y') }}</td>
                        <td class="p-2">{{ $merchant->user ? $merchant->user->last_login_at : '...' }}</td>
                        <td class="p-2 flex justify-end">
                            <x-icon-link href="{{ route('admin.merchants.show', ['merchant' => $merchant->id]) }}"
                                icon="eye" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay comerciantes disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>

</div>

<div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
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
                            <th class="p-4 w-auto">Nombre</th>
                            <th class="p-4 w-auto">Tipo</th>
                            <th class="p-4 w-auto">Email<br/>Teléfono</th>
                            <th class="p-4 w-auto">Fecha<br />creación</th>
                            <th class="p-4 w-auto">Ultima<br />conexión</th>
                            <th class="p-4 w-auto">Status</th>
                            <th class="p-4 w-auto">Bloqueado</th>
                            <th class="p-4 w-auto text-right">Acción</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($users as $user)
                            <tr class="border-t border-gray-300">
                                <!-- Name -->
                                <td class="p-4">
                                    <span>
                                        {{ $user->register->code ?? '...' }}
                                    </span>
                                    <br>
                                    <span>
                                        {{ $user->name }} 
                                    </span>
                                </td>
                                <!-- Type -->
                                <td class="p-4 capitalize">{{ $user->register->type->es_name??'...' }}</td>
                                <!-- Email & phone -->
                                <td class="p-4">
                                    <span>
                                        {{ $user->email }}
                                    </span>
                                    <br>
                                    <span>
                                        {{ $user->register->phone ?? '...' }}
                                    </span>
                                </td>
                                <!-- Create_at -->
                                <td class="p-4">{{ $user->created_at->format('d/m/Y') }}</td>
                                <!-- Last Connection -->
                                <td class="p-4">
                                    {{ $user->getLastLogin() }}
                                </td>
                                <td class="p-4">
                                    @if ($user->approved_at)
                                        <x-badge color="green">Aprobado</x-badge>
                                    @else
                                        <x-badge color="red">No aprobado</x-badge>
                                    @endif
                                </td>
                                <td class="p-4">
                                    @if ($user->blocked_at)
                                        <x-badge color="red">Bloqueado</x-badge>
                                    @else
                                        <x-badge color="green">Activo</x-badge>
                                    @endif
                                </td>
                                <td class="p-4 flex justify-end">
                                    {{-- <x-icon-link href="{{ route('admin.users.show', ['user' => $user->id]) }}"
                                        icon="eye" /> --}}
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
    </div>
</div>

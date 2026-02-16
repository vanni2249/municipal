<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Usuarios</h1>
        </header>
    </x-card>
    <x-card class="h-full rounded-xl">
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
                    <x-button variant="light" label="Filtro" />
                </div>
            </div>
        </div>
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Number</th>
                    <th class="p-2 w-auto">Name<br>Lastname</th>
                    <th class="p-2 w-auto">Email<br>Phone</th>
                    <th class="p-2 w-auto">Last Connection</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-auto">Fecha</br>Registro</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($users as $user)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $user->number ?? '...' }}
                        </td>
                        <!-- Type -->
                        <td class="p-2 capitalize">
                            <span>
                                {{ $user->name ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $user->lastname ?? '...' }}
                            </span>
                        </td>
                        <!-- Email & phone -->
                        <td class="p-2">
                            <span>
                                {{ $user->email ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $user->phone ?? '...' }}
                            </span>
                        </td>
                        <!-- Last Connection -->
                        <td class="p-2">
                            {{ $user->session?->created_at ? $user->session->created_at->diffForHumans() : '...' }}
                        </td>
                        <td class="p-2">
                            <x-badge :variant="$user->status->statusType->variant" :label="$user->status->statusType->name" />
                        </td>
                        <td class="p-2">
                            <x-date-format date="{{ $user->created_at }}" format="d/m/Y" />
                        </td>
                        <!-- Actions -->
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" href="{{ route('admin.users.show', ['user' => $user->ulid]) }}"
                                icon="eye" wire:navigate/>
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

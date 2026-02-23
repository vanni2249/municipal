<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Administradores</h1>
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
                    <th class="p-2 w-auto">Username</th>
                    <th class="p-2 w-auto">Last Connection</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($admins as $admin)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $admin->number ?? '...' }}
                        </td>
                        <!-- Type -->
                        <td class="p-2 capitalize">
                            <span>
                                {{ $admin->employee->name ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $admin->employee->last_name ?? '...' }}
                            </span>
                        </td>
                        <!-- Email & phone -->
                        <td class="p-2">
                            <span>
                                {{ $admin->employee->email ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $admin->employee->phone ?? '...' }}
                            </span>
                        </td>
                        <!-- Username -->
                        <td class="p-2">
                            {{ $admin->username ?? '...' }}
                        </td>
                        <!-- Last Connection -->
                        <td class="p-2">
                            {{ $admin->session?->created_at ? $admin->session->created_at->diffForHumans() : '...' }}
                        </td>
                        <td class="p-2">
                            <x-badge :variant="$admin->status->statusType->variant" :label="$admin->status->statusType->name" />
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" 
                            href="{{ route('admin.administrators.show', ['department' => request()->department(), 'admin' => $admin->ulid]) }}"
                                icon="arrow-up-right" wire:navigate/>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay administradores disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>

<div class="space-y-2">

    <!-- Header -->
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Cuentas</h1>
            <div>
                <x-button label="Crear cuenta" @click="$dispatch('open-modal', 'create-account-modal')" />
            </div>
        </header>
    </x-card>

    <!-- Table -->
    <x-card class="h-full rounded-xl">
        <x-table-filter />
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Number</th>
                    <th class="p-2 w-auto">Tipo</br>Cuenta</th>
                    <th class="p-2 w-auto">Name<br>Lastname</th>
                    <th class="p-2 w-auto">Email<br>Phone</th>
                    <th class="p-2 w-auto">Numero</br>Usuario</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($accounts as $account)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $account->number ?? '...' }}
                        </td>
                        <!-- Type -->
                        <td class="p-2">
                            {{ $account->accountType->name ?? '...' }}
                        </td>
                        <!-- Name -->
                        <td class="p-2 capitalize">
                            <span>
                                {{ $account->user ? $account->user->name : $account->name }}
                            </span>
                            <br>
                            <span>
                                {{ $account->user ? $account->user->lastname : $account->lastname ?? '...' }}
                            </span>
                        </td>
                        <!-- Email & phone -->
                        <td class="p-2">
                            <span>
                                {{ $account->user ? $account->user->email : $account->email ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $account->user ? $account->user->phone : $account->phone ?? '...' }}
                            </span>
                        </td>
                        <!-- User-number -->
                        <td class="p-2">
                            {{ $account->user ? $account->user->number :  '...' }}
                        </td>
                        <td class="p-2">
                            <x-badge :variant="$account->status->statusType->variant" :label="$account->status->statusType->name" />
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" href="{{ route('admin.accounts.show', ['department' => request()->department(), 'account' => $account->ulid]) }}"
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

    <!-- Crear cuenta modal -->
    <x-modal name="create-account-modal" title="Crear cuenta">
    </x-modal>

    <!-- Filter account modal -->
    <x-modal name="filter-account-modal" title="Filtrar cuentas">
    </x-modal>
</div>

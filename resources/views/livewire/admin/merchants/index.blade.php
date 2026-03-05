<div class="space-y-2">

    <!-- Header -->
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Comerciantes</h1>
            <div>
                <livewire:admin.components.account-create accountType="merchant"/>
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
                    <th class="p-2 w-auto">Name<br>Lastname</th>
                    <th class="p-2 w-auto">Email<br>Phone</th>
                    <th class="p-2 w-auto">Numero</br>Usuario</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($merchants as $merchant)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $merchant->number ?? '...' }}
                        </td>
                        <!-- Name -->
                        <td class="p-2 capitalize">
                                {{ $merchant->name() }}
                        </td>
                        <!-- Email & phone -->
                        <td class="p-2">
                            <span>
                                {{ $merchant->email() ?? '...' }}
                            </span>
                            <br>
                            <span class="text-xs">
                                {{ $merchant->phone() ?? '...' }}
                            </span>
                        </td>
                        <!-- User-number -->
                        <td class="p-2">
                            {{ $merchant->user ? $merchant->user->number :  '...' }}
                        </td>
                        <td class="p-2">
                            <x-badge :variant="$merchant->status->statusType->variant" :label="$merchant->status->statusType->name" />
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" href="{{ route('admin.merchants.show', ['department' => request()->department(), 'merchant' => $merchant->ulid]) }}"
                                icon="arrow-up-right" wire:navigate/>
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

    <!-- Filter account modal -->
    <x-modal name="filter-account-modal" title="Filtrar cuentas">
    </x-modal>
</div>

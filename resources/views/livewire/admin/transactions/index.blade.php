<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Transacciones</h1>
        </header>
    </x-card>
    <x-card class="h-full rounded-xl">
        <div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
            <div class="">
                <x-input placeholder="Buscar" class="w-full" />
            </div>
            <div class="flex space-x-2">
                <div class="bg-gray-200 rounded-md p-1">
                    <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostrar</span>
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
                    <th class="p-2 w-auto">Método</th>
                    <th class="p-2 w-auto">Invoice</th>
                    <th class="p-2 w-auto">Amount</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($transactions as $transaction)
                    <tr class="border-t border-gray-300">
                        <!-- Number -->
                        <td class="p-2">
                            {{ $transaction->number ?? '...' }}
                        </td>
                        <!-- Method -->
                        <td class="p-2 capitalize">
                            {{ $transaction->transactionMethodType->name ?? '...' }}
                        </td>
                        <!-- Transactionable -->
                        <td class="p-2">
                            {{ $transaction->transactionable->number ?? '...' }}
                            <br>
                           {{ $transaction->transactionable->invoicable->service->title ?? '...' }}
                        </td>
                        <!-- Amount -->
                        <td class="p-2">
                            {{ $transaction->amount ?? '...' }}
                        </td>
                        <!-- Status -->
                        <td class="p-2">
                            @if ($transaction->status)
                                <x-badge variant="success" label="Completado" />
                            @else
                                <x-badge variant="danger" label="Fallido" />
                            @endif
                        </td>
                        <!-- Actions -->
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light"
                                href="{{ route('admin.transactions.show', ['transaction' => $transaction->ulid]) }}"
                                icon="eye" wire:navigate />
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

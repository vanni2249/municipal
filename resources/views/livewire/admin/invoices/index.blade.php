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
                    <th class="p-2 w-auto">Service</th>
                    <th class="p-2 w-auto">Cuenta</th>
                    <th class="p-2 w-auto">Nomber</th>
                    <th class="p-2 w-auto">Cantidad</th>
                    <th class="p-2 w-auto">Pagos</th>
                    <th class="p-2 w-auto">Balance</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($invoices as $invoice)
                    <tr class="border-t border-gray-300">
                        <!-- Number -->
                        <td class="p-2">
                            {{ $invoice->number ?? '...' }}
                        </td>
                        <!-- Service -->
                        <td class="p-2 capitalize">
                            {{ $invoice->invoicable->service->title ?? '...' }}
                        </td>
                        <!-- Cuenta -->
                        <td class="p-2 capitalize">
                            {{ $invoice->invoicable->account_id? 'Ciudadano' : 'Negocio' }}
                        </td>
                        <!-- Nombre -->
                        <td class="p-2">
                            @if ($invoice->invoicable->account_id)
                            {{ $invoice->invoicable->account->user
                                ? $invoice->invoicable->account->user->name . ' ' . $invoice->invoicable->account->user->lastname
                                : $invoice->invoicable->account->name . ' ' . $invoice->invoicable->account->lastname }}
                        @else
                            {{ $invoice->invoicable->business->name }}
                        @endif
                        </td>
                        <!-- Amount -->
                        <td class="p-2">
                            <x-money-format :amount="$invoice->amount" />
                        </td>
                        <!-- Transaction Amount -->
                        <td class="p-2">
                            <x-money-format :amount="$invoice->transactions->sum('amount') ?? 0" />
                        </td>
                        <!-- Balance -->
                        <td class="p-2">
                            <x-money-format :amount="$invoice->amount - $invoice->transactions->sum('amount')" />
                        </td>
                        <!-- Action -->
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light"
                                href="{{ route('admin.invoices.show', ['invoice' => $invoice->ulid]) }}" icon="eye"
                                wire:navigate />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay facturas disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>

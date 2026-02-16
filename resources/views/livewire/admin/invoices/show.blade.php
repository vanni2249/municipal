<div>
    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h2>{{ $invoice->invoicable->service->title }}</x-h2>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $invoice->number }}</li>
                        </ul>
                    </div>
                    {{-- <div class="text-right">
                        <x-badge label="{{ $invoice->status->statusType->name }}"
                            variant="{{ $invoice->status->statusType->variant }}" />
                    </div> --}}
                </header>
            </x-card>
        </div>
        <!-- Application detail & statuses -->
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Application detail -->
            <x-card>
                <x-card-header>
                    <x-h3>Detalles de la Factura</x-h3>
                </x-card-header>
                <x-card-body-grids>
                    <x-card-body-grid label="Número de factura" class="col-span-full md:col-span-6">
                        {{ $invoice->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="# Cuenta solicitante" class="col-span-full md:col-span-6">
                        {{ $invoice->invoicable->account_id ? $invoice->invoicable->account->number : $invoice->invoicable->business->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="Solicitante" class="col-span-full">
                        @if ($invoice->invoicable->account_id)
                            {{ $invoice->invoicable->account->user
                                ? $invoice->invoicable->account->user->name . ' ' . $invoice->invoicable->account->user->lastname
                                : $invoice->invoicable->account->name . ' ' . $invoice->invoicable->account->lastname }}
                        @else
                            {{ $invoice->invoicable->business->name }}
                        @endif
                    </x-card-body-grid>
                    <x-card-body-grid label="Fecha de creación" class="col-span-full">
                        <x-date-format :date="$invoice->created_at" format="d M Y h:i a" />
                    </x-card-body-grid>
                </x-card-body-grids>
            </x-card>
            <!-- Application statuses -->
            <x-card>
                <header>
                    <x-h3>Balance de la factura</x-h3>
                </header>
                <x-card-body-lists>
                    <x-card-body-list class="flex justify-between items-center">
                        <span>Total a pagar</span>
                        <x-money-format :amount="$invoice->amount" />
                    </x-card-body-list>
                    <x-card-body-list class="flex justify-between items-center">
                        <span>Monto pagado</span>
                        <x-money-format :amount="$invoice->transactions->sum('amount')" />
                    </x-card-body-list>
                    <x-card-body-list class="flex justify-between items-center">
                        <span>Monto pendiente</span>
                        <x-money-format :amount="$invoice->amount - $invoice->transactions->sum('amount')" />
                    </x-card-body-list>
                </x-card-body-lists>
            </x-card>
        </div>
        <!-- Application includes -->
        <div class="col-span-full lg:col-span-7">
            <x-card>
                <header>
                    <x-h3>Transacciones</x-h3>
                </header>
                <x-card-elements-group>
                    @forelse ($invoice->transactions as $transaction)
                        <x-card-element class="mb-4" border="{{ $transaction->status == 'success' ? 'success' : 'danger' }}">
                            <div class="flex justify-between items-start">
                                <div>
                                    <ul class="text-sm text-gray-700">
                                        <li>{{ $transaction->number }}</li>
                                    </ul>
                                    <p class="text-gray-900 mt-1">
                                        <x-date-format :date="$transaction->created_at" format="d M Y h:i a" />
                                    </p>
                                    <ul class="text-sm text-gray-700 lg:flex lg:space-x-4 mt-1">
                                        <li>
                                            Monto: 
                                            <x-money-format :amount="$transaction->amount" />
                                        </li>
                                        <li>Método de pago: 
                                            {{ $transaction->transactionMethodType->name }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-1 text-right">
                                    <x-badge label="{{ $transaction->status == 'success' ? 'Completado' : 'Fallido' }}"
                                        variant="{{ $transaction->status == 'success' ? 'success' : 'danger' }}" />
                                </div>
                            </div>
                        </x-card-element>
                    @empty
                        <p>No hay transacciones disponibles.</p>
                    @endforelse
                </x-card-elements-group>
            </x-card>
        </div>
    </div>


</div>

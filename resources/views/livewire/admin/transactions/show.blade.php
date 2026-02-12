<div class="space-y-4">

    <div class="grid grid-cols-12 gap-4">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h2>{{ $transaction->transactionable->invoicable->service->title }}</x-h2>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $transaction->number }}</li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <x-badge label="{{ $transaction->status ? 'Completado' : 'Fallido' }}"
                            variant="{{ ($transaction->status == 'success') ? 'success' : 'danger' }}" />
                    </div>
                </header>
            </x-card>
        </div>
        <!-- Transaction detail & statuses -->
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- Transaction detail -->
            <x-card>
                <x-card-header>
                    <x-h3>Detalles de la transacción</x-h3>
                </x-card-header>
                <x-card-body-grids>
                    <x-card-body-grid label="Número de transacción" class="col-span-full md:col-span-6">
                        {{ $transaction->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="Cantidad de transacción" class="col-span-full md:col-span-6">
                        <x-money-format amount="{{ $transaction->amount }}" />
                    </x-card-body-grid>
                    <x-card-body-grid label="Método de transacción" class="col-span-full">
                        {{ $transaction->transactionMethodType->name ?? '...' }}
                    </x-card-body-grid>
                    <x-card-body-grid label="Fecha de creación" class="col-span-full">
                        <x-date-format :date="$transaction->created_at" format="d M Y h:i a" />
                    </x-card-body-grid>
                </x-card-body-grids>
            </x-card>
            <!-- Application statuses -->
            <x-card>
                <header>
                    <x-h3>Estado de la Transacción</x-h3>
                </header>
                <x-card-elements-group>
                        <x-card-element class="mb-4" border="{{ $transaction->status == 'success' ? 'success' : 'danger' }}">
                             <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm text-gray-600 mt-1">
                                        <x-date-format :date="$transaction->created_at" format="d M Y h:i a" />
                                    </p>
                                </div>
                                <div class="mt-1 text-right">
                                    <x-badge label="{{ $transaction->status ? 'Completado' : 'Fallido' }}"
                                        variant="{{ ($transaction->status == 'success') ? 'success' : 'danger' }}" />
                                </div>
                            </div>
                        </x-card-element>
                </x-card-elements-group>
            </x-card>
        </div>
        <!-- Application includes -->
        <div class="col-span-full lg:col-span-7">
            <x-card>
                <header>
                    <x-h3>Factura</x-h3>
                </header>
            </x-card>
        </div>
    </div>


</div>

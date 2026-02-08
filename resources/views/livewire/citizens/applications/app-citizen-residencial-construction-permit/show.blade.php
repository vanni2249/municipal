<div>
    <div class="grid grid-cols-12 gap-4">
       {{-- {{ $application->invoice->amount }} --}}
       {{-- {{ $application->invoice->transactions()->where('status') }} --}}
        {{-- @if ($application->invoice) --}}
        @if ($application->invoice && $application->invoice->amount > $application->invoice->transactions()->where('status', 'success')->sum('amount'))
            
        <div class="col-span-full">
            <x-card variant="success">
                <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row md:justify-between md:items-start">
                    <div>
                        <p>
                            Esta aplicación tiene una factura asociada por un monto de: 
                        </p>
                        <span class="font-bold text-lg">${{ $application->invoice->amount }}</span>
                    </div>
                    <div>
                        <x-button label="Pagar factura" variant="success" @click="$dispatch('open-modal', 'make-payment-modal')" />
                    </div>
                </div>
            </x-card>
        </div>
        @endif
        {{-- @endif --}}
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- Info application -->
            <x-card>
                <header>
                    <x-h3>Detalles de la aplicacion</x-h3>
                </header>
                <x-app-elements>
                    <!-- Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Numero de solicitud" />
                        <x-app-element-value value="{{ $application->number }}" />
                    </x-app-element>

                    <!-- Account Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="# Cuenta solicitante" />
                        <x-app-element-value value="{{ $application->account->number }}" />
                    </x-app-element>

                    <!-- Applicant -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Solicitante" />
                        <x-app-element-value
                            value="{{ $application->account->user
                                ? $application->account->user->name . ' ' . $application->account->user->lastname
                                : $application->account->name . ' ' . $application->account->lastname }}" />
                    </x-app-element>

                    <!-- Created At -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value>
                            <x-date-format :date="$application->created_at" format="d M Y h:i a" />
                        </x-app-element-value>
                    </x-app-element>
                </x-app-elements>
            </x-card>

            <!-- Application Status -->
            <x-card>
                <header>
                    <x-h3>Estado de la Aplicación</x-h3>
                </header>
                <x-card-elements-group>
                    @foreach ($application->statuses as $status)
                        <x-card-element class="mb-4" border="{{ $status->statusType->variant }}">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm text-gray-600 mt-1">
                                        <x-date-format :date="$status->created_at" format="d M Y h:i a" />
                                    </p>
                                </div>
                                <div class="mt-1 text-right">
                                    <x-badge label="{{ $status->statusType->name }}"
                                        variant="{{ $status->statusType->variant }}" />
                                </div>
                            </div>
                        </x-card-element>
                    @endforeach
                </x-card-elements-group>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-7">
            <x-card>
                <header>
                    <x-h3>Detalles de permiso de construcción residencial</x-h3>
                </header>
                <x-app-elements>
                    <!-- Owner name -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Nombre del propietario" />
                        <x-app-element-value value="{{ $application->applicable->owner_name }}" />
                    </x-app-element>
                    <!-- Address -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Dirección" />
                        <x-app-element-value value="{{ $application->applicable->address->address }}" />
                    </x-app-element>

                    <!-- Place -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Lugar" />
                        <x-app-element-value value="{{ $application->applicable->address->place->name }}" />
                    </x-app-element>
                    <!-- Zip -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Código Postal" />
                        <x-app-element-value value="{{ $application->applicable->address->postal_code }}" />
                    </x-app-element>
                    <!-- Contractor name -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Nombre del contratista" />
                        <x-app-element-value value="{{ $application->applicable->contractor_name }}" />
                    </x-app-element>

                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Descripción" />
                        <x-app-element-value value="{{ $application->applicable->description }}" />
                    </x-app-element>
                </x-app-elements>

            </x-card>
        </div>
    </div>

    <x-modal name="make-payment-modal" title="Realizar pago" max-width="md">
        <div class="space-y-4">
            <p>
                ¿Está seguro que desea realizar el pago de esta factura por un monto de: 
            </p>
            <span class="font-bold text-lg">${{ $application->invoice->amount }}</span>

            <form wire:submit.prevent="makePayment">

                <div class="flex justify-end space-x-2">
                    {{-- <x-button label="Cancelar" variant="secondary" @click="$dispatch('close-modal')" /> --}}
                    <x-button type="submit" label="Confirmar pago" variant="success" />
                </div>
            </form>
        </div>
    </x-modal>
</div>

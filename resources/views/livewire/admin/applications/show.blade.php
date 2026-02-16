<div>

    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h2>{{ $application->service->title }}</x-h2>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $application->number }}</li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <x-badge label="{{ $application->status->statusType->name }}"
                            variant="{{ $application->status->statusType->variant }}" />
                    </div>
                </header>
            </x-card>
        </div>
        <!-- Application detail & statuses -->
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Application detail -->
            <x-card>
                <x-card-header>
                    <x-h3>Detalles de la aplicación</x-h3>
                </x-card-header>
                <x-card-body-grids>
                    <x-card-body-grid label="Número de solicitud" class="col-span-full md:col-span-6">
                        {{ $application->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="# Cuenta solicitante" class="col-span-full md:col-span-6">
                        {{ $application->account_id ? $application->account->number : $application->business->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="Solicitante" class="col-span-full">
                        @if ($application->account_id)
                            {{ $application->account->user
                                ? $application->account->user->name . ' ' . $application->account->user->lastname
                                : $application->account->name . ' ' . $application->account->lastname }}
                        @else
                            {{ $application->business->name }}
                        @endif
                    </x-card-body-grid>
                    <x-card-body-grid label="Fecha de creación" class="col-span-full">
                        <x-date-format :date="$application->created_at" format="d M Y h:i a" />
                    </x-card-body-grid>
                </x-card-body-grids>
            </x-card>
            <!-- Application statuses -->
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
            <!-- Interaction -->
            @if ($application->interaction)
                interaction
            @endif
            <!-- Invoice -->
            @if ($application->invoice)
                <x-card>
                    <x-card-header class="flex justify-between items-center">
                        <x-h3>Factura asociada</x-h3>
                        <x-badge
                            label="{{ $application->invoice->transactions->sum('amount') >= $application->invoice->amount ? 'Pagada' : 'Pendiente de pago' }}"
                            variant="{{ $application->invoice->transactions->sum('amount') >= $application->invoice->amount ? 'success' : 'warning' }}" />
                    </x-card-header>
                    <x-card-body-grids>
                        <x-card-body-grid label="Número de factura" class="col-span-full md:col-span-6">
                            {{ $application->invoice->number }}
                        </x-card-body-grid>
                        <x-card-body-grid label="Monto" class="col-span-full md:col-span-6">
                            ${{ $application->invoice->amount }}
                        </x-card-body-grid>
                    </x-card-body-grids>
                </x-card>
            @endif
            <!-- Transactions -->
            @if ($application->invoice)
                <x-card>
                    <x-card-header>
                        <x-h3>Transacciones de la factura</x-h3>
                    </x-card-header>
                    <x-card-body-lists>
                        @foreach ($application->invoice->transactions as $transaction)
                            <x-card-body-list class="flex justify-between items-center">
                                <div>
                                    <ul class="text-sm text-gray-700">
                                        <li>{{ $transaction->number }}</li>
                                    </ul>
                                    <p class=" text-gray-900">
                                        <x-date-format :date="$transaction->created_at" format="d M Y" />
                                    </p>
                                </div>
                                <div class="">
                                    <span class="">
                                        <x-money-format :amount="$transaction->amount" />
                                    </span>
                                </div>
                            </x-card-body-list>
                            <div class="flex justify-between items-start bg-gray-100 rounded p-2 lg:p-4">
                                <ul>
                                    <li class="text-xs font-bold text-gray-700">
                                        Total de la factura:
                                    </li>
                                    <li>
                                        <x-money-format :amount="$application->invoice->amount" />
                                    </li>
                                </ul>
                                <ul class="text-right">
                                    <li class="text-xs font-bold text-gray-700">
                                        Total pagado:
                                    </li>
                                    <li>
                                        <x-money-format :amount="$application->invoice->transactions->sum('amount')" />
                                    </li>
                                    <li class="text-xs font-bold mt-2 text-gray-700">
                                        Saldo pendiente:
                                    </li>
                                    <li>
                                        <x-money-format :amount="$application->invoice->amount - $application->invoice->transactions->sum('amount') ?? 0" />
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </x-card-body-lists>
                </x-card>
            @endif
            <!-- Permit -->
            @if ($application->permit)
                <x-card>
                    <x-card-header>
                        <x-h3>Permiso asociado</x-h3>
                    </x-card-header>
                    <x-card-body-grids>
                        <x-card-body-grid label="Número de permiso" class="col-span-full">
                            {{ $application->permit->number }}
                        </x-card-body-grid>
                        <x-card-body-grid label="Tipo de permiso" class="col-span-full">
                            {{ $application->permit->permitType->name }}
                        </x-card-body-grid>
                        <x-card-body-grid label="Fecha de emisión" class="col-span-full md:col-span-6">
                            <x-date-format :date="$application->permit->period->start_date" format="d M Y" />
                        </x-card-body-grid>
                        <x-card-body-grid label="Fecha de vencimiento" class="col-span-full md:col-span-6">
                            <x-date-format :date="$application->permit->period->end_date" format="d M Y" />
                        </x-card-body-grid>
                    </x-card-body-grids>
                </x-card>
            @endif
            <!-- Inspection -->
            @if ($application->inspection)
                <x-card>
                    <x-card-header>
                        <x-h3>Inspección asociada</x-h3>
                    </x-card-header>
                    <x-card-body-grids>
                        <x-card-body-grid label="Número de inspección" class="col-span-full">
                            {{ $application->inspection->number }}
                        </x-card-body-grid>
                        <x-card-body-grid label="Tipo de inspección" class="col-span-full">
                            {{ $application->inspection->inspectionType->name }}
                        </x-card-body-grid>
                        <x-card-body-grid label="Fecha de programación" class="col-span-full md:col-span-6">
                            <x-date-format :date="$application->inspection->scheduled_date" format="d M Y" />
                        </x-card-body-grid>
                        <x-card-body-grid label="Estado de la inspección" class="col-span-full md:col-span-6">
                            <x-badge label="{{ $application->inspection->status->statusType->name }}"
                                variant="{{ $application->inspection->status->statusType->variant }}" />
                        </x-card-body-grid>
                    </x-card-body-grids>
                </x-card>
            @endif
        </div>
        <!-- Application includes -->
        {{-- <div class="col-span-full lg:col-span-7"> --}}
            {{-- @switch($application->service->slug)
                @case('app-citizen-property-use')
                    @livewire('citizens.applications.app-citizen-property-use.show', [
                        'application' => $application,
                    ])
                @break

                @case('app-citizen-property-rent')
                    @livewire('citizens.applications.app-citizen-property-rent.show', [
                        'application' => $application,
                    ])
                @break

                @case('app-citizen-residencial-removal-debris')
                    @livewire('citizens.applications.app-citizen-residencial-removal-debris.show', [
                        'application' => $application,
                    ])
                @break

                @case('app-citizen-report-property-damage')
                    @livewire('citizens.applications.app-citizen-report-property-damage.show', [
                        'application' => $application,
                    ])
                @break

                @case('app-citizen-register-special-person')
                    @livewire('citizens.applications.app-citizen-register-special-person.show', [
                        'application' => $application,
                    ])
                @break

                @case('app-citizen-residencial-construction-permit')
                    @livewire('citizens.applications.app-citizen-residencial-construction-permit.show', [
                        'application' => $application,
                    ])
                @break

                @default
            @endswitch --}}
        {{-- </div> --}}
    </div>

    <!-- Make payment modal -->
    <x-modal name="make-payment-modal" title="Realizar pago" max-width="md">
        @if ($application->invoice)
            <div class="space-y-4">
                <p>
                    ¿Está seguro que desea realizar el pago de esta factura por un monto de:
                    <span class="font-bold text-lg">${{ $application->invoice->amount }}</span>
                </p>

                <form wire:submit.prevent="makePayment">

                    <div class="flex justify-end space-x-2">
                        <x-button type="submit" label="Confirmar pago" variant="success" />
                    </div>
                </form>
            </div>
        @endif
    </x-modal>

    <!-- Create support interaction modal -->
    <x-modal name="create-support-interaction-modal" title="Crear interacción de soporte" max-width="md">
        <form wire:submit.prevent="makeSupportInteraction">
            <p>
                Escriba un comentario para el equipo de soporte y se creará una interacción de soporte para esta
                aplicación. El equipo de soporte se comunicará con usted lo antes posible para brindarle información
                sobre el estado de su aplicación.
            </p>

            <!-- Input comment   -->
            <div class="mt-4">
                <x-label value="Comentario" for="supportInteractionComment" />
                <x-textarea label="Comentario" wire:model="supportInteractionComment" @class([
                    'w-full',
                    'border-red-500' => $errors->has('supportInteractionComment'),
                ])
                    rows="4" />
                @error('supportInteractionComment')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>

            <div class="flex justify-end space-x-2">
                {{-- <x-button label="Cancelar" variant="secondary" @click="$dispatch('close-modal')" /> --}}
                <x-button type="submit" label="Enviar" variant="warning" />
            </div>
        </form>
    </x-modal>
</div>

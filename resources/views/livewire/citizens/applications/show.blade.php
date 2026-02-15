<div class="space-y-2">

    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h1>{{ $application->service->title }}</x-h1>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $application->number }}</li>
                            {{-- <li>{{ $application->service->serviceType->name }}</li> --}}
                        </ul>
                    </div>
                    <div class="text-right">
                        <x-badge label="{{ $application->status->statusType->name }}"
                            variant="{{ $application->status->statusType->variant }}" />
                    </div>
                </header>
            </x-card>
        </div>
        <!-- If application has invoice -->
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
                            <x-button label="Pagar factura" variant="success"
                                @click="$dispatch('open-modal', 'make-payment-modal')" />
                        </div>
                    </div>
                </x-card>
            </div>
        @endif
        <!-- If application past 48 hrs not updated status -->
        @if (
            $application->status->created_at->diffInHours(now()) > 48 &&
                in_array($application->status->statusType->slug, ['pending', 'unverified', 'unverified']) &&
                !$application->interaction)
            <div class="col-span-full">
                <x-card variant="warning">
                    <div class="flex flex-col space-y-2 lg:flex-row lg:space-y-0 lg:justify-between lg:items-start">
                        <div>
                            <p>
                                Esta aplicación no ha sido actualizada en más de 48 horas.
                                <br />Puede crear interacción de
                                soporte para solicitar información sobre el estado de su aplicación.
                            </p>
                        </div>
                        <div>
                            <x-button type="button" variant="warning" label="Crear interacción de soporte"
                                @click="$dispatch('open-modal', 'create-support-interaction-modal')" />
                        </div>
                    </div>
                </x-card>
            </div>
        @endif
        <!-- Application detail & statuses -->
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Application detail -->
            <x-card>
                <header>
                    <x-h3>Detalles de la aplicación</x-h3>
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
        </div>
        <!-- Application includes -->
        <div class="col-span-full lg:col-span-7">
            @switch($application->service->slug)
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
            @endswitch
        </div>
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

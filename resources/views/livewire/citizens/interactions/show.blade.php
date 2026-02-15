<div class="space-y-2">
    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h1>{{ $interaction->interactionable->service->title }}</x-h1>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $interaction->number }}</li>
                            {{-- <li>{{ $application->service->serviceType->name }}</li> --}}
                        </ul>
                    </div>
                    <div class="text-right">
                        <x-badge label="{{ $interaction->status->statusType->name }}"
                            variant="{{ $interaction->status->statusType->variant }}" />
                    </div>
                </header>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-7 lg:order-last">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3>Mensajes</x-h3>
                    <div>
                        <x-button label="Responder" variant="info" size="sm" @click="$dispatch('open-modal', 'response-support-interaction-modal')" />
                    </div>
                </header>
                @forelse ($messages as $message)
                    <div class="space-y-1">
                        <div @class([
                            'bg-gray-200' => $message->created_account_id,
                            'bg-gray-100' => ! $message->created_account_id,
                            'p-2 md:p-4 space-y-1 rounded-md',
                        ])="bg-gray-200 rounded-xl p-4 space-y-2">
                            <header class="flex justify-between items-center">
                                <span class="text-xs font-light">
                                    @if ($message->created_account_id)
                                        {{ $message->accountCreated->user->name }}
                                    @else
                                        Administrador
                                    @endif
                                </span>
                                <span class="text-xs font-light">
                                    <x-date-format date="{{ $message->created_at }}" format="d M Y H:i" />
                                </span>
                            </header>
                            <p class="text-sm text-gray-800">{{ $message->message }}</p>
                            <footer class="flex justify-end">
                                <span class="text-xs">
                                    @if ($message->created_account_id)
                                        {{ $message->getMessageReadAccount() }}
                                    @endif

                                </span>
                            </footer>
                        </div>
                    </div>
                @empty
                    <div>
                        <p class="text-center text-gray-500 py-4">No hay mensajes para esta interacción.</p>
                    </div>
                @endforelse

            </x-card>
        </div>
        <div class="col-span-full lg:col-span-5 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3>Información</x-h3>
                </header>
                <x-app-elements>
                    <!-- Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Numero de solicitud" />
                        <x-app-element-value value="{{ $interaction->number }}" />
                    </x-app-element>

                    <!-- Account Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="# Cuenta solicitante" />
                        <x-app-element-value value="{{ $interaction->interactionable->account->number }}" />
                    </x-app-element>

                    <!-- Applicant -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Solicitante" />
                        <x-app-element-value
                            value="{{ $interaction->interactionable->account->user->name . ' ' . $interaction->interactionable->account->user->lastname }}" />
                    </x-app-element>

                    <!-- Created At -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value>
                            <x-date-format date="{{ $interaction->created_at }}" format="d M Y H:i" />
                        </x-app-element-value>
                    </x-app-element>
                </x-app-elements>
            </x-card>

            <x-card>
                <x-app-elements>
                    <x-app-element class="col-span-full">

                        <x-app-element-label label="Numero de aplicación" />
                        <x-app-element-value>{{ $interaction->interactionable->number }}</x-app-element-value>
                    </x-app-element>
                    <x-app-element class="col-span-full">

                        <x-app-element-label label="Servicio" />
                        <x-app-element-value>{{ $interaction->interactionable->service->title }}</x-app-element-value>
                    </x-app-element>
                </x-app-elements>
            </x-card>
        </div>
    </div>

    <!-- Modal response -->
    <x-modal name="response-support-interaction-modal" title="Responder a la interacción de soporte" max-width="md">
        <form wire:submit.prevent="responseSupportInteraction">
            <x-form-elements>
                <!-- Select property -->
                <x-form-element class="col-span-full">
                    <x-label for="message" value="Mensaje" />
                    <x-textarea wire:model="message" @class(['w-full', 'border-red-500' => $errors->has('message')]) rows="4" />
                    @error('message')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                <x-form-element class="col-span-full flex justify-end">
                    <x-button type="submit" label="Enviar respuesta" />
                </x-form-element>
            </x-form-elements>
        </form>
    </x-modal>
</div>

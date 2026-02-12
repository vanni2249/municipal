<div class="grid grid-cols-12 gap-4">
    <div class="col-span-full">
        <x-card>
            <header class="flex justify-between items-start">
                <div>
                    <x-h2>{{ $interaction->interactionable->service->title }}</x-h2>
                    <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                        <li>{{ $interaction->number }}</li>
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
                {{-- <div>
                        <x-button label="Responder" variant="info" size="sm" @click="$dispatch('open-modal', 'response-support-interaction-modal')" />
                    </div> --}}
            </header>
            @forelse ($messages as $message)
                <div class="space-y-1">
                    <div @class([
                        'bg-gray-200' => $message->created_account_id,
                        'bg-gray-100' => !$message->created_account_id,
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
    <div class="col-span-full lg:col-span-5 space-y-4">
        <!-- Información de la interacción -->
        <x-card>
            <header>
                <x-h3 value="Detalles de la interacción" />
            </header>
            <x-card-body-grids>
                <x-card-body-grid class="col-span-full lg:col-span-6" label="Numero de interacción"
                    value="{{ $interaction->number }}" />
                <x-card-body-grid class="col-span-full lg:col-span-6" label="Tipo de interacción"
                    value="{{ $interaction->interactionType->name }}" />
                <x-card-body-grid class="col-span-full" label="Cuenta asociada">
                    @if ($interaction->account_id)
                        {{ $interaction->account->user_id
                            ? $interaction->account->user->name . ' ' . $interaction->account->user->lastname
                            : $interaction->account->name . ' ' . $interaction->account->lastname }}
                    @else
                        {{ $interaction->business->name }}
                    @endif
                </x-card-body-grid>
                <x-card-body-grid class="col-span-full lg:col-span-6" label="Fecha de creación" value="">
                    <x-date-format date="{{ $interaction->created_at }}" format="d M Y H:i" />
                </x-card-body-grid>
            </x-card-body-grids>
        </x-card>

        <!-- Information of account -->
        <x-card>
            <header>
                <x-h3 value="Información de la cuenta" />
            </header>
            <x-card-body-grids>
                <x-card-body-grid class="col-span-full" label="Número de cuenta"
                    value="{{ $interaction->interactionable->number }}" />
                <x-card-body-grid class="col-span-full" label="Servicio asociado"
                    value="{{ $interaction->interactionable->service->title }}" />
            </x-card-body-grids>
        </x-card>
    </div>

</div>

<div>
    <header class="px-2 flex justify-between items-center mb-8">
        <div>
            <x-h1 value="Mis clientes" />
            <p class="text-sm text-gray-800">
                Maneja los comercios asociados a tu cuenta de contador aquí.
            </p>
        </div>
        <div class="flex">
            <x-link-button href="{{ route('users.accounts.index') }}" label="Mis cuentas" variant="light" />
        </div>
    </header>
    <x-card>
        <x-card-header>
            <p class="text-sm">
                <strong>
                    Lista de clientes asociados a tu cuenta de contador. 

                </strong>
                <br>
                <span class="text-gray-800">
                    Selecciona un comercio para navegar a su panel administrativo.
                </span>
            </p>
        </x-card-header>
        <x-card-elements-group>
            @foreach ($merges as $merge)
                <x-card-element>
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            {{-- Get just one merchant name --}}
                            {{-- {{ $merge->first()->merchant->user_id
                                ? $merge->first()->merchant->user->name . ' ' . $merge->first()->merchant->user->lastname
                                : $merge->first()->merchant->name . ' ' . $merge->first()->merchant->lastname }} --}}
                            <strong class="text-sm">
                                {{ $merge->first()->merchant->user_id
                                    ? $merge->first()->merchant->user->name . ' ' . $merge->first()->merchant->user->lastname
                                    : $merge->first()->merchant->name . ' ' . $merge->first()->merchant->lastname }}
                            </strong>
                            <br>
                            <span class="text-gray-700 text-sm">{{ $merge->first()->merchant->number }}</span>
                        </div>
                        <x-icon-button href="{{ route('citizens.dashboard') }}" icon="ellipsis-vertical"
                            variant="light" />
                    </div>
                    <div class="space-y-2">

                        @foreach ($merge as $item)
                            <x-card-element class="bg-gray-200 flex justify-between items-center">
                                <div>
                                    <strong>
                                        {{ $item->business->name }}
                                    </strong>
                                    <br>
                                    <span class="text-sm">
                                        {{ $item->business->number }}
                                    </span>
                                </div>
                                <div class="flex items-center">
                                    <div>

                                        <x-badge label="{{ $item->status->statusType->name }}"
                                            variant="{{ $item->status->statusType->variant }}" class="mr-4" />
                                    </div>
                                    <div class="flex">
                                        <x-icon-link
                                            href="{{ route('businesses.set-session', ['business' => $item->business->ulid]) }}"
                                            icon="arrow-right" variant="light-outline" size="xs" wire:navigate />
                                    </div>
                                </div>
                            </x-card-element>
                        @endforeach
                    </div>
                </x-card-element>
            @endforeach
        </x-card-elements-group>
    </x-card>
</div>

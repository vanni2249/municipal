<div class="space-y-4">
    <x-card>

        <header class="flex justify-between items-start">
            <div class="flex-1">
                <x-h2 value="Mis clientes" />
                <p class="text-sm text-gray-800 mt-2">
                    Maneja los comercios asociados a tu cuenta de contador aquí.
                </p>
            </div>
            <div class="flex items-center space-x-2">
                <x-link-button href="{{ route('users.accounts.index') }}" label="Mis cuentas" variant="primary" />
            </div>
        </header>
    </x-card>
    <x-card>
        {{-- <x-card-header>
            <p class="text-sm">
                <strong>
                    Lista de clientes asociados a tu cuenta de contador. 

                </strong>
                <br>
                <span class="text-gray-800">
                    Selecciona un comercio para navegar a su panel administrativo.
                </span>
            </p>
        </x-card-header> --}}
        <x-card-elements-group>
            @forelse ($merges as $merge)
                <x-card-element>
                    <div class="flex justify-between items-center mb-4">
                        <div>
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
            @empty
                <x-card-element>
                    <p class="text-sm text-gray-700">
                        No tienes comercios asociados a tu cuenta de contador.
                    </p>
                </x-card-element>
            @endforelse
        </x-card-elements-group>
    </x-card>
</div>

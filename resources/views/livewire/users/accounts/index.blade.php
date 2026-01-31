<div class="space-y-4">
    <x-card>

        <header class="flex justify-between items-center">
            <div>
                <x-h2 value="Mis cuentas" />
                <p class="text-sm text-gray-700">
                    Gestiona y navega entre las cuentas asociadas a tu usuario.
                </p>
            </div>
        </header>
    </x-card>
    <x-card>
        <!-- Citizen account -->
        <x-card-elements-group>
            @forelse ($accounts as $account)
                <x-card-element class="flex justify-between items-center border-l-4 border-gray-400">
                    <div>
                        <strong class="text-sm">{{ $account->accountType->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $account->number }}</span>
                    </div>
                    @switch($account->accountType->slug)
                        @case('citizen')
                            <x-icon-link href="{{ route('citizens.set-session', ['account' => $account->ulid]) }}"
                                icon="arrow-right" variant="secondary" size="xs" wire:navigate />
                        @break

                        @case('merchant')
                            <x-icon-link
                                href="{{ route('users.accounts.businesses.index', ['account' => $account->ulid]) }}"
                                icon="arrow-right" variant="secondary" size="xs" wire:navigate />
                        @break

                        @case('accountant')
                            <x-icon-link
                                href="{{ route('users.accounts.merges.index', ['account' => $account->ulid]) }}"
                                icon="arrow-right" variant="secondary" size="xs" wire:navigate />
                        @break

                        @default
                    @endswitch
                </x-card-element>
                @empty
                    <x-card-element>
                        <p class="text-gray-700 text-sm">No tienes cuentas asociadas a tu usuario.</p>
                    </x-card-element>
                @endforelse
            </x-card-elements-group>
        </x-card>
    </div>

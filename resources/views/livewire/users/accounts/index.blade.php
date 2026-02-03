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
    <!-- Accounts -->
    <x-card>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
            @forelse ($accounts as $account)
                {{-- @switch($account->accountType->slug) --}}
                {{-- @case('citizen') --}}
                {{-- <a href="{{ route('citizens.set-session', ['account' => $account->ulid]) }}" class="block" wire:navigate>
                        @break

                        @case('merchant')
                            <a href="{{ route('users.accounts.businesses.index', ['account' => $account->ulid]) }}" class="block"
                                wire:navigate>
                            @break

                            @case('accountant')
                                <a href="{{ route('users.accounts.merges.index', ['account' => $account->ulid]) }}"
                                    class="block" wire:navigate>
                                @break

                                @default
                            @endswitch --}}
                <x-card-element class="flex justify-between items-center" border="secondary">
                    <div>
                        <strong class="text-sm">{{ $account->accountType->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $account->number }}</span>
                    </div>
                    <div>
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <x-icon-button icon="ellipsis-vertical" variant="light" />
                            </x-slot>
                            <x-slot name="content">
                                @if ($account->accountType->slug == 'citizen')
                                    <x-dropdown-link href="{{ route('citizens.set-session', $account->ulid) }}">
                                        Ir a la cuenta
                                    </x-dropdown-link>
                                @else
                                    <x-dropdown-link href="{{ route('users.businesses.index') }}">
                                        Ver comercios
                                    </x-dropdown-link>
                                @endif
                            </x-slot>
                        </x-dropdown>
                        {{-- <x-icon icon="arrow-right" size="5" class="text-gray-400" /> --}}
                    </div>
                </x-card-element>
                {{-- </a> --}}
            @empty
                <x-card-element>
                    <p class="text-gray-700
                                        text-sm">No tienes cuentas asociadas
                        a tu usuario.</p>
                </x-card-element>
            @endforelse
        </div>
    </x-card>
</div>

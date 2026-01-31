<div>
    <x-card>
        <x-card-elements-group>
            @forelse ($accounts as $account)
                    @switch($account->accountType->slug)
                         @case('citizen')
                            <a href="{{ route('citizens.set-session', ['account' => $account->ulid]) }}" class="block" wire:navigate>
                        @break

                        @case('merchant')
                            <a href="{{ route('users.accounts.businesses.index', ['account' => $account->ulid]) }}" class="block" wire:navigate>    
                        @break

                        @case('accountant')
                            <a href="{{ route('users.accounts.merges.index', ['account' => $account->ulid]) }}" class="block" wire:navigate>
                        @break

                        @default
                    @endswitch
                    <x-card-element class="flex justify-between items-center hover:bg-gray-200" border="secondary">
                        <div>
                            <strong class="text-sm">{{ $account->accountType->name }}</strong>
                            <br>
                            <span class="text-gray-700 text-sm">{{ $account->number }}</span>
                        </div>
                        <div>
                            <x-icon icon="arrow-right" size="5" class="text-gray-400" />
                        </div>
                    </x-card-element>
                </a>
                @empty
                    <x-card-element>
                        <p class="text-gray-700 text-sm">No tienes cuentas asociadas a tu usuario.</p>
                    </x-card-element>
                @endforelse
            </x-card-elements-group>
        </x-card>
    </div>
    </div>

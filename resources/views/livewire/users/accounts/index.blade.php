<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Mis cuentas" />
                <p class="text-sm text-gray-700">
                    Gestiona y navega entre las cuentas asociadas a tu usuario.
                </p>
            </div>
            <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-icon-button icon="ellipsis-vertical" variant="light" />
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-button @click="$dispatch('open-modal', 'attach-merchant-account-modal')">
                            Adjuntar cuenta de comerciante
                        </x-dropdown-button>
                        <x-dropdown-button @click="$dispatch('open-modal', 'request-merchant-account-modal')">
                            Solicitar cuenta de comerciante
                        </x-dropdown-button>
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
    </x-card>
    <!-- Accounts -->
    <x-card>
        <div class="grid grid-cols-1 gap-2">
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

        @if ($accounts->where('account_type_id', 2)->isEmpty())
            <div
                class="mt-4 border border-dashed border-gray-400 p-6 rounded-lg flex flex-col justify-center items-center space-y-6">
                <div class="space-y-2 w-full lg:w-1/2 text-center">
                    <p class="text-gray-700 mb-2">
                        ¿Tu comercio existe ya en nuestra ciudad? Attacha tu cuenta de comerciante para
                        gestionarla.
                    </p>
                    <x-button variant="primary" @click="$dispatch('open-modal', 'attach-merchant-account-modal')">
                        Adjuntar cuenta de comerciante
                    </x-button>
                </div>

                <div class="space-y-2 w-full lg:w-1/2 text-center">
                    <p class="text-gray-700 mb-2">
                        ¿Eres un nuevo comerciante? Crea una cuenta de comerciante para gestionar.
                    </p>
                    <x-button variant="primary-outline" @click="$dispatch('open-modal', 'request-merchant-account-modal')">
                        Solicitar cuenta de comerciante
                    </x-button>
                </div>
            </div>
        @endif
    </x-card>

    <!-- Modals -->
    <!-- Attach merchant account -->
    <x-modal name="attach-merchant-account-modal" title="Adjuntar cuenta de comerciante" size="md">
        <form wire:submit.prevent="attachMerchantAccount">
            <div class="space-y-4">
                <!-- Account number -->
                <div>
                    <x-label for="merchant_account_number" value="Número de cuenta de comerciante" />
                    <x-input id="merchant_account_number" type="text" @class(['mt-1 block w-full', 'border-red-500' => $errors->has('merchant_account_number')]) 
                        wire:model.defer="merchant_account_number" autocomplete="off" />
                    @error('merchant_account_number')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- account code -->
                <div>
                    <x-label for="merchant_account_code" value="Código de cuenta de comerciante" />
                    <x-input id="merchant_account_code" type="text" @class(['mt-1 block w-full', 'border-red-500' => $errors->has('merchant_account_code')]) 
                        wire:model.defer="merchant_account_code" autocomplete="off" />
                    @error('merchant_account_code')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- Submit button -->
                <div>
                    <x-button type="submit" variant="primary">
                        Adjuntar cuenta
                    </x-button>
                </div>
            </div>
        </form>
    </x-modal>
    <!-- Create merchant account -->
    <x-modal name="request-merchant-account-modal" title="Solicitar cuenta de comerciante" size="md">
        <form wire:submit.prevent="createMerchantAccount">
            <!-- application account merchant term -->
            <div class="mb-4 text-sm text-gray-700">
                Al solicitar una cuenta de comerciante, aceptas que tu solicitud será revisada por el equipo
                administrativo. Una vez aprobada, se te notificará por correo electrónico y podrás acceder a
                tu nueva cuenta de comerciante desde tu panel de usuario.
                Podrás crear multiples comercios bajo esta cuenta.
            </div>
            <!-- Submit button -->
            <div>
                <x-button type="submit" variant="primary">
                    Solicitar cuenta de comerciante
                </x-button>
            </div>
        </form>
    </x-modal>
</div>

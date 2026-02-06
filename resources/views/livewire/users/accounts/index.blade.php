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
                <x-card-element class="" border="secondary">
                    <div class="flex justify-between items-center">

                        <div>
                            <strong class="text-sm">{{ $account->accountType->name }}</strong>
                            <br>
                            <span class="text-gray-700 text-sm">{{ $account->number }}</span>
                        </div>
                        <div>
                            @if ($account->accountType->slug == 'citizen')
                                <x-link-button href="{{ route('citizens.set-session', $account->ulid) }}"
                                    variant="light">
                                    Ir al tablero
                                </x-link-button>
                            @else
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <x-icon-button icon="ellipsis-vertical" variant="light" />
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-button>
                                            Crear nuevo comercio
                                        </x-dropdown-button>
                                        <x-dropdown-link href="{{ route('users.businesses.index') }}">
                                            Ver comercios
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>
                    </div>

                    @if ($account->accountType->slug == 'merchant')
                    
                        @forelse ($account->businesses()->get() as $business)
                            <div class="mt-4 p-4 bg-gray-50 rounded">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <strong class="text-sm">{{ $business->name }}</strong>
                                        <br>
                                        <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                                    </div>
                                    <div>
                                        <x-link-button href="{{ route('businesses.set-session', $business->ulid) }}"
                                            variant="light">
                                            Ir al comercio
                                        </x-link-button>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <div class="mt-4 p-4 bg-gray-200 rounded">
                                <p class="text-gray-700 text-sm">
                                    No tienes comercios asociados a esta cuenta.
                                </p>
                            </div>
                        @endforelse
                    @endif
                </x-card-element>
            @empty
                <x-card-element class="col-span-full">
                    <p class="text-gray-700 text-sm">
                        No tienes cuentas asociadas a tu usuario.
                    </p>
                </x-card-element>
            @endforelse
        </div>

        @if ($accounts->where('account_type_id', 2)->isEmpty())
            <div
                class="mt-4 border border-dashed border-gray-400 p-6 rounded-lg flex flex-col justify-center items-center space-y-6">
                <div class="space-y-2 w-full lg:w-1/2 text-center">
                    <p class="text-gray-700 mb-2">
                        ¿Tu comercio existe ya en nuestra ciudad? Adjunta tu cuenta de comerciante a tu cuanta de
                        usuario. Favor de comunicarte con el administrador de la ciudad si no conoces los datos de tu
                        cuenta.
                    </p>
                    <x-button variant="primary" @click="$dispatch('open-modal', 'attach-merchant-account-modal')">
                        Adjuntar cuenta de comerciante
                    </x-button>
                </div>

                <div class="space-y-2 w-full lg:w-1/2 text-center">
                    <p class="text-gray-700 mb-2">
                        ¿Eres un nuevo comerciante? Crea una cuenta de comerciante para gestionar tus negocios en la
                        ciudad.
                    </p>
                    <x-button variant="primary-outline"
                        @click="$dispatch('open-modal', 'request-merchant-account-modal')">
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
                    <x-input id="merchant_account_number" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('merchant_account_number'),
                    ])
                        wire:model.defer="merchant_account_number" autocomplete="off" />
                    @error('merchant_account_number')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- account code -->
                <div>
                    <x-label for="merchant_account_code" value="Código de cuenta de comerciante" />
                    <x-input id="merchant_account_code" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('merchant_account_code'),
                    ])
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

<div class="space-y-2">
    <!-- Header -->
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Mis cuentas" />
                <p class="text-sm text-gray-700">
                    Gestiona y navega entre las cuentas asociadas a tu usuario.
                </p>
            </div>
            <div>
                {{-- <x-dropdown align="right" width="48">
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
                </x-dropdown> --}}
            </div>
        </header>
    </x-card>

    <!-- Accounts -->
    <x-card>
        <x-card-header>
            <x-h3 value="Mis cuentas" />
        </x-card-header>
        <div class="grid grid-cols-1 gap-2">
            @forelse ($accounts as $account)
                <!-- Account item -->
                <x-card-element class="" border="secondary">
                    <div class="flex justify-between items-center">
                        <!-- Left Side Info -->
                        <div>
                            <strong class="text-sm">{{ $account->accountType->name }}</strong>
                            <br>
                            <span class="text-gray-700 text-sm">{{ $account->number }}</span>
                        </div>

                        <!-- Right Side buttons -->
                        <div class="flex flex-col space-y-1">
                            <div>
                                @if ($account->accountType->slug == 'citizen' && $account->status->statusType->slug == 'active')
                                    <!-- Citizen dashboard button -->
                                    <div class="">
                                        <x-link-button href="{{ route('citizens.set-session', $account->ulid) }}"
                                            variant="primary">
                                            Ir al tablero
                                        </x-link-button>
                                    </div>
                                @elseif($account->accountType->slug == 'merchant' && $account->status->statusType->slug == 'active')
                                    <!-- Merchant dashboard button -->
                                    {{-- <x-button variant="light" @click="$dispatch('open-modal', 'create-business-modal')">
                                        Crear comercio
                                    </x-button> --}}
                                    <span
                                        class="text-xs border border-gray-300 p-2 rounded-md uppercase font-bold text-gray-700">
                                        {{ $account->businesses->count() }}
                                        {{ Str::plural('comercio', $account->businesses->count()) }}
                                    </span>
                                @else
                                    <!-- Status -->
                                    <div class="text-right">
                                        <x-badge variant="{{ $account->status->statusType->variant }}"
                                            label="{{ $account->status->statusType->name }}" />
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </x-card-element>

                <!-- Businesses -->
                @if ($account->accountType->slug == 'merchant' && $account->status->statusType->slug == 'active')
                    <header>
                        <x-h3 value="Mis comercio(s)" />
                    </header>
                    <div class="space-y-1">
                        @forelse ($account->businesses as $business)
                            <div class="p-2 bg-gray-50 border border-gray-200 rounded-lg border-l-4 border-l-green-400">
                                <div class="flex justify-between items-center">
                                    <!-- Business Info -->
                                    <div>
                                        <strong class="text-sm">{{ $business->name }}</strong>
                                        <br>
                                        <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                                    </div>

                                    <!-- Business Dashboard Button -->
                                    <div>
                                        @if ($business->status->statusType->slug == 'active')
                                            <x-link-button href="{{ route('businesses.set-session', $business->ulid) }}"
                                                variant="primary">
                                                Ir al tablero
                                            </x-link-button>
                                        @else
                                            <x-badge variant="{{ $business->status->statusType->variant }}"
                                                label="{{ $business->status->statusType->name }}" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="mt-4 p-4 bg-gray-200 rounded">
                                <p class="text-gray-700 text-sm text-center">
                                    No tienes comercios asociados a esta cuenta.
                                </p>
                            </div>
                        @endforelse
                        <div
                            class="mt-4 bg-gray-50 border border-gray-200 rounded-lg p-2 lg:flex lg:justify-between space-y-4 lg:space-y-0 lg:items-center">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Crear un nuevo comercio bajo esta cuenta de comerciante. Recuerda que cada
                                    comercio
                                    puede tener su propia configuración y estado independiente.
                                </p>
                            </div>
                            <div>
                                <x-button variant="success" @click="$dispatch('open-modal', 'create-business-modal')">
                                    Nuevo comercio
                                </x-button>
                            </div>
                        </div>
                    </div>
                @endif
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
    <!-- End accounts -->

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

    <!-- Create business -->
    <x-modal name="create-business-modal" title="Crear nuevo comercio" size="md">
        {{-- {{ $accounts->where('account_type_id', 2)->first() }} --}}
        @if ($accounts->where('account_type_id', 2)->first()->businesses->last()->status->statusType->slug != 'active')
            <div class="mb-4 text-sm text-gray-700">
                Haz solicitado la creación de un nuevo comercio. Tu solicitud está siendo revisada por el equipo
                administrativo.
                Recibirás una notificación por correo electrónico una vez que tu comercio haya sido aprobado o
                rechazado. Mientras tanto, puedes revisar el estado de tu solicitud en la sección de cuentas de tu panel
                de usuario.
            </div>
        @else
            <form wire:submit.prevent="createBusiness">
                <div class="space-y-4">
                    <!-- Business type -->
                    <div>
                        <x-label for="business_type_id" value="Tipo de comercio" />
                        <x-select id="business_type_id" @class([
                            'mt-1 block w-full',
                            'border-red-500' => $errors->has('business_type_id'),
                        ])
                            wire:model.defer="business_type_id">
                            <option value="">Seleccione un tipo de comercio</option>
                            @foreach ($business_types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </x-select>
                        @error('business_type_id')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <!-- Business name -->
                    <div>
                        <x-label for="business_name" value="Nombre del comercio" />
                        <x-input id="business_name" type="text" @class([
                            'mt-1 block w-full',
                            'border-red-500' => $errors->has('business_name'),
                        ])
                            wire:model.defer="business_name" autocomplete="off" />
                        @error('business_name')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <!-- Address -->
                    <div>
                        <x-label for="business_address" value="Dirección" />
                        <x-input id="business_address" type="text" @class([
                            'mt-1 block w-full',
                            'border-red-500' => $errors->has('business_address'),
                        ])
                            wire:model.defer="business_address" autocomplete="off" />
                        @error('business_address')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>

                    <!-- Place and Postal Code -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Place -->
                        <div>
                            <x-label for="business_place_id" value="Lugar" />
                            <x-select id="business_place_id" @class([
                                'mt-1 block w-full',
                                'border-red-500' => $errors->has('business_place_id'),
                            ])
                                wire:model.defer="business_place_id">
                                <option value="">Seleccione un lugar</option>
                                @foreach ($places as $place)
                                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                                @endforeach
                            </x-select>
                            @error('business_place_id')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                        <!-- Zip code -->
                        <div>
                            <x-label for="business_postal_code" value="Código postal" />
                            <x-input id="business_postal_code" type="text" @class([
                                'mt-1 block w-full',
                                'border-red-500' => $errors->has('business_postal_code'),
                            ])
                                wire:model.defer="business_postal_code" autocomplete="off" />
                            @error('business_postal_code')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div>
                        <x-button type="submit" variant="primary">
                            Crear comercio
                        </x-button>
                    </div>
                </div>
            </form>
        @endif
    </x-modal>
</div>

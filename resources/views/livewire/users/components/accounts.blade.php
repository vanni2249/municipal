<div>
    <x-card>
        <x-card-header class="">
            <x-h2 value="Mis cuentas" />
            <p class="text-sm text-gray-700">
                Gestiona y navega entre las cuentas asociadas a tu usuario.
            </p>
        </x-card-header>
        <div class="space-y-2">

            @forelse ($accounts as $account)
                @if ($account->accountType->slug == 'citizen')
                    <x-card-element class="" border="secondary">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-700 text-xs">{{ $account->number }}</span>
                                <br>
                                <strong class="text-sm">{{ $account->accountType->name }}</strong>
                            </div>
                            @if ($account->status->statusType->slug == 'active')
                                <div class="">
                                    <x-link-button href="{{ route('citizens.set-session', $account->ulid) }}"
                                        variant="primary">
                                        Ir al tablero
                                    </x-link-button>
                                </div>
                            @else
                                <div class="text-right">
                                    <x-badge variant="{{ $account->status->statusType->variant }}"
                                        label="{{ $account->status->statusType->name }}" />
                                </div>
                            @endif
                        </div>
                    </x-card-element>
                @endif
                @if ($account->accountType->slug == 'merchant')
                    <x-card-element class="" border="secondary">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-700 text-xs">{{ $account->number }}</span>
                                <br>
                                <strong class="text-sm">{{ $account->accountType->name }}</strong>
                            </div>
                            @if ($account->status->statusType->slug == 'active')
                                <span
                                    class="text-xs border border-gray-300 p-2 rounded-md uppercase font-bold text-gray-700">
                                    {{ $account->businesses->count() }}
                                    {{ Str::plural('comercio', $account->businesses->count()) }}
                                </span>
                            @else
                                <div class="text-right">
                                    <x-badge variant="{{ $account->status->statusType->variant }}"
                                        label="{{ $account->status->statusType->name }}" />
                                </div>
                            @endif
                        </div>
                        @if ($account->status->statusType->slug == 'pending')
                            <div class="mt-4 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded">
                                <p class="text-yellow-700 text-sm">
                                    Tu cuenta de comerciante está en revisión.
                                    <br> Estamos trabajando para aprobar tu cuenta lo
                                    antes posible. Recibirás una notificación por correo electrónico una vez que tu
                                    cuenta
                                    haya
                                    sido aprobada o rechazada. Mientras tanto, puedes revisar el estado de tu solicitud
                                    en
                                    esta
                                    sección de cuentas.
                                </p>
                            </div>
                        @endif
                    </x-card-element>
                    <!-- Mensaje si tiene o quiere ser comerciante -->
                    {{-- <div x-data="{ show: false}" class="bg-yellow-50 border-l-4 border-yellow-400 rounded p-4">
                    <p class="text-yellow-700 text-sm">
                        ¿Eres un comerciante o quieres serlo?
                        <br>Gestiona tus negocios en la ciudad con una cuenta de
                        comerciante.
                        Si tu negocio ya existe en la ciudad, puedes adjuntar tu cuenta de comerciante existente a tu
                        usuario. Si tu negocio no existe en la ciudad, puedes solicitar una nueva cuenta de comerciante
                        para comenzar a gestionar tus negocios en la ciudad.
                        Para más información, comunícate con la <b>Oficina de Finanzas</b> de la ciudad.
                        <br>
                        <b class="text-gray-900">Si tu negocio ya existe en la ciudad, no es necesario solicitar una
                            nueva cuenta de comerciante. Comunícate con la Oficina de Finanzas para identificar tu
                            cuenta de comerciante existente.</b>
                        <br>
                        787-000-0000 ext. 123
                    </p>
                    <button @click="show = !show" class="text-blue-500 underline">Mostrar opciones</button>
                    <div x-show="show" class="mt-4 space-y-2 lg:space-y-0 lg:space-x-2">

                        <x-button variant="primary" @click="$dispatch('open-modal', 'attach-merchant-account-modal')">
                            Adjuntar cuenta de comerciante
                        </x-button>
                        <x-button variant="primary-outline"
                            @click="$dispatch('open-modal', 'request-merchant-account-modal')">
                            Solicitar cuenta de comerciante
                        </x-button>
                    </div>
                </div> --}}
                @endif
                @if ($account->accountType->slug == 'accountant')
                @endif
            @empty
                <x-card-element class="col-span-full">
                    <p class="text-gray-700 text-sm">
                        No tienes cuentas asociadas a tu usuario.
                    </p>
                </x-card-element>
            @endforelse
        </div>
        @if ($accounts->where('account_type_id', 2)->count() == 0)
            <div x-data="{ show: false}" class="mt-4 p-4 bg-blue-50 border-l-4 border-blue-400 rounded">
                <p class="text-blue-700 text-sm">
                    ¿Eres un comerciante o quieres serlo?
                    <br>Gestiona tus negocios en la ciudad con una cuenta de
                    comerciante.
                    Si tu negocio ya existe en la ciudad, puedes adjuntar tu cuenta de comerciante existente a tu
                    usuario. Si tu negocio no existe en la ciudad, puedes solicitar una nueva cuenta de comerciante
                    para comenzar a gestionar tus negocios en la ciudad.
                    Para más información, comunícate con la <b>Oficina de Finanzas</b> de la ciudad.
                    <br>
                    <b class="text-blue-900">Si tu negocio ya existe en la ciudad, no es necesario solicitar una
                        nueva cuenta de comerciante. Comunícate con la Oficina de Finanzas para identificar tu
                        cuenta de comerciante existente. 787-000-0000 ext. 123</b>
                
                    
                </p>
                <button @click="show = !show" class="text-blue-500 underline my-4 cursor-pointer">Mostrar opciones</button>
                <div x-show="show" class="mt-4 space-y-2 lg:space-y-0 lg:space-x-2">
                    <x-button variant="primary" @click="$dispatch('open-modal', 'attach-merchant-account-modal')">
                        Adjuntar cuenta de comerciante
                    </x-button>
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
                    <x-label for="account_number" value="Número de cuenta de comerciante" />
                    <x-input id="account_number" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('account_number'),
                    ])
                        wire:model.defer="account_number" autocomplete="off" />
                    @error('account_number')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- account code -->
                <div>
                    <x-label for="account_code" value="Código de cuenta de comerciante" />
                    <x-input id="account_code" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('account_code'),
                    ])
                        wire:model.defer="account_code" autocomplete="off" />
                    @error('account_code')
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
            <p class="mb-4 text-sm text-gray-700">
                Al solicitar una cuenta de comerciante, aceptas que tu solicitud será revisada por el equipo
                administrativo. Una vez aprobada, se te notificará por correo electrónico y podrás acceder a
                tu nueva cuenta de comerciante desde tu panel de usuario.
                Podrás crear multiples comercios bajo esta cuenta.
            </p>
            <x-form-elements>
                <!-- Disabled Name input -->
                <x-form-element class="col-span-full">
                    <x-label for="business_name" value="Nombre del comerciante" />
                    <x-input id="business_name" type="text" value="{{ $user->name }}" class="w-full" disabled />
                </x-form-element>
                <!-- Disabled Lastname input -->
                <x-form-element class="col-span-full">
                    <x-label for="business_lastname" value="Apellido del comerciante" />
                    <x-input id="business_lastname" type="text" value="{{ $user->lastname }}" class="w-full"
                        disabled />
                </x-form-element>
                <!-- Disabled Email input -->
                <x-form-element class="col-span-full">
                    <x-label for="business_email" value="Correo electrónico del comerciante" />
                    <x-input id="business_email" type="text" value="{{ $user->email }}" class="w-full" disabled />
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit" variant="primary">
                        Solicitar cuenta de comerciante
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-modal>

</div>

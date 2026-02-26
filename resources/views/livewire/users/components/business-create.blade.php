<div>
    <x-card>
        <x-card-header>
            <x-h2 value="Cuenta de comerciante" />
            <p class="text-sm text-gray-700">
                Gestiona tu cuenta de comerciante para administrar tus negocios en la ciudad.
            </p>
        </x-card-header>

        @if (!$merchant_account)
            <div class="hidden">

                <div>

                    <b class="text-sm text-gray-900">
                        Nota: Si tu negocio ya está registrado en la ciudad, ya tienes una cuenta de comerciante
                        asociada.
                        Con
                        esta cuenta podrás gestionar todos tus negocios existentes y futuros. No es necesario solicitar
                        una
                        nueva cuenta de comerciante para cada negocio que tengas. Para identificar tu cuenta
                        de comerciante existente, por favor comunícate con la Oficina de Finanzas de la ciudad.
                    </b>
                    <span class="text-gray-700 text-sm">
                        787-000-0000 ext. 123
                    </span>
                </div>
                <div
                    class="mt-4 border border-dashed border-gray-400 p-6 rounded-lg flex flex-col justify-center items-center space-y-6">
                    <div class="space-y-2 w-full lg:w-1/2 text-center">
                        <p class="text-sm text-gray-700 mb-2">
                            <b class="text-gray-900">
                                ¿Tu negocio existe en nuestra ciudad?
                            </b>
                            <br>
                            Si tu negocio ya está registrado en la ciudad, ya tienes una cuenta de comerciante asociada,
                            puedes adjuntar tu cuenta de comerciante existente a tu usuario para comenzar a gestionar
                            tus
                            negocios en la ciudad.
                            <b class="text-gray-900">
                                Favor de comunicarte con la <b>Oficina de Finanzas</b> de la ciudad para obtener los
                                datos
                                de
                                tu cuenta de comerciante.
                            </b>
                            <br>
                            787-000-0000 ext. 123
                        </p>
                        <x-button variant="primary" @click="$dispatch('open-modal', 'attach-merchant-account-modal')">
                            Adjuntar cuenta de comerciante
                        </x-button>
                    </div>

                    <div class="space-y-2 w-full lg:w-1/2 text-center">
                        <p class="text-sm text-gray-700 mb-2">
                            <b>
                                ¿Tu negocio no existe en nuestra ciudad?

                            </b>
                            <br>
                            Solicita una nueva cuenta de comerciante para comenzar a gestionar tus negocios en la
                            ciudad.
                            Al solicitar una cuenta de comerciante, aceptas que tu solicitud será revisada por el equipo
                            administrativo. Una vez aprobada, se te notificará por correo electrónico y podrás acceder a
                            tu nueva cuenta de comerciante desde tu panel de usuario. Podrás crear multiples comercios
                            bajo
                            esta cuenta.
                        </p>
                        <x-button variant="primary-outline"
                            @click="$dispatch('open-modal', 'request-merchant-account-modal')">
                            Solicitar cuenta de comerciante
                        </x-button>
                    </div>
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

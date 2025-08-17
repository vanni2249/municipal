<div>
    <div class=" mx-auto bg-gray-100 rounded-xl overflow-hidden md:max-w-2xl">

        <div class="bg-white w-full  rounded-xl p-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Registrar</h1>
                <p class="mt-1 text-sm text-gray-600">¡Bienvenido! Registro de la plataforma digital de la
                    ciudad de San Antonio.</p>
            </div>

            <form wire:submit.prevent='register'>
                <div class="grid grid-cols-4 gap-4 py-6">
                    <!-- Type -->
                    <div class="col-span-4">
                        <x-label for="text" class="mt-4" value="Tipo de usuario" />
                        <x-select wire:model.live="role" id="role" @class(['w-full', 'border-red-500' => $errors->has('role')]) autofocus>
                            <option value="">Seleccione un tipo de usuario</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->key }}">{{ $type->es_name }}</option>
                            @endforeach
                        </x-select>
                        @error('role')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <!-- Name -->
                    <div class="col-span-4 md:col-span-2">
                        <x-label for="text" class="mt-4" value="Nombre" />
                        <x-input wire:model.defer="name" name="name" @class(['w-full', 'border-red-500' => $errors->has('name')]) type="text"
                            placeholder="Ingrese su nombre" />
                    </div>
                    <!-- Lastname -->
                    <div class="col-span-4 md:col-span-2">

                        <x-label for="lastname" class="mt-4" value="Apellido" />
                        <x-input wire:model.defer="lastname" name="lastname" id="lastname" @class(['w-full', 'border-red-500' => $errors->has('lastname')])
                            type="text" placeholder="Ingrese su apellido" />
                    </div>
                    <!-- Date of birth -->
                    <div class="col-span-4 md:col-span-2">
                        <x-label for="date_of_birth" class="mt-4" value="Fecha de nacimiento" />
                        <x-input wire:model.defer="date_of_birth" name="date_of_birth" id="date_of_birth"
                            @class([
                                'w-full
                                                                                                                                                                                                                                                                                                                                                                                            text-gray-400',
                                'border-red-500' => $errors->has('date_of_birth'),
                            ]) type="date" placeholder="Ingrese su fecha de nacimiento" />
                    </div>
                    <!-- Email -->
                    <div class="col-span-4 md:col-span-3">
                        <x-label for="email" class="mt-4" value="Correo electrónico" />
                        <x-input wire:model.defer="email" name="email" id="email" @class(['w-full', 'border-red-500' => $errors->has('email')])
                            type="email" placeholder="Ingrese su correo electrónico" />
                    </div>
                    <!-- Phone -->
                    <div class="col-span-4 md:col-span-1">
                        <x-label for="phone" class="mt-4" value="Teléfono" />
                        <x-input wire:model.defer="phone" id="phone" name="phone" @class(['w-full', 'border-red-500' => $errors->has('phone')])
                            type="text" placeholder="Ingrese su teléfono" />
                    </div>
                    <!-- Password -->
                    <div class="col-span-4 md:col-span-2">
                        <x-label for="password" class="mt-4" value="Contraseña" />
                        <x-input wire:model.defer="password" name="password" id="password" @class(['w-full', 'border-red-500' => $errors->has('password')])
                            type="password" placeholder="Ingrese su contraseña" />
                        @error('password')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <!-- Confirmation password -->
                    <div class="col-span-4 md:col-span-2">
                        <x-label for="password_confirmation" class="mt-4" value="Confirmar contraseña" />
                        <x-input wire:model.defer="password_confirmation" name="password_confirmation"
                            id="password_confirmation" @class([
                                'w-full',
                                'border-red-500' => $errors->has('password_confirmation'),
                            ]) type="password"
                            placeholder="Confirme su contraseña" />
                    </div>
                    <!-- place -->
                    @if (in_array($role, ['citizen', 'citizen-merchant']))
                        <div class="col-span-4 md:col-span-2">
                            <x-label for="place_id" class="mt-4" value="Lugar de residencia" />
                            <x-select wire:model.live="place_id" id="place_id" @class(['w-full', 'border-red-500' => $errors->has('place_id')]) autofocus>
                                <option value="">Seleccione un lugar</option>
                                @foreach ($places as $place)
                                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                                @endforeach
                            </x-select>
                            @error('place_id')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                    @endif
                    @if (in_array($role, ['accountant', 'contractor', 'supplier']))
                    <!-- Company name -->
                        <div class="col-span-4 md:col-span-2">
                            <x-label for="company_name" class="mt-4" value="Nombre de la empresa" />
                            <x-input wire:model.defer="company_name" name="company_name" id="company_name"
                                @class(['w-full', 'border-red-500' => $errors->has('company_name')]) type="text"
                                placeholder="Ingrese el nombre de su empresa" />
                        </div>
                    <!-- Number -->
                        <div class="col-span-full md:col-span-2">
                            <x-label for="number" class="mt-4" value="Número de comerciante" />
                            <x-input wire:model.defer="number" name="number" id="number"
                                @class(['w-full', 'border-red-500' => $errors->has('number')]) type="text"
                                placeholder="Ingrese el número de comerciante" />
                        </div>
                    @endif
                    @if (in_array($role, ['citizen', 'merchant', 'citizen-merchant', 'accountant', 'contractor', 'supplier']))
                        <!-- Address -->
                        <div class="col-span-4">
                            <x-label for="address" class="mt-4" value="Dirección" />
                            <x-input wire:model.defer="address" name="address" id="address"
                                @class(['w-full', 'border-red-500' => $errors->has('address')]) type="text" placeholder="Ingrese su dirección" />
                        </div>
                        <!-- City -->
                        <div class="col-span-4 md:col-span-2">
                            <x-label for="city" class="mt-4" value="Ciudad" />
                            <x-input wire:model.defer="city" name="city" id="city"
                                @class(['w-full', 'border-red-500' => $errors->has('city')]) type="text" placeholder="Ingrese su ciudad" />
                        </div>
                        <!-- Postal code -->
                        <div class="col-span-4 md:col-span-2">
                            <x-label for="postal_code" class="mt-4" value="Código Postal" />
                            <x-input wire:model.defer="postal_code" name="postal_code" id="postal_code"
                                @class(['w-full', 'border-red-500' => $errors->has('postal_code')]) type="text" placeholder="Ingrese su código postal" />
                        </div>
                    @endif

                    @if (in_array($role, ['citizen', 'citizen-merchant']))
                        <div class="col-span-full grid grid-cols-2 lg:grid-cols-4 gap-4 bg-gray-100 p-4 rounded-md">
                            <!-- is veteran -->
                            <div class="flex space-x-2 items-center">
                                <x-checkbox wire:model.defer="is_veteran" name="is_veteran" id="is_veteran"
                                    name="is_veteran" class="" />
                                <span class="text-xs font-bold text-gray-600">Veterano</span>
                            </div>
                            <!-- is age advanced -->
                            <div class="flex space-x-2 items-center">
                                <x-checkbox wire:model.defer="is_age_advanced" name="is_age_advanced"
                                    id="is_age_advanced" name="is_age_advanced" />
                                <span class="text-xs font-bold text-gray-600">Edad Avanzada</span>
                            </div>
                            <!-- is bedridden -->
                            <div class="flex space-x-2 items-center">
                                <x-checkbox wire:model.defer="is_bedridden" name="is_bedridden" id="is_bedridden"
                                    name="is_bedridden" />
                                <span class="text-xs font-bold text-gray-600">Encamado</span>
                            </div>
                            <!-- is disable -->
                            <div class="flex space-x-2 items-center">
                                <x-checkbox wire:model.defer="is_disability" name="is_disability" id="is_disability"
                                    name="is_disability" />
                                <span class="text-xs font-bold text-gray-600">Discapacitado</span>
                            </div>
                        </div>
                    @endif
                    <!-- Term -->
                    <div class="col-span-4">
                        <div class="flex items-center space-x-2">

                            <div class="pt-1">
                                <x-checkbox wire:model.defer="terms" name="terms" @class(['w-full']) />
                            </div>
                            <a href="#">
                                <x-label for="terms" value="Acepto los términos y condiciones" />
                            </a>
                        </div>
                        @error('terms')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Button -->
                    <div class="col-span-4">
                        <x-button class="w-full md:w-auto">
                            {{ __('Registrar') }}
                        </x-button>
                    </div>
                    <div class="col-span-full">
                        <p class="mt-4 text-xs text-gray-600">¿Ya tienes una cuenta? <a
                                href="{{ route('users.login') }}" class="text-blue-500">Inicia
                                sesión</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

<div>
    <header class=" mx-auto p-4 w-full">
        <div class="flex justify-center ">
            <a href="/" class="text-2xl font-bold text-gray-900" wire:navigate>{{ __('MyApps') }}</a>
        </div>
    </header>
    <div class=" mx-auto bg-gray-100 rounded-xl overflow-hidden md:max-w-2xl">

        <div class="bg-white w-full  rounded-xl p-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Registrar</h1>
                <p class="mt-1 text-sm text-gray-600">¡Bienvenido! Registro de la plataforma digital de la
                    ciudad de San Antonio.</p>
            </div>

            <form wire:submit.prevent='register'>
                <div class="grid grid-cols-4 gap-4 py-6">

                    @error('accounts')
                        <div class="col-span-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <span @class(['text-red-500', 'text-xs', 'font-bold'])>{{ $message }}</span>
                        </div>
                    @enderror
                    <!-- Citizen -->

                    <div @class(['col-span-4', 'md:col-span-2', 'border', 'border-gray-300', 'rounded', 'p-2', $errors->has('accounts') ? 'border-red-500' : ''])>
                        <div class="flex items-center space-x-2">

                            <div class="pt-1">
                                <x-checkbox value="citizen" wire:model.defer="accounts.citizen" name="citizen"
                                    @class(['w-full']) />
                            </div>
                            <a href="#">
                                <x-label for="citizen" value="Residente de San Antonio" />
                            </a>
                        </div>
                    </div>

                    <!-- Merchant -->
                    <div @class(['col-span-4', 'md:col-span-2', 'border', 'border-gray-300', 'rounded', 'p-2', $errors->has('accounts') ? 'border-red-500' : ''])>
                        <div class="flex items-center space-x-2">

                            <div class="pt-1">
                                <x-checkbox value="merchant" wire:model.defer="accounts.merchant" name="merchant"
                                    @class(['w-full']) />
                            </div>
                            <a href="#">
                                <x-label for="merchant" value="Comerciante de San Antonio" />
                            </a>
                        </div>
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
                    <!-- Gender -->
                    <div class="col-span-4 md:col-span-1">
                        <x-label for="gender" class="mt-4" value="Género" />
                        <x-select wire:model.defer="gender" name="gender" id="gender" @class(['w-full', 'border-red-500' => $errors->has('gender')])>
                            <option value="" disabled selected>Seleccione su género</option>
                            <option value="male">Masculino</option>
                            <option value="female">Femenino</option>
                            <option value="other">Otro</option>
                        </x-select>
                    </div>
                    <!-- Email -->
                    <div class="col-span-4 md:col-span-3">
                        <x-label for="email" class="mt-4" value="Correo electrónico" />
                        <x-input wire:model.defer="email" name="email" id="email" @class(['w-full', 'border-red-500' => $errors->has('email')])
                            type="email" placeholder="Ingrese su correo electrónico" />
                        @error('email')
                            <x-error message="{{ $message }}" />
                        @enderror
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
                    <!-- Term -->
                    <div class="col-span-4">
                        <div class="flex items-center space-x-2">

                            <div class="pt-1">
                                <x-checkbox wire:model.defer="term_accepted" name="term_accepted"
                                    @class(['w-full']) />
                            </div>
                            <a href="#">
                                <x-label for="term_accepted" value="Acepto los términos y condiciones" />
                            </a>
                        </div>
                        @error('term_accepted')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Button -->
                    <div class="col-span-4">
                        <x-button class="w-full md:w-auto" label="Registrar" type="submit" size="lg">
                            {{ __('Registrar') }}
                        </x-button>
                    </div>
                    <div class="col-span-full">
                        <p class="mt-4 text-sm text-gray-600">
                            ¿Ya tienes una cuenta?
                            <a href="{{ route('login') }}" class="text-blue-500">
                                Inicia sesión
                            </a>
                        </p>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

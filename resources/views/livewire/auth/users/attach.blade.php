<div>
    <x-card class="mx-auto bg-gray-100 rounded-xl overflow-hidden md:max-w-md">
        <div>
            <h1 class="text-xl font-bold text-gray-900">Registrar</h1>
            <p class="mt-1 text-sm text-gray-600">
                ¡Bienvenido! Registro de la plataforma digital de la
                ciudad de San Antonio.
            </p>
        </div>
        <form wire:submit.prevent='{{ $method }}' class="grid grid-cols-1 gap-4 mt-4">
            <div>
                <x-label for="code" class="mt-4" value="Código de registro" />
                <x-input wire:model.defer="code" id="code" class="w-full" type="text"
                    placeholder="Ingrese su código de registro" />
                @error('code')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            @if ($show)
                <div>
                    <x-label for="name" class="mt-4" value="Nombre" />
                    <x-input wire:model.defer="name" id="name" class="w-full" type="text"
                        placeholder="Ingrese su nombre" />
                    @error('name')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <div>
                    <x-label for="lastname" class="mt-4" value="Apellido" />
                    <x-input wire:model.defer="lastname" id="lastname" class="w-full" type="text"
                        placeholder="Ingrese su apellido" />
                    @error('lastname')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @endif
            <div>
                <x-label for="email" class="mt-4" value="Correo electrónico" />
                <x-input wire:model.defer="email" id="email" class="w-full" type="email"
                    placeholder="Ingrese su correo electrónico" />
                @error('email')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            @if ($show)
                <div>
                    <x-label for="password" class="mt-4" value="Contraseña" />
                    <x-input wire:model.defer="password" id="password" class="w-full" type="password"
                        placeholder="Ingrese su contraseña" />
                    @error('password')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <div>
                    <x-label for="password_confirmation" class="mt-4" value="Confirmar contraseña" />
                    <x-input wire:model.defer="password_confirmation" id="password_confirmation" class="w-full"
                        type="password" placeholder="Confirme su contraseña" />
                    @error('password_confirmation')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @endif

            <div class="mt-4">
                <x-button type="submit" class="w-full">
                    {{ __('Continuar') }}
                </x-button>
            </div>
        </form>
    </x-card>
</div>

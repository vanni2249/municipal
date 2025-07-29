<div>

    <form wire:submit.prevent='register'>
        <div class="mt-4">
            <x-label for="text" class="mt-4" value="Nombre" />
            <x-input wire:model.defer="name" @class(['w-full', 'border-red-500'=> $errors->has('name')]) type="text"
                placeholder="Ingrese su nombre" autofocus />
        </div>
        <div class="mt-2">
            <x-label for="email" class="mt-4" value="Correo electronico" />
            <x-input wire:model.defer="email" id="email" @class(['w-full', 'border-red-500'=> $errors->has('email')])
                type="email" placeholder="Ingrese su correo electronico" />
        </div>
        <div class="mt-2">
            <x-label for="password" class="mt-4" value="Contraseña" />
            <x-input wire:model.defer="password" id="password" @class(['w-full', 'border-red-500'=>
                $errors->has('password')]) type="password" placeholder="Ingrese su contraseña" />
                @error('password')
                    <x-error message="{{ $message }}" />
                @enderror
        </div>
        <div class="mt-2">
            <x-label for="password_confirmation" class="mt-4" value="Confirmar contraseña" />
            <x-input wire:model.defer="password_confirmation" id="password_confirmation"
                @class(['w-full', 'border-red-500'=> $errors->has('password_confirmation')]) type="password"
                placeholder="Confirme su contraseña" />
        </div>
        <div class="mt-2">
            <x-label for="phone" class="mt-4" value="Teléfono" />
            <x-input wire:model.defer="phone" id="phone" @class(['w-full', 'border-red-500'=> $errors->has('phone')])
                type="text" placeholder="Ingrese su teléfono" />
        </div>
        @if (in_array($role, ['merchant', 'accountant','contractor','supplier']))
        <div class="mt-2">
            <x-label for="company_name" class="mt-4" value="Nombre de la empresa" />
            <x-input wire:model.defer="company_name" id="company_name" @class(['w-full', 'border-red-500'=> $errors->has('company_name')])
                type="text" placeholder="Ingrese el nombre de su empresa" />
        </div>
        <div class="mt-2">
            <x-label for="number" class="mt-4" value="Número de comerciante" />
            <x-input wire:model.defer="number" id="number" @class(['w-full', 'border-red-500'=> $errors->has('number')])
                type="text" placeholder="Ingrese el número de comerciante" />
        </div>

        @endif
        <!-- Address -->
        @if (in_array($role, ['citizen', 'merchant', 'accountant','contractor','supplier']))
        <div class="mt-2">
            <x-label for="address" class="mt-4" value="Dirección" />
            <x-input wire:model.defer="address" id="address" @class(['w-full', 'border-red-500'=>
                $errors->has('address')]) type="text" placeholder="Ingrese su dirección" />
        </div>
        <div class="grid grid-cols-2 gap-4 mt-2">
            <div class="">
                <x-label for="city" class="mt-4" value="Ciudad" />
                <x-input wire:model.defer="city" id="city" @class(['w-full', 'border-red-500'=> $errors->has('city')])
                    type="text" placeholder="Ingrese su ciudad" />
            </div>
            <div class="">

                <x-label for="postal_code" class="mt-4" value="Código Postal" />
                <x-input wire:model.defer="postal_code" id="postal_code" @class(['w-full', 'border-red-500'=>
                    $errors->has('postal_code')])
                    type="text" placeholder="Ingrese su código postal" />
            </div>
        </div>
        <div class="mt-2">
            <x-label for="date_of_birth" class="mt-4" value="Fecha de nacimiento" />
            <x-input wire:model.defer="date_of_birth" id="date_of_birth" @class(['w-full text-gray-400', 'border-red-500'=>
                $errors->has('date_of_birth')]) type="date" placeholder="Ingrese su fecha de nacimiento" />
        </div>
        @endif

        <div class="mt-2">
            <div class="flex items-center space-x-2">

                <div class="pt-1">
                    <x-checkbox wire:model.defer="terms" @class(['w-full']) />
                </div>
                <a href="#">
                    <x-label for="terms" value="Acepto los términos y condiciones" />
                </a>
            </div>
            @error('terms')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>

            @enderror
        </div>
        <div class="mt-8">
            <x-button class="w-full">
                {{ __('Registrar') }}
            </x-button>
        </div>
        @foreach ($errors->all() as $item)
            <div class="text-red-500 text-xs mt-1">{{ $item }}</div>
        @endforeach
    </form>
</div>
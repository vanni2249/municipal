<form wire:submit="save" class="">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Información personal</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación para crear un nuevo comerciante. Asegúrate de que la información sea
                correcta antes de enviar el formulario.
            </p>
        </div>
        <div class="col-span-full md:col-span-4 grid grid-cols-6 gap-4">
            <!-- Name -->
            <div class="col-span-full md:col-span-3">
                <x-label for="Name" value="Nombre" />
                <x-input wire:model="form.name" name="name" id="name" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.name'),
                ]) />
                @error('form.name')
                    <x-error message="{{ $message }}"/>
                @enderror
            </div>
            <!-- Lastname -->
            <div class="col-span-full md:col-span-3">
                <x-label for="lastname" value="Apellido" />
                <x-input wire:model="form.lastname" name="lastname" id="lastname" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.lastname'),
                ]) />
                @error('form.lastname')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Email -->
            <div class="col-span-full md:col-span-4 md:col-start-1">
                <x-label for="email" value="Email" />
                <x-input wire:model="form.email" name="email" id="email" type="email" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.email'),
                ]) />
                @error('form.email')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Phone -->
            <div class="col-span-full md:col-span-2 lg:col-span-2">
                <x-label for="phone" value="Teléfono" />
                <x-input wire:model="form.phone" name="phone" id="phone" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.phone'),
                ]) />
                @error('form.phone')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Date of birth -->
            <div class="col-start-1 col-span-full md:col-span-2 md:col-start-1">
                <x-label for="date_of_birth" value="Fecha de Nacimiento" />
                <x-input wire:model="form.date_of_birth" name="date_of_birth" id="date_of_birth" type="date" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.date_of_birth'),
                ]) />
                @error('form.date_of_birth')
                    <x-error message="{{ $message }}"/>
                @enderror
            </div>
        </div>
        <div class="col-span-full py-4"></div>
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Dirección postal</h2>
            <p class="text-sm text-gray-500 mt-2">
                Proporciona la dirección postal del comerciante. Asegúrate de que la información sea precisa para evitar
                problemas para contactarlo.
            </p>
        </div>
        <div class="col-span-full md:col-span-4 grid grid-cols-6 gap-4">
            <!-- Dirección -->
            <div class="col-start-1 col-span-full">
                <x-label for="address" value="Dirección" />
                <x-input wire:model="form.address" name="address" id="address" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.address'),
                ]) />
            </div>
            <!-- City -->
            <div class="col-span-full md:col-span-4 md:col-start-1">
                <!-- City -->
                <x-label for="city" value="Ciudad" />
                <x-input wire:model="form.city" name="city" id="city" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.city'),
                ]) />
            </div>
            <!-- Postal code -->
            <div class="col-span-full md:col-span-2">
                <x-label for="postal_code" value="Código postal" />
                <x-input wire:model="form.postal_code" name="postal_code" id="postal_code" type="number" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.postal_code'),
                ])
                    placeholder="Código postal" />
            </div>
            <!-- Button -->
            <div class="col-span-full">
                <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
            </div>
        </div>
    </div>
</form>

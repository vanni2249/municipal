<form wire:submit="save" class="space-y-2">
    <!-- Name -->
    <div>
        <x-label for="Name" value="Nombre" />
        <x-input wire:model="form.name" type="text" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.name'),
        ]) />
    </div>
    <!-- Email -->
    <div>
        <x-label for="email" value="Email" />
        <x-input wire:model="form.email" type="email" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.email'),
        ]) />
        @error('form.email')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
    <!-- Phone -->
    <div>
        <x-label for="phone" value="Telefono" />
        <x-input wire:model="form.phone" type="text" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.phone'),
        ]) />
        @error('form.phone')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
    <!-- Date of birth -->
    <div>
        <x-label for="date_of_birth" value="Fecha de Nacimiento" />
        <x-input wire:model="form.date_of_birth" type="date" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.date_of_birth'),
        ]) />
    </div>
    <!-- Dirreccion -->
    <div>
        <x-label for="address" value="Direccion" />
        <x-input wire:model="form.address" type="text" @class([
            'mt-1 block w-full',
            'border-red-300' => $errors->has('form.address'),
        ]) />
    </div>
    <!-- City & Postal code -->
    <div class="grid grid-cols-3 gap-4">
        <!-- City -->
        <div class="col-span-2">
            <x-label for="city" value="Ciudad" />
            <x-input wire:model="form.city" type="text" @class([
                'mt-1 block w-full',
                'border-red-300' => $errors->has('form.city'),
            ]) />
        </div>
        <!-- Postal code -->
        <div>
            <x-label for="postal_code" value="Codigo postal" />
            <x-input wire:model="form.postal_code" type="number" @class([
                'mt-1 block w-full',
                'border-red-300' => $errors->has('form.postal_code'),
            ])
                placeholder="Codigo postal" />
        </div>
        <!-- Button -->
        <div class="mt-4 w-full">
            <x-button type="submit" class="w-full">Enviar</x-button>
        </div>
    </div>
</form>

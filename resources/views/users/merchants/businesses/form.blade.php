<form wire:submit.prevent="saveBusiness" class="space-y-4">
    <!-- Name -->
    <div>
        <x-label for="Name" value="Nombre" />
        <x-input wire:model="form.business_name" type="text" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.business_name'),
        ]) />
    </div>
    <!-- Email -->
    <div>
        <x-label for="business_number" value="Numero de comercio" />
        <x-input wire:model="form.business_number" type="number" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.business_number'),
        ]) />
        @error('form.business_number')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
    <!-- Phone -->
    <div>
        <x-label for="business_phone" value="Telefono" />
        <x-input wire:model="form.business_phone" type="text" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.business_phone'),
        ]) />
        @error('form.business_phone')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
    <!-- Dirreccion -->
    <div>
        <x-label for="business_address" value="Direccion" />
        <x-input wire:model="form.business_address" type="text" @class([
            'mt-1 block w-full',
            'border-red-300' => $errors->has('form.business_address'),
        ]) />
    </div>
    <!-- City & Postal code -->
    <div class="grid grid-cols-3 gap-4">
        <!-- City -->
        <div class="col-span-2">
            <x-label for="business_city" value="Ciudad" />
            <x-input wire:model="form.business_city" type="text" @class([
                'mt-1 block w-full',
                'border-red-300' => $errors->has('form.business_city'),
            ]) />
        </div>
        <!-- Postal code -->
        <div>
            <x-label for="business_postal_code" value="Codigo postal" />
            <x-input wire:model="form.business_postal_code" type="number" @class([
                'mt-1 block w-full',
                'border-red-300' => $errors->has('form.business_postal_code'),
            ])
                placeholder="Codigo postal" />
        </div>
        <!-- Button -->
        <div class="mt-4 w-full">
            <x-button type="submit" class="w-full">Enviar</x-button>
        </div>
    </div>
</form>
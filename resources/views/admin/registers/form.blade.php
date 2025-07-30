<div>
    <x-label value="Nombre" />
    <x-input wire:model.defer="name" id="name" name="name" type="text" class="w-full" placeholder="Nombre" />
    @error('name')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div>
    <x-label value="Email" />
    <x-input wire:model.defer="email" id="email" name="email" type="email" class="w-full" placeholder="Email" />
    @error('email')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div>
    <x-label value="Telefono" />
    <x-input wire:model.defer="phone" id="phone" name="phone" type="text" class="w-full" placeholder="Telefono" />
    @error('phone')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div>
    <x-label value="Direccion" />
    <x-input wire:model.defer="address" id="address" name="address" type="text" class="w-full"
        placeholder="Direccion" />
    @error('address')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div>
    <x-label value="Ciudad" />
    <x-input wire:model.defer="city" id="city" name="city" type="text" class="w-full" placeholder="Ciudad" />
    @error('city')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div>
    <x-label value="Codigo Postal" />
    <x-input wire:model.defer="postal_code" id="postal_code" name="postal_code" type="text" class="w-full"
        placeholder="Codigo Postal" />
    @error('postal_code')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div>
    <x-label value="Fecha de Nacimiento" />
    <x-input wire:model.defer="date_of_birth" id="date_of_birth" name="date_of_birth" type="date" class="w-full" />
    @error('date_of_birth')
    <x-error message="{{ $message }}" />
    @enderror
</div>
<div class="flex items-center space-x-4 bg-gray-100 p-4 rounded-md">
    <div class="flex space-x-2 items-center">
        <x-checkbox wire:model.defer="is_veteran" id="is_veteran" name="is_veteran" class="" />
        <span class="text-xs font-bold text-gray-600">Veterano</span>
    </div>
    <div class="flex space-x-2 items-center">
        <x-checkbox wire:model.defer="is_age_advanced" id="is_age_advanced" name="is_age_advanced" />
        <span class="text-xs font-bold text-gray-600">Edad Avanzada</span>
    </div>
    <div class="flex space-x-2 items-center">
        <x-checkbox wire:model.defer="is_bedridden" id="is_bedridden" name="is_bedridden" />
        <span class="text-xs font-bold text-gray-600">Encamado</span>
    </div>
    <div class="flex space-x-2 items-center">
        <x-checkbox wire:model.defer="is_disabled" id="is_disabled" name="is_disabled" />
        <span class="text-xs font-bold text-gray-600">Discapacitado</span>
    </div>
</div>
<div>
    <x-button type="submit" class="w-full" color="primary">Crear Registro</x-button>
</div>
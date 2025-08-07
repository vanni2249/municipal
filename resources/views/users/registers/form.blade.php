<form wire:submit="save" class="space-y-2">
    <!-- Name -->
    <div>
        <x-label for="Name" value="Nombre" />
        <x-input wire:model="form.name" type="text" @class([
            'mt-1 block w-full',
            'border-red-400' => $errors->has('form.name'),
        ]) />
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
            <x-label for="city" value="Lugar" />
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
            ]) placeholder="Codigo postal" />
        </div>
    </div>
    <!-- Speciality -->
    <div class="mt-2 grid grid-cols-2 gap-4 bg-gray-200 p-4 rounded-md">
        <div class="flex space-x-2 items-center">
            <x-checkbox wire:model.defer="form.is_veteran" id="is_veteran" name="is_veteran" class="" />
            <span class="text-xs font-bold text-gray-600">Veterano</span>
        </div>
        <div class="flex space-x-2 items-center">
            <x-checkbox wire:model.defer="form.is_age_advanced" id="is_age_advanced" name="is_age_advanced" />
            <span class="text-xs font-bold text-gray-600">Edad Avanzada</span>
        </div>
        <div class="flex space-x-2 items-center">
            <x-checkbox wire:model.defer="form.is_bedridden" id="is_bedridden" name="is_bedridden" />
            <span class="text-xs font-bold text-gray-600">Encamado</span>
        </div>
        <div class="flex space-x-2 items-center">
            <x-checkbox wire:model.defer="form.is_disability" id="is_disability" name="is_disability" />
            <span class="text-xs font-bold text-gray-600">Discapacitado</span>
        </div>
    </div>
    <!-- Disability type -->
    <div>
        <x-label for="" value="Tipo de discapacidad" />
        <x-select id="disability_type" class="mt-1 block w-full" name="disability_type">
            <option value="">Seleccione una opción</option>
            <option value="visual">Visual</option>
            <option value="auditive">Auditiva</option>
            <option value="motor">Motora</option>
            <option value="intelectual">Intelectual</option>
            <option value="multiple">Múltiple</option>
        </x-select>
    </div>
    <!-- Emergency contact -->
    <div>
        <x-label for="emergency_contact" value="Contacto de emergencia" />
        <x-input id="emergency_contact" type="text" class="mt-1 block w-full" name="emergency_contact"
            placeholder="Nombre del contacto de emergencia" />
    </div>
    <!-- Emergency contact phone -->
    <div>
        <x-label for="emergency_contact_phone" value="Telefono de contacto de emergencia" />
        <x-input id="emergency_contact_phone" type="text" class="mt-1 block w-full" name="emergency_contact_phone"
            placeholder="Telefono del contacto de emergencia" />
    </div>
    <!-- terms & conditions -->
    <div class="mt-4">
        <div class="flex items-center space-x-2">
            <x-checkbox wire:model="terms" name="terms" />
            <label for="terms" class="text-xs text-gray-600">Acepto los <a href="#"
                    class="text-blue-500">términos y condiciones</a></label>
        </div>
        @error('terms')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
    <!-- Button -->
    <div class="mt-4"></div>
    <x-button type="submit" class="w-full">Enviar</x-button>
</form>

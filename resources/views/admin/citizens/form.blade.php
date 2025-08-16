<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Información del ciudadano</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación para crear un nuevo ciudadano.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <!-- Name -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Nombre" />
                <x-input wire:model.defer="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre" />
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Lastname -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Apellido" />
                <x-input wire:model.defer="form.lastname" id="lastname" name="lastname" type="text" class="w-full"
                    placeholder="Apellido" />
                @error('form.lastname')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Date of birth -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Fecha de Nacimiento" />
                <x-input wire:model.defer="form.date_of_birth" id="date_of_birth" name="date_of_birth" type="date"
                    class="w-full" />
                @error('form.date_of_birth')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Email -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Email" />
                <x-input wire:model.defer="form.email" id="email" name="email" type="email" class="w-full"
                    placeholder="Email" />
                @error('form.email')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Phone -->
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Teléfono" />
                <x-input wire:model.defer="form.phone" id="phone" name="phone" type="text" class="w-full"
                    placeholder="Teléfono" />
                @error('form.phone')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full py-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Dirección residencial</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación con la información de la dirección del ciudadano.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <!-- Place -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Lugar" />
                <x-select wire:model.defer="form.place_id" class="col-span-full w-full" id="place_id">
                    <option value="">Seleccione un lugar</option>
                    @foreach ($places as $place)
                        <option value="{{ $place->id }}">{{ $place->name }}</option>
                    @endforeach
                </x-select>
                @error('form.place_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Address -->
            <div class="col-span-full">
                <x-label value="Dirección" />
                <x-input wire:model.defer="form.address" id="address" name="address" type="text" class="w-full"
                    placeholder="Address" />
                @error('form.address')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- City -->
            <div class="col-span-full md:col-span-1 lg:col-start-1">
                <x-label for="city" value="Ciudad" />
                <x-input wire:model.defer="form.city" id="city" name="city" type="text" class="w-full"
                    placeholder="Ciudad" />
                @error('form.city')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Postal code -->
            <div class="col-span-full md:col-span-1 lg:col-start-2">
                <x-label value="Código de area" />
                <x-input wire:model.defer="form.postal_code" id="postal_code" name="postal_code" type="text"
                    class="w-full" placeholder="Código de area" />
                @error('form.postal_code')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full py-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">
                Información adicional
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                Aquí puedes agregar información adicional sobre el ciudadano, como si es veterano, tiene alguna
                discapacidad, etc.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-4 gap-4">
            <!-- Is Veteran -->
            <div class="col-span-full md:col-span-2 lg:col-span-1 ">
                <div class="border border-gray-300 p-2.5 rounded flex items-center space-x-2">
                    <x-checkbox wire:model.defer.live="form.is_veteran" id="is_veteran" name="is_veteran"
                        class="" />
                    <small class="text-gray-800">Veterano</small>
                </div>
            </div>
            <!-- Is Age Advanced -->
            <div class="col-span-full md:col-span-2 lg:col-span-1">
                <div class="border border-gray-300 p-2.5 rounded flex items-center space-x-2">
                    <x-checkbox wire:model.defer.live="form.is_age_advanced" id="is_age_advanced"
                        name="is_age_advanced" class="" />
                    <small class="text-gray-800">Edad avanzada</small>
                </div>
            </div>
            <!-- Is Bedridden -->
            <div class="col-span-full md:col-span-2 lg:col-span-1">
                <div class="border border-gray-300 p-2.5 rounded flex items-center space-x-2">
                    <x-checkbox wire:model.defer.live="form.is_bedridden" id="is_bedridden" name="is_bedridden"
                        class="" />
                    <small class="text-gray-800">Postrado en cama</small>
                </div>
            </div>
            <!-- Is Disabled -->
            <div class="col-span-full md:col-span-2 lg:col-span-1">
                <div class="border border-gray-300 p-2.5 rounded flex items-center space-x-2">

                    <x-checkbox wire:model.defer.live="form.is_disability" id="is_disability" name="is_disability"
                        class="" />
                    <small class="text-gray-800">Discapacitado</small>
                </div>
            </div>
            <!-- disability type -->
            @if ($form->is_disability)
                <div class="col-span-full">
                    <x-label value="Tipo de discapacidad" />
                    <x-input wire:model.defer="form.disability_type" id="disability_type" name="disability_type"
                        type="text" class="w-full" placeholder="Tipo de discapacidad" />
                    @error('form.disability_type')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @endif
            @if ($form->is_veteran || $form->is_age_advanced || $form->is_bedridden || $form->is_disability)
                <!-- Emergency contact -->
                <div class="col-span-full md:col-span-2">
                    <x-label for="emergency_contact" value="Contacto de emergencia" />
                    <x-input wire:model.defer="form.emergency_contact" id="emergency_contact"
                        name="emergency_contact" type="text" class="w-full" placeholder="Nombre de contacto" />
                    @error('form.emergency_contact')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- Emergency phone -->
                <div class="col-span-full md:col-span-2">
                    <x-label value="Teléfono de contacto" />
                    <x-input wire:model.defer="form.emergency_contact_phone" id="emergency_contact_phone"
                        name="emergency_contact_phone" type="text" class="w-full" placeholder="Teléfono" />
                    @error('form.emergency_contact_phone')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @endif
            @if (!$form->citizen)
                <div class="mt-6 col-span-full">
                    <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
                </div>
            @endif
        </div>
        @if ($form->citizen)
            <div class="col-span-full py-4"></div>
            <div class="col-span-full lg:col-span-2">
                <h2 class="font-bold text-gray-600">
                    Ajustes adicionales
                </h2>
                <p class="text-sm text-gray-500 mt-2">
                    Aquí puedes ajustar configuraciones adicionales relacionadas con el ciudadano, como su estado de
                    registro o si está activo en el sistema.
                </p>
            </div>
            <div class="col-span-full lg:col-span-4 grid grid-cols-4 gap-4">
                <!-- Is Active -->
                <div class="col-span-full md:col-span-2 lg:col-span-1">
                    <div class="border border-gray-300 p-2.5 rounded flex items-center space-x-2">
                        <x-checkbox wire:model.defer.live="form.is_disabled" id="is_disabled" name="is_disabled"
                            class="" />
                        <small class="text-gray-800">Desactivado</small>
                    </div>
                </div>
                <div class="mt-6 col-span-full">
                    <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
                </div>
            </div>
        @endif

    </div>
</form>

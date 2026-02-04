<div>
    <x-card>
        <form wire:submit.prevent="store">
            <x-form-elements>
                <!-- Name -->
                <x-form-element class="col-span-6 lg:col-span-4">
                    <x-label for="name" value="Nombre" />
                    <x-input id="name" type="text" wire:model="name" @class(['w-full', 'border-red-500' => $errors->has('name')]) />
                    @error('name')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Lastname -->
                <x-form-element class="col-span-6 lg:col-span-4">
                    <x-label for="lastname" value="Apellido" />
                    <x-input id="lastname" type="text" wire:model="lastname" @class(['w-full', 'border-red-500' => $errors->has('lastname')]) />
                    @error('lastname')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Date of Birth -->
                <x-form-element class="col-span-full md:col-span-4 lg:col-span-3 lg:col-start-1 xl:col-span-2 xl:col-start-1">
                    <x-label for="birth_date" value="Fecha de Nacimiento" />
                    <x-input id="birth_date" type="date" wire:model="birth_date"
                        @class(['w-full', 'border-red-500' => $errors->has('birth_date')]) />
                    @error('birth_date')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- is disabled -->
                <x-form-element class="col-span-full col-start-1 md:col-span-4 md:col-start-1 lg:col-span-4 lg:col-start-1 xl:col-span-3 xl:col-start-1">
                    <x-label for="disabled_type" value="Discapacidad" />

                    <div class="border border-gray-300 rounded p-2 flex items-center space-x-2">
                        <div class="pt-1">
                            <x-checkbox value="is_disabled" wire:model.defer="is_disabled" name="is_disabled"
                                @class(['w-full']) />
                        </div>
                        <a href="#">
                            <x-label for="is_disabled" value="¿Es Discapacitado?" />
                        </a>
                    </div>
                    @error('is_disabled')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Disabled type -->
                {{-- @if ($is_disabled) --}}
                <x-form-element class="col-span-full md:col-span-8 lg:col-span-5">
                    <x-label for="disability_type" value="Tipo de Discapacidad" />
                    <x-input id="disability_type" type="text" wire:model="disability_type"
                        @class(['w-full', 'border-red-500' => $errors->has('disability_type')]) />
                    @error('disability_type')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                {{-- @endif --}}

                <!-- is veteran -->
                <x-form-element class="col-span-full col-start-1 md:col-span-4 md:col-start-1 lg:col-span-4 lg:col-start-1 xl:col-span-3 xl:col-start-1">
                    <x-label for="is_veteran" value="Veterano" />

                    <div class="border border-gray-300 rounded p-2 flex items-center space-x-2">
                        <div class="pt-1">
                            <x-checkbox value="is_veteran" wire:model.defer="is_veteran" name="is_veteran"
                                @class(['w-full']) />
                        </div>
                        <a href="#">
                            <x-label for="is_veteran" value="¿Es Veterano?" />
                        </a>
                    </div>
                    @error('is_veteran')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- relationship -->
                <x-form-element class="col-span-full md:col-span-6 lg:col-span-3 lg:col-start-1 xl:col-span-2 xl:col-start-1">
                    <x-label for="relationship" value="Relación" />
                    <x-input id="relationship" type="text" wire:model="relationship"
                        @class(['w-full', 'border-red-500' => $errors->has('relationship')]) />
                    @error('relationship')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Contact person -->
                <x-form-element class="col-span-full md:col-span-6 lg:col-span-6 ">
                    <x-label for="contact_person" value="Persona de Contacto" />
                    <x-input id="contact_person" type="text" wire:model="contact_person"
                        @class(['w-full', 'border-red-500' => $errors->has('contact_person')]) />
                    @error('contact_person')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Contact phone -->
                <x-form-element class="col-span-full col-start-1 md:col-span-4 md:col-start-1 lg:col-span-4 lg:col-start-1 xl:col-span-3 xl:col-start-1">
                    <x-label for="contact_phone" value="Teléfono de Contacto" />
                    <x-input id="contact_phone" type="text" wire:model="contact_phone"
                        @class(['w-full', 'border-red-500' => $errors->has('contact_phone')]) />
                    @error('contact_phone')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Address -->
                <x-form-element class="col-span-full col-start-1 md:col-span-9 md:col-start-1 lg:col-span-9 lg:col-start-1 xl:col-span-8 xl:col-start-1">
                    <x-label for="address" value="Dirección" />
                    <x-input id="address" type="text" wire:model="address"
                        @class(['w-full', 'border-red-500' => $errors->has('address')]) />
                    @error('address')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Place_id -->
                <x-form-element class="col-span-full col-start-1 md:col-span-6 md:col-start-1 lg:col-span-6 lg:col-start-1 xl:col-span-3 xl:col-start-1">
                    <x-label for="place_id" value="Lugar" />
                    <x-select id="place_id" wire:model="place_id" @class(['w-full', 'border-red-500' => $errors->has('place_id')])>
                        <option value="">Seleccione un lugar</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </x-select>
                    @error('place_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- zip code -->
                <x-form-element class="col-span-full col-start-1 md:col-span-3 lg:col-span-3 xl:col-span-2">
                    <x-label for="zip_code" value="Código Postal" />
                    <x-input id="zip_code" type="text" wire:model="zip_code"
                        @class(['w-full', 'border-red-500' => $errors->has('zip_code')]) />
                    @error('zip_code')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full col-start-1 mt-4">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

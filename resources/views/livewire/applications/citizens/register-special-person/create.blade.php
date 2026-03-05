<div class="space-y-2">
    <x-card>
        <x-breadcrumb :array="[
            [
                'label' => 'Ciudadanos',
                'href' => route('admin.citizens', ['department' => request()->department()]),
            ],
            [
                'label' => $account->name(),
                'href' => route('admin.citizens.show', [
                    'department' => request()->department(),
                    'citizen' => $account->ulid,
                ]),
            ],
            [
                'label' => $service->title,
                'href' => null,
            ],
        ]" />
        <x-h1 value="{{ $service->title }}" />
    </x-card>

    <x-card class="grid grid-cols-12 gap-2">
        <form wire:submit.prevent="store" class="col-span-full lg:col-span-8">
            <x-form-elements>
                <!-- Name -->
                <x-form-element class="col-span-full md:col-span-6">
                    <x-label for="name" value="Nombre" />
                    <x-input id="name" type="text" wire:model.defer="name" @class(['w-full', 'border-red-500' => $errors->has('name')]) />
                </x-form-element>

                <!-- Last Name -->
                <x-form-element class="col-span-full md:col-span-6">
                    <x-label for="last_name" value="Apellido" />
                    <x-input id="last_name" type="text" wire:model.defer="last_name" @class(['w-full', 'border-red-500' => $errors->has('last_name')]) />
                </x-form-element>

                <!-- Birth Date -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="birth_date" value="Fecha de Nacimiento" />
                    <x-input id="birth_date" type="date" wire:model.defer="birth_date"
                        @class(['w-full', 'border-red-500' => $errors->has('birth_date')]) />
                </x-form-element>

                <!-- Is Disabled -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="is_disabled" value="¿Es discapacitado?" />
                    <x-select id="is_disabled" wire:model.live="is_disabled" @class(['w-full', 'border-red-500' => $errors->has('is_disabled')])>
                        <option value="">Seleccione una opción</option>
                        <option value="1">Sí, es discapacitado</option>
                        <option value="0">No, no es discapacitado</option>
                    </x-select>
                </x-form-element>

                <!-- Disabled Type -->
                @if ($is_disabled)
                    <x-form-element class="col-span-full">
                        <x-label for="disability_type" value="Tipo de Discapacidad" />
                        <x-input id="disability_type" type="text" wire:model.defer="disability_type"
                            @class([
                                'w-full',
                                'border-red-500' => $errors->has('disability_type'),
                            ]) />
                    </x-form-element>
                @endif

                <!-- Is Veteran -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="is_veteran" value="¿Es veterano?" />
                    <x-select id="is_veteran" wire:model.live="is_veteran" @class(['w-full', 'border-red-500' => $errors->has('is_veteran')])>
                        <option value="">Seleccione una opción</option>
                        <option value="1">Sí, es veterano</option>
                        <option value="0">No, no es veterano</option>
                    </x-select>
                </x-form-element>

                <!-- Contact Person -->
                <x-form-element class="col-span-full">
                    <x-label for="contact_person" value="Persona de Contacto" />
                    <x-input id="contact_person" type="text" wire:model.defer="contact_person"
                        @class(['w-full', 'border-red-500' => $errors->has('contact_person')]) />
                </x-form-element>

                <!-- Relationship -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="relationship" value="Relación" />
                    <x-input id="relationship" type="text" wire:model.defer="relationship"
                        @class(['w-full', 'border-red-500' => $errors->has('relationship')]) />
                </x-form-element>

                <!-- Contact Phone -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="contact_phone" value="Teléfono de Contacto" />
                    <x-input id="contact_phone" type="text" wire:model.defer="contact_phone"
                        @class(['w-full', 'border-red-500' => $errors->has('contact_phone')]) />
                </x-form-element>

                <!-- Address -->
                <x-form-element class="col-span-full">
                    <x-label for="address" value="Dirección" />
                    <x-input id="address" type="text" wire:model.defer="address" @class(['w-full', 'border-red-500' => $errors->has('address')]) />
                </x-form-element>

                <!-- Place -->
                <x-form-element class="col-span-6">
                    <x-label for="place_id" value="Lugar" />
                    <x-select id="place_id" wire:model.defer="place_id" @class(['w-full', 'border-red-500' => $errors->has('place_id')])>
                        <option value="">Seleccione un lugar</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </x-select>
                </x-form-element>

                <!-- Zip code -->
                <x-form-element class="col-span-6">
                    <x-label for="zip_code" value="Código Postal" />
                    <x-input id="zip_code" type="text" wire:model.defer="zip_code" @class(['w-full', 'border-red-500' => $errors->has('zip_code')]) />
                </x-form-element>

                <!-- Remarks -->
                <x-form-element class="col-span-full">
                    <x-label for="remarks" value="Observaciones" />
                    <x-input id="remarks" type="text" wire:model.defer="remarks" @class(['w-full', 'border-red-500' => $errors->has('remarks')]) />
                </x-form-element>

                <!-- Submit Button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit" class="w-auto">Enviar Solicitud</x-button>
                </x-form-element>

                {{-- @foreach ($errors->all() as $error)
                    <div class="col-span-full text-red-500">{{ $error }}</div>
                @endforeach --}}
            </x-form-elements>
        </form>
    </x-card>
    {{-- Be like water. --}}
</div>

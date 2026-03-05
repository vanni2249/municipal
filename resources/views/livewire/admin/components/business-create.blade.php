<div>
    <x-button variant="light" size="sm"  label="Crear negocio" @click="$dispatch('open-modal', 'business-create-modal')" />
    <x-modal name="business-create-modal" title="Crear negocio">
        <form wire:submit.prevent="store">
            <x-form-elements>
                <!-- Business name -->
                <x-form-element class="col-span-full">
                    <x-label for="Nombre" value="Nombre"/>
                    <x-input wire:model.defer="name" id="Nombre" type="text" @class(['w-full', 'border-red-500' => $errors->has('name')]) />
                </x-form-element>
                <!-- Business type -->
                <x-form-element class="col-span-full">
                    <x-label for="Tipo" value="Tipo"/>
                    <x-select wire:model.defer="business_type_id" id="Type" @class(['w-full', 'border-red-500' => $errors->has('business_type_id')])>
                        <option value="">Selecciona un tipo de negocio</option>
                        @foreach($businessTypes as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </x-select>
                </x-form-element>
                <!-- Address -->
                <x-form-element class="col-span-full">
                    <x-label for="Direccion" value="Dirección"/>
                    <x-input wire:model.defer="address" id="address" name="address" type="text" @class(['w-full', 'border-red-500' => $errors->has('address')]) />
                </x-form-element>

                <!-- Place -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="Lugar" value="Lugar"/>
                    <x-select wire:model.defer="place_id" id="Lugar" @class(['w-full', 'border-red-500' => $errors->has('place_id')])>
                        <option value="">Selecciona un lugar</option>
                        @foreach($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </x-select>
                </x-form-element>

                <!-- Postal code -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="PostalCode" value="Código Postal"/>
                    <x-input wire:model.defer="postal_code" id="PostalCode" name="postal_code" type="text" @class(['w-full', 'border-red-500' => $errors->has('postal_code')]) />
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit" label="Crear negocio" />
                </x-form-element>
            </x-form-elements>
        </form>
    </x-modal>
</div>

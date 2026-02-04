<div>
    <x-card>
        <form wire:submit.prevent="store">
            <x-form-elements>
                <!-- Owner name -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="owner_name" value="Nombre del propietario" />
                    <x-input id="owner_name" type="text" wire:model="owner_name" @class(['w-full', 'border-red-500' => $errors->has('owner_name')]) />
                    @error('owner_name')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                <!-- Select address -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="address_id" value="Dirección" />
                    <x-select id="address_id" wire:model="address_id" @class(['w-full', 'border-red-500' => $errors->has('address_id')])>
                        <option value="">Seleccione dirección</option>
                        @foreach ($addresses as $address)
                            <option value="{{ $address->id }}">{{ $address->address }}</option>
                        @endforeach
                    </x-select>
                    @error('address_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- contractor name -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="contractor_name" value="Nombre del contratista" />
                    <x-input id="contractor_name" type="text" wire:model="contractor_name" @class(['w-full', 'border-red-500' => $errors->has('contractor_name')]) />
                    @error('contractor_name')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Description -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="description" value="Descripción" />
                    <x-textarea id="description" wire:model="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) rows="4" />
                    @error('description')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>


                <!-- Submit button -->
                <x-form-element class="col-span-6 col-start-1   ">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

<div>
    <x-card>
        <form wire:submit.prevent="store">
            <x-form-elements>
                <!-- Select property -->
                <x-form-element class="col-span-full lg:col-span-6">
                    <x-label for="property_id" value="Propiedad" />
                    <x-select id="property_id" wire:model="property_id" @class(['w-full appearance-none', 'border-red-500' => $errors->has('property_id')])>
                        <option value="">Seleccione Propiedad</option>
                        @foreach ($properties as $property)
                            <option value="{{ $property->id }}">{{ $property->name }}</option>
                        @endforeach
                    </x-select>
                    @error('property_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Selecte date -->
                <x-form-element class="col-span-full md:col-span-6 md:col-start-1 lg:col-span-3 lg:col-start-1">
                    <x-label for="date_at" value="Fecha" />
                    <x-input id="date_at" type="date" wire:model="date_at" @class(['w-full', 'border-red-500 appearance-none' => $errors->has('date_at')]) />
                    @error('date_at')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                <input type="date" name="" id="">

                <!-- Description -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="description" value="Descripción" />
                    <x-textarea id="description" wire:model="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) rows="4" />
                    @error('description')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

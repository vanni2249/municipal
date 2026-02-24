<div>
    <form wire:submit.prevent="store">
        <x-form-elements>
            <!-- Property selection -->
            <x-form-element class="col-span-full">
                <x-label for="property_id" value="Propiedad" />
                <x-select wire:model="property_id" id="property_id" class="w-full">
                    <option value="">Seleccione una propiedad</option>
                    @foreach($properties as $property)
                        <option value="{{ $property->id }}">{{ $property->name }}</option>
                    @endforeach
                </x-select>
            </x-form-element>

            <!-- Description -->
            <x-form-element class="col-span-full">
                <x-label for="description" value="Descripción" />
                <x-textarea wire:model="description" id="description" class="w-full" />
            </x-form-element>

            <!-- Submit button -->
            <x-form-element class="col-span-full">
                <x-button type="submit" class="w-auto">Crear</x-button>
            </x-form-element>
        </x-form-elements>
    </form>
</div>

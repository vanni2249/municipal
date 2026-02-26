<form wire:submit.prevent="save">
    <x-form-elements>
        <!-- Name -->
        <x-form-element class="col-span-full lg:col-span-6">
            <x-label value="Nombre" for="name" />
            <x-input id="name" wire:model.defer="name" @class(['w-full', 'border-red-500' => $errors->has('name')]) />
        </x-form-element>
        <!-- Address -->
        <x-form-element class="col-span-full">
            <x-label value="Direccion" for="address" />
            <x-input id="address" wire:model.defer="address" @class(['w-full', 'border-red-500' => $errors->has('address')]) />
        </x-form-element>
        <!-- Postal Code -->
        <x-form-element class="col-span-full lg:col-span-6">
            <x-label value="Codigo Postal" for="postal_code" />
            <x-input id="postal_code" wire:model.defer="postal_code" @class(['w-full', 'border-red-500' => $errors->has('postal_code')]) />
        </x-form-element>
        <!-- Place -->
        <x-form-element class="col-span-full lg:col-span-6">
            <x-label value="Lugar" for="place_id" />
            <x-select id="place_id" wire:model.defer="place_id" @class(['w-full', 'border-red-500' => $errors->has('place_id')])>
                <option value="">Seleccione un lugar</option>
                @foreach ($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
            </x-select>
        </x-form-element>

        <!-- Submit Button -->
        <x-form-element class="col-span-full">
            <x-button type="submit" label="Guardar" class="w-auto" />
        </x-form-element>
    </x-form-elements>
</form>

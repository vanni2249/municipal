<div>
    <form wire:submit.prevent="store">
        <x-form-elements>
            <!-- Select Address -->
            <x-form-element class="col-span-full">
                <x-label for="address_id" value="Dirección" />
                <x-select id="address_id" wire:model="address_id" @class(['w-full', 'border-red-500' => $errors->has('address_id')])>
                    <option value="">Seleccione una dirección</option>
                    @foreach ($addresses as $address)
                        <option value="{{ $address->id }}">{{ $address->address }}</option>
                    @endforeach
                </x-select>
            </x-form-element>

            <!-- Description -->
            <x-form-element class="col-span-full">
                <x-label for="description" value="Descripción" />
                <x-textarea id="description" wire:model="description" rows="4"
                    placeholder="Ingrese una descripción del servicio requerido..." @class(['w-full', 'border-red-500' => $errors->has('description')]) />
            </x-form-element>

            <!-- Submit Button -->
            <x-form-element class="col-span-full">
                <x-button type="submit" class="w-auto">Guardar</x-button>
            </x-form-element>
        </x-form-elements>
    </form>
</div>

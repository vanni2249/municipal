<div>
    <form wire:submit.prevent="store">
        <x-form-elements>
            <!-- Select Property -->
            <x-form-element class="col-span-full">
                <x-label for="property_id" value="Property ID" />
                <x-select id="property_id" wire:model="property_id" @class(['w-full', 'border-red-500' => $errors->has('property_id')])>
                    <option value="">Select a property</option>
                    @foreach ($properties as $property)
                        <option value="{{ $property->id }}">{{ $property->name }}</option>
                    @endforeach
                </x-select>
            </x-form-element>

            <!-- Rent Date -->
            <x-form-element class="col-span-6">
                <x-label for="rent_date" value="Rent Date" />
                <x-input id="rent_date" type="date" wire:model="rent_date" @class(['w-full', 'border-red-500' => $errors->has('rent_date')]) />
            </x-form-element>

            <!-- Description -->
            <x-form-element class="col-span-full">
                <x-label for="description" value="Description" />
                <x-textarea id="description" wire:model="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) />
            </x-form-element>

            <!-- Submit Button -->
            <x-form-element class="col-span-full">
                <x-button type="submit" class="w-auto">Submit</x-button>
            </x-form-element>
        </x-form-elements>
    </form>
</div>

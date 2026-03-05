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
        <form wire:submit.prevent="store" class="col-span-full lg:col-span-6">
            <x-form-elements>
                <!-- Property selection -->
                <x-form-element class="col-span-full">
                    <x-label for="property_id" value="Propiedad" />
                    <x-select wire:model="property_id" id="property_id" @class(['w-full', 'border-red-500' => $errors->has('property_id')])>
                        <option value="">Seleccione una propiedad</option>
                        @foreach ($properties as $property)
                            <option value="{{ $property->id }}">{{ $property->name }}</option>
                        @endforeach
                    </x-select>
                </x-form-element>

                <!-- Description -->
                <x-form-element class="col-span-full">
                    <x-label for="description" value="Descripción" />
                    <x-textarea wire:model="description" id="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) />
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit" class="w-auto">Crear</x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

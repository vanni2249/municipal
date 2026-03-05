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
                <!-- Address selection -->
                <x-form-element class="col-span-full">
                    <x-label for="address_id" value="Dirección" />
                    <x-select wire:model="address_id" id="address_id" @class(['w-full', 'border-red-500' => $errors->has('address_id')])>
                        <option value="">Seleccione una dirección</option>
                        @foreach ($addresses as $address)
                            <option value="{{ $address->id }}">{{ $address->address }}</option>
                        @endforeach
                    </x-select>
                </x-form-element>
                <!-- Owner Name -->
                <x-form-element class="col-span-full">
                    <x-label for="owner_name" value="Nombre del propietario" />
                    <x-input wire:model="owner_name" id="owner_name" @class(['w-full', 'border-red-500' => $errors->has('owner_name')]) />
                </x-form-element>
                <!-- Contractor Name -->
                <x-form-element class="col-span-full">
                    <x-label for="contractor_name" value="Nombre del contratista" />
                    <x-input wire:model="contractor_name" id="contractor_name" @class([
                        'w-full',
                        'border-red-500' => $errors->has('contractor_name'),
                    ]) />
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

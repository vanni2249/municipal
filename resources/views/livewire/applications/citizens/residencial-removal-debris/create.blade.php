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
    <x-card>
        <div class="grid grid-cols-12 gap-2">
            <form wire:submit.prevent="store" class="col-span-full lg:col-span-6">
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
                            placeholder="Ingrese una descripción del servicio requerido..."
                            @class(['w-full', 'border-red-500' => $errors->has('description')]) />
                    </x-form-element>

                    <!-- Submit Button -->
                    <x-form-element class="col-span-full">
                        <x-button type="submit" class="w-auto">Guardar</x-button>
                    </x-form-element>
                </x-form-elements>
            </form>
        </div>
    </x-card>
</div>

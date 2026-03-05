<div class="space-y-2">
    <x-card>
        <x-card-header>
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
            <p class="text-sm text-gray-700">{{ $service->description }}</p>
        </x-card-header>
    </x-card>
    <x-card>
        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-full lg:col-span-6">

                <form wire:submit.prevent="store" class="space-y-6">
                    <x-form-elements>
                        <!-- Property -->
                        <x-form-element class="col-span-full">
                            <x-label value="Lugar de uso" for="property_id" />
                            <x-select wire:model="property_id" id="property_id" placeholder="Seleccione el lugar de uso"
                                @class(['w-full', 'border-red-500' => $errors->has('property_id')])>
                                <option value="">Seleccione el lugar de uso</option>
                                @foreach ($properties as $property)
                                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                                @endforeach
                            </x-select>
                        </x-form-element>
                        <!-- Use Date -->
                        <x-form-element class="col-span-full lg:col-span-6">
                            <x-label value="Fecha de uso" for="use_date" />
                            <x-input wire:model="use_date" id="use_date" type="date" @class(['w-full', 'border-red-500' => $errors->has('use_date')]) />
                        </x-form-element>
                        <!-- Description -->
                        <x-form-element class="col-span-full">
                            <x-label value="Descripción" for="description" />
                            <x-textarea wire:model="description" id="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) />
                        </x-form-element>
                        <!-- Submit Button -->
                        <x-form-element class="col-span-full">
                            <x-button type="submit" class="w-auto">Guardar</x-button>
                        </x-form-element>
                    </x-form-elements>
                </form>
            </div>
            <div class="col-span-full lg:col-span-6"></div>

        </div>
    </x-card>
</div>

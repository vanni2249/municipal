<div class="space-y-2">
    <x-card>
         <x-breadcrumb :array="[
                    [
                        'label' => 'Comerciantes',
                        'href' => route('admin.merchants', ['department' => request()->department()]),
                    ],
                    [
                        'label' => $business->account->name(),
                        'href' => route('admin.merchants.show', [
                            'department' => request()->department(),
                            'merchant' => $business->account->ulid,
                        ]),
                    ],
                    [
                        'label' => $business->name,
                        'href' => route('admin.merchants.businesses.show', [
                            'department' => request()->department(),
                            'merchant' => $business->account->ulid,
                            'business' => $business->ulid,
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

                <!-- Business name disabled -->
                <x-form-element class="col-span-full">
                    <x-label value="Nombre del negocio" />
                    <x-input value="{{ $business->name }}" disabled @class(['w-full']) />
                </x-form-element>

                <!-- Address -->
                <x-form-element class="col-span-full">
                    <x-label value="Dirección del negocio" />
                    <x-input value="{{ $business->address->address }}" disabled @class(['w-full']) />
                </x-form-element>

                <!-- Place -->
                <x-form-element class="col-span-6">
                    <x-label value="Lugar del negocio" />
                    <x-input value="{{ $business->address->place->name }}" disabled @class(['w-full']) />
                </x-form-element>

                <!-- Postal Code -->
                <x-form-element class="col-span-6">
                    <x-label value="Código Postal" />
                    <x-input value="{{ $business->address->postal_code }}" disabled @class(['w-full']) />
                </x-form-element>

                <!-- Business owner -->
                <x-form-element class="col-span-full">
                    <x-label value="Propietario del negocio" />
                    <x-input value="{{ $business->account->name() }}" disabled @class(['w-full']) />
                </x-form-element>

                <!-- Description -->
                <x-form-element class="col-span-full">
                    <x-label value="Descripción" />
                    <x-textarea wire:model="description" id="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) />

                </x-form-element>
                <x-form-element class="col-span-full">
                    <x-button type="submit" class="w-auto">Guardar</x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>

</div>

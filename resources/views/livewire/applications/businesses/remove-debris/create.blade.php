<div>
    <form>
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
                <x-button type="button" class="w-auto" wire:click="store">Guardar</x-button>
            </x-form-element>
        </x-form-elements>
    </form>
    {{-- In work, do what you enjoy. --}}
</div>

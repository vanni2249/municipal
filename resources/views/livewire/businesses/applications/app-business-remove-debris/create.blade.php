<div>
    <x-card>
        <form wire:submit.prevent="store">
            <x-form-elements>
                <!-- Business name disabled input -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="business_name" value="Nombre del Negocio" />
                    <x-input id="business_name" type="text" class="w-full" value="{{ $business->name }}" disabled />
                </x-form-element>

                <!-- Business address disabled input -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="business_address" value="Dirección del Negocio" />
                    <x-input id="business_address" type="text" class="w-full" value="{{ $business->address->address }}" disabled />
                </x-form-element>

                <!-- Description -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="description" value="Descripción" />
                    <x-textarea id="description" wire:model="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) rows="4" />
                    @error('description')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

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
                    <x-label for="business_address_id" value="Dirección del Negocio" />
                    <x-input id="business_address_id" type="text" class="w-full"
                        value="{{ $business->address->address ?? '' }}" disabled />
                </x-form-element>

                <!-- Start date -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1 flex flex-col">
                    <x-label for="start_date" value="Fecha de Inicio" />
                    <x-input id="start_date" type="date" class="w-auto" wire:model="start_date"
                        @class(['border-red-500' => $errors->has('start_date')]) />
                    @error('start_date')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Amount -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1 flex flex-col">
                    <x-label for="amount" value="Monto" />

                    <x-input id="amount" type="number" step="0.01" class="w-auto" wire:model="amount"
                        @class(['border-red-500' => $errors->has('amount')]) />
                    @error('amount')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-full mt-6">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

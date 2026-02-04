<div>
    <x-card>
        <form wire:submit.prevent="store">
            <x-form-elements>
                <!-- Select property -->
                <x-form-element class="col-span-1">
                    <x-label for="address_id" value="Dirección" />
                    <x-select id="address_id" wire:model="address_id" @class(['w-full', 'border-red-500' => $errors->has('address_id')])>
                        <option value="">Seleccione dirección</option>
                        @foreach ($addresses as $address)
                            <option value="{{ $address->id }}">{{ $address->address }}</option>
                        @endforeach
                    </x-select>
                    @error('address_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Description -->
                <x-form-element class="col-span-1 col-start-1">
                    <x-label for="description" value="Descripción" />
                    <x-textarea id="description" wire:model="description" @class(['w-full', 'border-red-500' => $errors->has('description')]) rows="4" />
                    @error('description')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>

                <!-- Submit button -->
                <x-form-element class="col-span-1 col-start-1   ">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

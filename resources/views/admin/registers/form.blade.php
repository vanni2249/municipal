<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion personal</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuacion para crear un nuevo registro.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full">
                <x-label value="Tipo" />
                <x-select wire:model.live='form.type_id' @class(['w-full capitalize'])>
                    <option value="">Escoger tipo</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->es_name }}</option>
                    @endforeach
                </x-select>
                @error('form.type_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full">
                <x-label value="Nombre" />
                <x-input wire:model.defer="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre" />
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1">
                <x-label value="Fecha de Nacimiento" />
                <x-input wire:model.defer="form.date_of_birth" id="date_of_birth" name="date_of_birth" type="date"
                    class="w-full" />
                @error('form.date_of_birth')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full py-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion personal</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuacion con la informacion de contacto del registro.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Email" />
                <x-input wire:model.defer="form.email" id="email" name="email" type="email" class="w-full"
                    placeholder="Email" />
                @error('form.email')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Telefono" />
                <x-input wire:model.defer="form.phone" id="phone" name="phone" type="text" class="w-full"
                    placeholder="Telefono" />
                @error('form.phone')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full pt-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Dirreccion residencial</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuacion con la informacion de la dirreccion del registro.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">

            <div class="col-span-full">
                <x-label value="Direccion" />
                <x-input wire:model.defer="form.address" id="address" name="address" type="text" class="w-full"
                    placeholder="Direccion" />
                @error('form.address')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            @if ($form->type_id != 1)
                <div class="lg:col-span-1">
                    <x-label value="Ciudad" />
                    <x-input wire:model.defer="form.city" id="city" name="city" type="text" class="w-full"
                        placeholder="Ciudad" />
                    @error('form.city')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @else
                <div class="lg:col-span-1">
                    <x-label value="Lugar" />
                    <x-select wire:model.defer="form.place_id" id="place_id" name="place_id" class="w-full">
                        <option value="">Seleccionar lugar</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach

                    </x-select>
                    @error('form.place_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @endif
            <div class="lg:col-span-1">
                <x-label value="Codigo Postal" />
                <x-input wire:model.defer="form.postal_code" id="postal_code" name="postal_code" type="text"
                    class="w-full" placeholder="Codigo Postal" />
                @error('form.postal_code')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>

            @if ($form->type_id == 1)
                <div class="col-span-full flex justify-between items-center space-x-4 bg-gray-100 p-4 rounded-md">
                    <div class="flex space-x-2 items-center">
                        <x-checkbox wire:model.defer="form.is_veteran" id="is_veteran" name="is_veteran"
                            class="" />
                        <span class="text-xs font-bold text-gray-600">Veterano</span>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <x-checkbox wire:model.defer="form.is_age_advanced" id="is_age_advanced"
                            name="is_age_advanced" />
                        <span class="text-xs font-bold text-gray-600">Edad Avanzada</span>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <x-checkbox wire:model.defer="form.is_bedridden" id="is_bedridden" name="is_bedridden" />
                        <span class="text-xs font-bold text-gray-600">Encamado</span>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <x-checkbox wire:model.defer="form.is_disabled" id="is_disabled" name="is_disabled" />
                        <span class="text-xs font-bold text-gray-600">Discapacitado</span>
                    </div>
                </div>
            @endif
            <div class="my-4 col-span-full">
                <x-button type="submit" class="w-full md:w-auto whitespace-nowrap" color="primary">Crear
                    Comerciante</x-button>
            </div>
        </div>
    </div>
</form>

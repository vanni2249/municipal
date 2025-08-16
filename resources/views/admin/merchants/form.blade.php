<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Información del comerciante</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación para crear un nuevo comerciante.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <!-- Type -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Tipo de comerciante" />
                <x-select wire:model.live="form.type_id" id="type_id" name="type_id" class="w-full">
                    <option value="">Seleccione un tipo</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->es_name }}</option>
                    @endforeach
                </x-select>
                @error('form.type_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Name -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Nombre" />
                <x-input wire:model.defer="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre" />
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Lastname -->
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Apellido" />
                <x-input wire:model.defer="form.lastname" id="lastname" name="lastname" type="text" class="w-full"
                    placeholder="Apellido" />
                @error('form.lastname')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Date of Birth -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Fecha de Nacimiento" />
                <x-input wire:model.defer="form.date_of_birth" id="date_of_birth" name="date_of_birth" type="date"
                    class="w-full" />
                @error('form.date_of_birth')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Email" />
                <x-input wire:model.defer="form.email" id="email" name="email" type="email" class="w-full"
                    placeholder="Email" />
                @error('form.email')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Teléfono" />
                <x-input wire:model.defer="form.phone" id="phone" name="phone" type="text" class="w-full"
                    placeholder="Teléfono" />
                @error('form.phone')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full py-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Dirección residencial</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación con la información de la dirección del comerciante.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <!-- Place -->
            @if ($form->type_id == 3)
                <div class="col-span-full lg:col-span-1">
                    <x-label value="Lugar" />
                    <x-select wire:model.defer="form.place_id" id="place_id" name="place_id" class="w-full">
                        <option value="">Seleccione un lugar</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </x-select>
                    @error('form.place_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
            @endif
            <!-- Address -->
            <div class="col-span-full">
                <x-label value="Dirección" />
                <x-input wire:model.defer="form.address" id="address" name="address" type="text" class="w-full"
                    placeholder="Address" />
                @error('form.address')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Ciudad" />
                <x-input wire:model.defer="form.city" id="city" name="city" type="city" class="w-full"
                    placeholder="Ciudad" />
                @error('form.city')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Código de area" />
                <x-input wire:model.defer="form.postal_code" id="postal_code" name="postal_code" type="text"
                    class="w-full" placeholder="Teléfono" />
                @error('form.postal_code')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="mt-6 col-span-full">
                <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
            </div>
            @foreach ($errors->all() as $error)
                <x-error message="{{ $error }}" />
            @endforeach
        </div>
    </div>
</form>

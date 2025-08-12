<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion del ciudadano</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuacion para crear un nuevo ciudadano.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
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
        <div class="col-span-full py-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Dirreccion recidencial</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuacion con la informacion de la dirreccion del ciudadano.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full">
                <x-label value="Dirreccion" />
                <x-input wire:model.defer="form.address" id="address" name="address" type="text" class="w-full"
                    placeholder="Address" />
                @error('form.address')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Lugar" />
                <x-select wire:model.defer="form.place_id" class="col-span-full w-full" id="place_id">
                    <option value="">Seleccione un lugar</option>
                    @foreach ($places as $place)
                        <option value="{{ $place->id }}">{{ $place->name }}</option>
                    @endforeach
                </x-select>
                @error('form.place_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Codigo de area" />
                <x-input wire:model.defer="form.postal_code" id="postal_code" name="postal_code" type="text"
                    class="w-full" placeholder="Telefono" />
                @error('form.postal_code')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="mt-6 col-span-full">
                <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
            </div>
        </div>
    </div>
</form>

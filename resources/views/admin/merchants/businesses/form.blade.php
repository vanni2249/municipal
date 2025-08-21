<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">
                Información del Negocio
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                Complete la información del negocio.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <!-- Business Type -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Tipo de negocio" />
                <x-select wire:model.defer="form.business_type_id" id="business_type_id"
                    name="business_type_id" class="w-full">
                    <option value="">Seleccione un tipo de negocio</option>
                    @foreach ($business_types as $type)
                        <option value="{{ $type->id }}">{{ $type->es_name }}</option>
                    @endforeach
                </x-select>
                @error('form.business_type_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Business Category -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Categoría de negocio" />
                <x-select wire:model.defer="form.business_category_id" id="business_category_id"
                    name="business_category_id" class="w-full">
                    <option value="">Seleccione una categoría</option>
                    @foreach ($business_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->es_name }}</option>
                    @endforeach
                </x-select>
                @error('form.business_category_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Name -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Nombre del negocio" />
                <x-input wire:model.defer="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre del negocio" />
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Number -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Numero de registro" />
                <x-input wire:model.defer="form.number" id="number" name="number"
                    type="text" class="w-full" placeholder="Numero de registro" />
                @error('form.number')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Email -->
            {{-- <div class="col-span-full lg:col-span-1">
                <x-label value="Correo electrónico" />
                <x-input wire:model.defer="form.email" id="email" name="email" type="text" class="w-full"
                    placeholder="Correo electrónico" />
                @error('form.email')
                    <x-error message="{{ $message }}" />
                @enderror
            </div> --}}
            <!-- Phone -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
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
            <h2 class="font-bold text-gray-600">
                Dirección del Negocio
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                Complete la información de la dirección del negocio.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <!-- Place -->
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
            <!-- Address -->
            <div class="col-span-full">
                <x-label value="Dirección" />
                <x-input wire:model.defer="form.address" id="address" name="address" type="text" class="w-full"
                    placeholder="Address" />
                @error('form.address')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- City -->
            <div class="col-span-full lg:col-span-1">
                <x-label value="Ciudad" />
                <x-input wire:model.defer="form.city" id="city" name="city" type="text" class="w-full"
                    placeholder="Ciudad" />
                @error('form.city')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Postal code -->
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Código de area" />
                <x-input wire:model.defer="form.postal_code" id="postal_code" name="postal_code" type="text"
                    class="w-full" placeholder="Código postal" />
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

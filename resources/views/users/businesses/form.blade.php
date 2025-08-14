<form wire:submit.prevent="save" class="">
    <div class="grid grid-cols-6 gap-4">
        <!-- Business info -->
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Información del negocio</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los detalles del negocio. Asegúrate de que la información sea precisa y esté actualizada para
                facilitar la comunicación con el comerciante.
            </p>
        </div>
        <!-- Business -->
        <div class="col-span-full md:col-span-4 grid grid-cols-2 gap-4">
            <!-- Type -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="business_type_id" value="Tipo de negocio" />
                <x-select id="business_type_id" wire:model="form.business_type_id" class="mt-1 w-full">
                    <option value="">Seleccione un tipo de negocio</option>
                    @foreach ($business_types as $type)
                        <option value="{{ $type->id }}">{{ $type->es_name }}</option>
                    @endforeach
                </x-select>
                @error('form.business_type_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Category -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="business_category_id" value="Categoría de negocio" />
                <x-select id="business_category_id" wire:model="form.business_category_id" class="mt-1 w-full">
                    <option value="">Seleccione la categoría de negocio</option>
                    @foreach ($business_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->es_name }}</option>
                    @endforeach
                </x-select>
                @error('form.business_category_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Name -->
            <div class="col-span-full lg:col-span-2">
                <x-label for="name" value="Nombre del negocio" />
                <x-input wire:model.defer="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre del negocio" />
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Merchant number -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="merchant_number" value="Número de comerciante" />
                <x-input wire:model.defer="form.merchant_number" id="merchant_number" name="merchant_number"
                    type="text" class="w-full" placeholder="Número de comerciante" />
                @error('form.merchant_number')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>

            <!-- Phone -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label for="phone" value="Teléfono" />
                <x-input wire:model.defer="form.phone" id="phone" name="phone" type="text" class="w-full"
                    placeholder="Teléfono" />
                @error('form.phone')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <!-- Space -->
        <div class="col-span-full py-4"></div>
        <!-- Address info -->
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Dirección física</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación con la información de la dirección del negocio.
                Si el negocio no tiene una dirección física, puede colocar la dirección del propietario.
            </p>
        </div>
        <!-- Address -->
        <div class="col-span-full md:col-span-4 grid grid-cols-2 gap-4">
            <!-- Address -->
            <div class="col-span-full">
                <x-label for="address" value="Dirección" />
                <x-input wire:model.defer="form.address" id="address" name="address" type="text" class="w-full"
                    placeholder="Dirección del negocio" />
                @error('form.address')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Place -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label for="place_id" value="Lugar" />
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
            <!-- Postal code -->
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label for="postal_code" value="Código postal" />
                <x-input wire:model.defer="form.postal_code" id="postal_code" name="postal_code" type="text"
                    class="w-full" placeholder="Código postal" />
                @error('form.postal_code')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <!-- Button -->
            <div class="my-6 col-span-full">
                <x-button type="submit" class="w-full md:w-auto">
                    Enviar
                </x-button>
            </div>
        </div>
    </div>
</form>

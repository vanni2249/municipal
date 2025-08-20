<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Información del negocio</h2>
            <p class="text-sm text-gray-500 mt-2">
                Proporciona la información básica del negocio. Asegúrate de que la información sea precisa para evitar
                problemas para contactarlo.
            </p>
        </div>
        <div class="col-span-full md:col-span-4 grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Business Type -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="business_type_id" value="Tipo de negocio" />
                <x-select wire:model="form.business_type_id" @class([
                    'w-full',
                    'border-red-400' => $errors->has('form.business_type_id'),
                ])>
                    <option value="">Seleccione un tipo de negocio</option>
                    @foreach ($business_types as $type)
                        <option value="{{ $type->id }}">
                            {{ $type->es_name }}
                        </option>
                    @endforeach
                </x-select>
                @error('form.business_type_id')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Business category -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="Category" value="Categoría de comercio" />
                <x-select wire:model="form.business_category_id" @class([
                    'w-full',
                    'border-red-400' => $errors->has('form.business_category_id'),
                ])>
                    <option value="">
                        Seleccione una categoría de comercio
                    </option>
                    @foreach ($business_categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->es_name }}
                        </option>
                    @endforeach
                </x-select>
                @error('form.business_category_id')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Name -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="Name" value="Nombre" />
                <x-input wire:model="form.name" name="name" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.name'),
                ]) />
                @error('form.name')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Number -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="number" value="Numero de comercio" />
                <x-input wire:model="form.number" type="number" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.number'),
                ]) />
                @error('form.number')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Phone -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label for="business_phone" value="Teléfono" />
                <x-input wire:model="form.phone" name="phone" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.phone'),
                ]) />
                @error('form.phone')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-span-full py-4"></div>
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Dirección del negocio</h2>
            <p class="text-sm text-gray-500 mt-2">
                Proporciona la dirección del negocio. Asegúrate de que la información sea precisa para evitar problemas
                para contactarlo.
            </p>
        </div>

        <!-- City & Postal code -->
        <div class="col-span-full md:col-span-4 grid grid-cols-2 gap-4">
            <!-- Lugar -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="place" value="Lugar" />
                <x-select wire:model="form.place_id" @class(['w-full mt-1', 'border-red-300' => $errors->has('form.place_id')])>
                    <option value="">Seleccione un lugar</option>
                    @foreach ($places as $place)
                        <option value="{{ $place->id }}">
                            {{ $place->name }}
                        </option>
                    @endforeach
                </x-select>
                @error('form.place_id')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Dirección -->
            <div class="col-span-2">
                <x-label for="business_address" value="Dirección" />
                <x-input wire:model="form.address" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.address'),
                ]) />
                @error('form.address')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- City -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="business_city" value="Ciudad" />
                <x-input wire:model="form.city" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.city'),
                ]) placeholder="Ciudad" />
                @error('form.city')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Postal code -->
            <div>
                <x-label for="business_postal_code" value="Código postal" />
                <x-input wire:model="form.postal_code" type="number" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.postal_code'),
                ])
                    placeholder="Código postal" />
                @error('form.postal_code')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Button -->
            <div class="mt-4">
                <x-button type="submit" class="">Enviar</x-button>
            </div>
            @foreach ($errors->all() as $error)
                <div class="text-red-500 text-xs mt-1">
                    {{ $error }}
                </div>
            @endforeach
        </div>
    </div>
</form>

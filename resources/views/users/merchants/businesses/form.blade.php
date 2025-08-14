<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion del negocio</h2>
            <p class="text-sm text-gray-500 mt-2">
                Proporciona la informacion basica del negocio. Asegurate de que la informacion sea precisa para evitar
                problemas para contactarlo.
            </p>
        </div>
        <div class="col-span-full md:col-span-4 grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Business category -->
            <div class="col-span-full">
                <x-label for="Category" value="Categoria de comercio" />
                <x-select wire:model="form.business_category_id" @class([
                    'w-full',
                    'border-red-400' => $errors->has('form.business_category_id'),
                ])>
                    <option value="">
                        Seleccione una categoria de comercio
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
            <div class="col-span-full">
                <x-label for="Name" value="Nombre" />
                <x-input wire:model="form.name" name="name" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.name'),
                ]) />
                @error('form.name')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Email -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="merchant_number" value="Numero de comercio" />
                <x-input wire:model="form.merchant_number" type="number" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.merchant_number'),
                ]) />
                @error('form.merchant_number')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Email -->
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label for="email" value="Correo electronico" />
                <x-input wire:model="form.email" name="email" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.email'),
                ]) />
                @error('form.email')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Phone -->
            <div class="col-span-full lg:col-span-1">
                <x-label for="business_phone" value="Telefono" />
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
            <h2 class="font-bold text-gray-600">Dirreccion del negocio</h2>
            <p class="text-sm text-gray-500 mt-2">
                Proporciona la direccion del negocio. Asegurate de que la informacion sea precisa para evitar problemas
                para contactarlo.
            </p>
        </div>

        <!-- City & Postal code -->
        <div class="col-span-full md:col-span-4 grid grid-cols-2 gap-4">
            <!-- Dirreccion -->
            <div class="col-span-2">
                <x-label for="business_address" value="Direccion" />
                <x-input wire:model="form.address" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.address'),
                ]) />
                @error('form.address')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
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
            <!-- Postal code -->
            <div>
                <x-label for="business_postal_code" value="Codigo postal" />
                <x-input wire:model="form.postal_code" type="number" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.postal_code'),
                ])
                    placeholder="Codigo postal" />
                @error('form.postal_code')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Button -->
            <div class="mt-4">
                <x-button type="submit" class="">Enviar</x-button>
            </div>
        </div>
    </div>
</form>

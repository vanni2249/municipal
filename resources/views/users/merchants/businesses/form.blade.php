<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full md:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion del negocio</h2>
            <p class="text-sm text-gray-500 mt-2">
                Proporciona la informacion basica del negocio. Asegurate de que la informacion sea precisa para evitar
                problemas para contactarlo.
            </p>
        </div>
        <div class="col-span-full md:col-span-4">
            <!-- Business category -->
            <div>
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
            </div>
            <!-- Name -->
            <div>
                <x-label for="Name" value="Nombre" />
                <x-input wire:model="form.name" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.name'),
                ]) />
            </div>
            <!-- Email -->
            <div>
                <x-label for="merchant_number" value="Numero de comercio" />
                <x-input wire:model="form.merchant_number" type="number" @class([
                    'mt-1 block w-full',
                    'border-red-400' => $errors->has('form.merchant_number'),
                ]) />
                @error('form.merchant_number')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <!-- Phone -->
            <div>
                <x-label for="business_phone" value="Telefono" />
                <x-input wire:model="form.phone" type="text" @class([
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
        <div class="col-span-full md:col-span-4">

            <!-- Dirreccion -->
            <div>
                <x-label for="business_address" value="Direccion" />
                <x-input wire:model="form.address" type="text" @class([
                    'mt-1 block w-full',
                    'border-red-300' => $errors->has('form.address'),
                ]) />
            </div>
            <!-- City & Postal code -->
            <div class="grid grid-cols-3 gap-4">
                <!-- City -->
                <div class="col-span-2">
                    <x-label for="business_city" value="Ciudad" />
                    <x-input wire:model="form.city" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-300' => $errors->has('form.city'),
                    ]) />
                </div>
                <!-- Postal code -->
                <div>
                    <x-label for="business_postal_code" value="Codigo postal" />
                    <x-input wire:model="form.postal_code" type="number" @class([
                        'mt-1 block w-full',
                        'border-red-300' => $errors->has('form.postal_code'),
                    ])
                        placeholder="Codigo postal" />
                </div>
            </div>
            <!-- Button -->
            <div class="mt-4">
                <x-button type="submit" class="">Enviar</x-button>
            </div>

            @foreach ($errors->all() as $error)
                <div class="text-red-500 text-sm mt-2">
                    {{ $error }}
                </div>
            @endforeach
        </div>

    </div>
</form>

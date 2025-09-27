    <form wire:submit.prevent="save">

        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-full lg:col-span-2">
                <h2 class="text-lg font-bold text-gray-900">
                    Información del contacto
                </h2>
                <p class="text-sm text-gray-800">
                    Los datos de contacto se completan automáticamente con la información de su cuenta.
                </p>
            </div>
            <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
                <!-- Name -->
                <div class="col-span-full md:col-span-1">
                    <x-label for="name" value="Nombre" />
                    <x-input id="name" name="name" type="text" disabled="true" class="w-full"
                        wire:model.defer="name" />
                </div>
                <!-- Lastname -->
                <div class="col-span-full md:col-span-1">
                    <x-label for="lastname" value="Apellido" />
                    <x-input id="lastname" name="lastname" type="text" disabled="true" class="w-full"
                        wire:model.defer="lastname" />
                </div>
                <!-- Phone -->
                <div class="col-span-full md:col-span-1 md:col-start-1">
                    <x-label for="phone" value="Teléfono" />
                    <x-input id="phone" name="phone" type="text" disabled="true" class="w-full"
                        wire:model.defer="phone" />
                </div>
            </div>
            <div class="col-span-full py-4"></div>
            <div class="col-span-full lg:col-span-2">
                <h2 class="text-lg font-bold text-gray-900">
                    Dirección del servicio
                </h2>
                <p class="text-sm text-gray-800">
                    Complete la dirección donde ser realizara el recogido de escombros 
                </p>
            </div>
            <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
                <!-- Place -->
                <div class="col-span-full md:col-span-1">
                    <x-label for="place" value="Lugar del servicio" />
                    <x-select class="w-full" id="place_id" name="place_id" wire:model.defer="place_id">
                        <option value="">Seleccione lugar del servicio</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">
                                {{ $place->name }}
                            </option>
                        @endforeach
                    </x-select>
                    @error('place_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- Address -->
                <div class="col-span-full">
                    <x-label for="address" value="Dirección" />
                    <x-input wire:model="address" type="text" name="address" id="address" class="w-full"/>
                    @error('address')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>

                <!-- City -->
                <div class="col-span-full lg:col-span-1">
                    <x-label for="city" value="Ciudad" />
                    <x-input wire:model="city" name="city" id="city" type="text" class="w-full" />
                </div>

                <!-- postal code -->
                <div class="cols-span-full lg:col-span-1">
                    <x-label for="postal_code" value="Código postal" />
                    <x-input wire:model="postal_code" name="postal_code" id="postal_code" type="text" class="w-full" />
                </div>

            </div>
            <div class="col-span-full py-4"></div>
            <div class="col-span-full lg:col-span-2">
                <h2 class="text-lg font-bold text-gray-900">
                    Información del servicio
                </h2>
                <p class="text-sm text-gray-800">
                    Seleccione el servicio que desea solicitar y complete la información requerida.
                </p>
            </div>
            <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
                <!-- Service Type -->
                <div class="col-span-full md:col-span-1 md:col-start-1">
                    <x-label for="type_debris_id" value="Tipo de escombro" />
                    <x-select class="w-full" id="debris_id" name="debris_id"
                        wire:model.defer="debris_id">
                        <option value="">Seleccione tipo de escombro</option>
                        @foreach ($debris as $item)
                            <option value="{{ $item->id }}">{{ $item->es_name }}</option>
                        @endforeach
                    </x-select>
                    @error('debris_id')
                        <x-error message="{{ $message }}"/>
                    @enderror
                </div>
                <!-- Description -->
                <div class="col-span-full lg:col-span-2">
                    <x-label for="description" value="Descripción del servicio (opcional)" />
                    <x-textarea id="description" name="description" rows="3" class="w-full"
                        wire:model.defer="description"></x-textarea>
                        @error('description')
                            <x-error message="{{ $message }}"/>
                        @enderror
                </div>
                <!-- Submit Button -->
                <div class="col-span-full lg:col-span-2">
                    <x-button type="submit" class="w-full sm:w-auto">
                        Solicitar servicio
                    </x-button>
                </div>
            </div>
        </div>
    </form>

    <form action="">

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
                    Información del servicio
                </h2>
                <p class="text-sm text-gray-800">
                    Seleccione el servicio que desea solicitar y complete la información requerida.
                </p>
            </div>
            <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
                <!-- Place -->
                <div class="col-span-full md:col-span-1">
                    <x-label for="place" value="Lugar del servicio" />
                    <x-select class="w-full" id="place" name="place" wire:model.defer="place">
                        <option value="">Seleccione lugar del servicio</option>
                        <option value=""></option>
                        <option value=""></option>
                    </x-select>
                </div>
                <!-- Address -->
                <div class="col-span-full">
                    <x-label for="address" value="Dirección" />
                    <x-input id="address" name="address" type="text" class="w-full" wire:model.defer="address" />
                </div>
                <!-- Service Type -->
                <div class="col-span-full md:col-span-1 md:col-start-1">
                    <x-label for="type_debris_id" value="Fecha del servicio" />
                    <x-select class="w-full" id="type_debris_id" name="type_debris_id"
                        wire:model.defer="type_debris_id">
                        <option value="">Seleccione tipo de escombro</option>
                        <option value=""></option>
                        <option value=""></option>
                    </x-select>
                </div>
                <!-- Description -->
                <div class="col-span-full lg:col-span-2">
                    <x-label for="description" value="Descripción del servicio (opcional)" />
                    <x-textarea id="description" name="description" rows="3" class="w-full"
                        wire:model.defer="description"></x-textarea>
                </div>
                <!-- Submit Button -->
                <div class="col-span-full lg:col-span-2">
                    <x-button wire:click.prevent="submit" class="w-full sm:w-auto">
                        Solicitar servicio
                    </x-button>
                </div>
            </div>
        </div>
    </form>

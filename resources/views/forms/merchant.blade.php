<x-card>
    <div class="space-y-4">
        <div class="space-y-2">
            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                <div class="col-span-full lg:col-span-6">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Informacion del comerciante</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Debe colocar la informacion del comerciante que desea agregar,
                        el comerciante puede agregar varios comercios, por lo que es importante
                        que el comerciante tenga la informacion correcta de cada comercio.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-6">
                    <x-label for="name" value="Nombre del comerciante" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="merchant.name" />
                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <x-label for="email" value="Correo electronico" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <x-label for="telefono" value="Numero de telefono" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-6">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Dirreccion posta del comerciante</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Debe colocar la informacion de contacto del comerciante, esta informacion es necesaria
                        para el envio de documentos y correspondencia.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-6">
                    <div>
                        <x-label for="address" value="Linea 1" />
                        <x-input id="address" type="text" class="mt-1 block w-full"
                            wire:model.defer="merchant.address" />
                    </div>
                    <div>
                        <x-label for="address" value="Linea 2" />
                        <x-input id="address" type="text" class="mt-1 block w-full"
                            wire:model.defer="merchant.address" />
                    </div>
                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <x-label for="city" value="Ciudad" />
                            <x-input id="city" type="text" class="mt-1 block w-full" wire:model.defer="merchant.city" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <x-label for="state" value="Estado" />
                            <x-input id="state" type="text" class="mt-1 block w-full"
                                wire:model.defer="merchant.state" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <x-label for="code" value="Codigo de area" />
                            <x-input id="state" type="text" class="mt-1 block w-full"
                                wire:model.defer="merchant.state" />
                        </div>

                    </div>
                </div>
            </div>
        <div class="flex justify-end py-8">
            <x-button wire:click="saveMerchant">
                Guardar comerciante
            </x-button>
        </div>
    </div>
</x-card>
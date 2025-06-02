<x-card>
    <div class="space-y-4">
        <div class="space-y-8">
            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Informacion de la patente a solicitar</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Debe colocar la informacion de la patente a solicitar, esta informacion es necesaria para
                        inspecciones y auditorias.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div>
                        <x-label for="name" value="Tipo de patente" />
                        <x-input id="name" type="text" class="mt-1 block w-full lg:w-1/3" wire:model.defer="merchant.name" />
                    </div>
                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <x-label for="email" value="Numero contribuyente" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <x-label for="telefono" value="Codigo de negocio" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                    </div>

                </div>
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Dirreccion postal del comercio</h2>
                    <p class="text-xs text-gray-500 py-4">

                        Debe colocar la informacion de la direccion postal del comercio, esta informacion es necesaria
                        para
                        el envio de documentos y correspondencia.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
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
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Dirreccion fisica del comercio</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Debe colocar la informacion de la direccion fisica del comercio, esta informacion es necesaria
                        para
                        inspecciones y auditorias.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
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
                Guardar patenta
            </x-button>
        </div>
        </div>
    </div>
</x-card>
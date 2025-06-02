<div>
     <div class="space-y-4">
        <div class="space-y-8">
            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">Seleccionar facilidad</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Seleccione la facilidad que desea solicitar, para verificar disponibilidad y realizar la
                        reserva
                        correspondiente.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div>
                        <x-label for="address" value="Facilidad" />
                        <x-input id="address" type="text" class="mt-1 block w-full"
                            wire:model.defer="merchant.address" />
                    </div>
                </div>
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">Seleccionar la fecha de uso</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Seleccione la fecha en la que desea utilizar la facilidad, para verificar disponibilidad y
                        realizar
                        la reserva correspondiente.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <x-label for="telefono" value="Fecha" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        <div class="flex justify-end py-8">
            <x-button wire:click="saveMerchant" class="w-full md:w-auto">
                Guardar
            </x-button>
        </div>
    </div>
</div>

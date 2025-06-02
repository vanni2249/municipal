<x-card>
    <div class="space-y-4">
        <div class="space-y-8">
            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Informacion del tiempo de vigencia</h2>
                    <p class="text-xs text-gray-500 py-4">
                        Debe colocar la informacion del tiempo de vigencia, esta informacion es necesaria para
                        inspecciones y auditorias.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div>
                        <x-label for="name" value="Tipo de periodo" />
                        <x-input id="name" type="text" class="mt-1 block w-full lg:w-1/3" wire:model.defer="merchant.name" />
                    </div>
                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <x-label for="email" value="Regira desde" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <x-label for="telefono" value="Regira hasta" />
                            <x-input id="email" type="email" class="mt-1 block w-full"
                                wire:model.defer="merchant.email" />
                        </div>
                    </div>

                </div>
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold uppercase text-gray-700">Informacion de la contribucion</h2>
                    <p class="text-xs text-gray-500 py-4">
                        La contribucion es el monto que se debe pagar por la patente, esta informacion es necesaria para
                        calcular su pago por patente.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div>
                        <x-label for="name" value="Constribucion a declarar" />
                        <x-input id="name" type="text" class="mt-1 block w-full lg:w-1/3" wire:model.defer="merchant.name" />
                    </div>
                </div>
            </div>
            <div class="flex justify-end py-8">
            <x-button wire:click="saveMerchant">
                Guardar periodo
            </x-button>
        </div>
        </div>
    </div>
</x-card>
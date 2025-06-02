<div>
   <div class="space-y-4">
        <div class="space-y-8">
            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                @if (in_array(request()->segment(1), [
                    'it-office', 
                    'mayors-office',
                    'public-works-department',
                    ]))
                    
                <!-- Informacion -->
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">Informacion persona</h2>
                    <p class="text-xs text-gray-500">
                        Debe colocar la informacion de la persona que solicita el servicio, esta informacion es
                        necesaria
                        para
                        comunicarnos con la persona encargada.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div class="grid grid-cols-12 md:gap-4 gap-2">
                        <div class="col-span-full">
                            <x-label for="name" value="Nombre" />
                            <x-input id="name" type="text" class="mt-1 block w-full"
                                wire:model.defer="merchant.name" />
                    </div>

                        <div class="col-span-full md:col-span-8">
                            <x-label for="email" value="Correo electronico" />
                            <x-input id="email" type="text" class="mt-1 block w-full"
                            wire:model.defer="merchant.email" />
                        </div>
                        <div class="col-span-full md:col-span-4">
                            <x-label for="telefono" value="Numero de telefono" />
                            <x-input id="telefono" type="text" class="mt-1 block w-full"
                            wire:model.defer="merchant.telefono" />
                        </div>
                    </div>
                </div>
                @endif

                <!-- Direccion -->
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">Direccion fisica</h2>
                    <p class="text-xs text-gray-500">
                        Debe colocar la informacion de la direccion fisica de la residencia, esta informacion es
                        necesaria
                        para
                        inspecciones y realizar el trabajo.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div class="grid grid-cols-12 md:gap-4 gap-2">
                        <div class="col-span-full">
                            <x-label for="address" value="Linea 1" />
                            <x-input id="address" type="text" class="mt-1 block w-full"
                                wire:model.defer="merchant.address" />
                        </div>
                        <div class="col-span-full">
                            <x-label for="address" value="Linea 2" />
                            <x-input id="address" type="text" class="mt-1 block w-full"
                                wire:model.defer="merchant.address" />
                        </div>
                        <div class="col-span-full md:col-span-6">
                                <x-label for="code" value="Barrio, urbanizacion etc..." />
                                <x-input id="state" type="text" class="mt-1 block w-full"
                                    wire:model.defer="merchant.state" />
                        </div>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">Tipo de escombro a recoger</h2>
                    <p class="text-xs text-gray-500">
                        Especifique el tipo de escombro que desea que se recoja, esta informacion es necesaria para
                        poder
                        realizar el trabajo de manera correcta.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div class="w-full md:w-1/2">
                        <x-label for="code" value="Selecciones el tipo de escombro" />
                        <x-input id="state" type="text" class="mt-1 block w-full"
                            wire:model.defer="merchant.state" />
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

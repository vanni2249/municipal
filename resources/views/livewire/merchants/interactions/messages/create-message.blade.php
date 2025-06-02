<div>
    <div class="space-y-4">
        <div class="space-y-8">
            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">El tema a discutir</h2>
                    <p class="text-xs text-gray-500">
                        Debe especificar el tema a discutir, esta informacion es necesaria para poder atender la solicitud de manera adecuada.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div class="w-full md:w-1/2">
                        <x-label for="code" value="Selecciones el tema a discutir" />
                        <x-input id="state" type="text" class="mt-1 block w-full"
                        wire:model.defer="merchant.state" />
                    </div>
                </div>
                <!-- Direccion -->
                <div class="col-span-full lg:col-span-5">
                    <h2 class="text-sm font-bold text-gray-600">Descripcion</h2>
                    <p class="text-xs text-gray-500">
                        Debe colocar una breve descripcion del tema a discutir, esta informacion es necesaria para poder atender la solicitud de manera adecuada.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-7">
                    <div class="w-full">
                        <x-label for="code" value="Descripcion" />
                        <x-textarea class="w-full"/>
                    
                    </div>

                </div>
                
            </div>
        </div>
        <div class="flex justify-end py-8">
            <x-button wire:click="saveMerchant" class="w-full md:w-auto">
                Enviar interaccion
            </x-button>
        </div>
    </div>
</div>

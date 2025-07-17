<x-layouts.admin>
    <div class="grid grid-cols-12 gap-4 px-4">
        <div class="col-span-full">
            <x-card class="rounded-xl p-4 h-full">
                <header class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-bold text-gray-900">
                        Registra ciudadano
                    </h2>
                </header>
                <div class="">
                    <div class="space-y-4">
                        <div class="space-y-8">
                            <div class="grid grid-cols-12 gap-4 lg:gap-8">
                                <div class="col-span-full lg:col-span-5">
                                    <h2 class="text-sm font-bold text-gray-600">Informacion personal</h2>
                                    <p class="text-xs text-gray-500 py-4">
                                        Debe colocar la informacion personal del ciudadano, esta informacion es necesaria
                                        para poder
                                        identificar al ciudadano y realizar el trabajo de manera correcta.
                                    </p>
                                </div>
                                <div class="col-span-full lg:col-span-7">
                                    <div>
                                        <x-label for="name" value="Nombre" />
                                        <x-input id="name" type="text" class="mt-1 block w-full"
                                            wire:model.defer="employee.name" />
                                    </div>
                                    <div>
                                        <x-label for="address" value="Appellidos" />
                                        <x-input id="address" type="text" class="mt-1 block w-full"
                                            wire:model.defer="employee.address" />
                                    </div>
                                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                                        <div class="w-full md:w-1/2">
                                            <x-label for="code" value="Sexo" />
                                            <x-input id="state" type="text" class="mt-1 block w-full"
                                                wire:model.defer="employee.state" />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-span-full lg:col-span-5">
                                    <h2 class="text-sm font-bold text-gray-600">Contacto</h2>
                                    <p class="text-xs text-gray-500 py-4">
                                        Debe colocar la informacion de contacto del ciudadano, esta informacion es necesaria
                                        para poder
                                        comunicarnos con el ciudadano y realizar el trabajo de manera correcta.
                                    </p>
                                </div>
                                <div class="col-span-full lg:col-span-7">
                                    <div>
                                        <x-label for="name" value="Correo electronico" />
                                        <x-input id="name" type="text" class="mt-1 block w-full"
                                            wire:model.defer="merchant.name" />
                                    </div>
                                    <div>
                                        <x-label for="name" value="Re-correo electronico" />
                                        <x-input id="name" type="text" class="mt-1 block w-full"
                                            wire:model.defer="merchant.name" />
                                    </div>
                                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                                        <div class="w-full md:w-1/2">
                                            <x-label for="telefono" value="Numero de telefono" />
                                            <x-input id="email" type="email" class="mt-1 block w-full"
                                                wire:model.defer="merchant.email" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-full lg:col-span-5">
                                    <h2 class="text-sm font-bold text-gray-600">Dirreccion postal</h2>
                                    <p class="text-xs text-gray-500 py-4">
                                        Debe colocar la dirreccion postal del ciudadano, esta informacion es necesaria
                                        para poder
                                        enviarle notificaciones y comunicarnos con el ciudadano de manera correcta.
                                    </p>
                                </div>
                                <div class="col-span-full lg:col-span-7">
                                    <div>
                                        <x-label for="name" value="Linea 1" />
                                        <x-input id="name" type="text" class="mt-1 block w-full"
                                            wire:model.defer="merchant.name" />
                                    </div>
                                    <div>
                                        <x-label for="name" value="Linea 2" />
                                        <x-input id="name" type="text" class="mt-1 block w-full"
                                            wire:model.defer="merchant.name" />
                                    </div>
                                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                                        <div class="w-full md:w-2/5">
                                            <x-label for="telefono" value="Ciudad" />
                                            <x-input id="email" type="email" class="mt-1 block w-full"
                                                wire:model.defer="merchant.email" />
                                        </div>
                                        <div class="w-full md:w-2/5">
                                            <x-label for="telefono" value="Estado" />
                                            <x-input id="email" type="email" class="mt-1 block w-full"
                                                wire:model.defer="merchant.email" />
                                        </div>
                                        <div class="w-full md:w-1/5">
                                            <x-label for="telefono" value="Codigo" />
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
                    {{-- @livewire('modules.settlements.building-permits.create-settlement-building-permit') --}}
                </div>
            </x-card>
        </div>
    </div>
</x-layouts.admin>

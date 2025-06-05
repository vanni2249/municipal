<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
     <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex justify-between items-center mb-6">
                        <h2 class="text-md md:text-xl lg:text-lg font-bold text-gray-900">
                            Radicacion de permiso de construccion
                        </h2>
                    </header>
                    <div class="">
                        @livewire('modules.settlements.building-permits.create-settlement-building-permit')
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>
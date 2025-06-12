<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
     <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex justify-between items-center mb-6">
                        <h2 class="text-md font-bold text-gray-900">
                            Rentar facilidades de actividades privadas
                        </h2>
                    </header>
                    <div class="">
                        @livewire('modules.rents.activity-facilities.create-rent-activity-facility')
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>
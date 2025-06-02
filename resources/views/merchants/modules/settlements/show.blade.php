<x-layouts.merchants>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-6">
                        <h2 class="text-sm md:text-xl lg:text-lg font-bold text-gray-600">
                           Radicacion
                        </h2>
                    </header>
                    <div class="col-span-full">
                        @livewire('users.settlements.show-settlement')
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
               @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.merchants>
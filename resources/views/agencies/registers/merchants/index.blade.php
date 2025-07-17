<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
        <!-- Table -->
        <div class="col-span-full lg:col-span-full">
            <x-card class="h-full rounded-xl">
                <header class="flex justify-between items-center mb-4">
                   <h1 class="text-lg font-bold">Comerciante</h1> 
                    <x-icon-link href="{{ route(request()->segment(1) . '.registers.merchants.create') }}" icon="plus" />

                </header>
                @livewire('agencies.merchants.list-merchants', ['show' => 25, 'head' => true])
            </x-card>
        </div>
    </div>
</x-layouts.agencies>
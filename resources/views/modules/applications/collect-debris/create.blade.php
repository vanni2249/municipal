<x-layouts type="{{ request()->segment(1) }}">
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Solicitud recogido de escombro" />
        </header>
        <div class="col-span-full lg:col-span-9">
            <x-card>
                @livewire('modules.applications.collect-debris.create-collect-debris')
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-3">
            <x-card></x-card>
        </div>
    </div>
</x-layouts>
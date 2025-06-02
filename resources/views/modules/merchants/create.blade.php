<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Crear Comerciante" href="{{ route(''.request()->segment(1).'.merchants.index') }}"/>
        </header>
        <section class="">
            @livewire('modules.merchants.create-merchant')
        </section>
    </div>
</x-layouts>
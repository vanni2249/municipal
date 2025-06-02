<x-layouts.it-office>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Crear Comerciante" href="{{ route('it-office.merchants.index') }}"/>
        </header>
        <section class="">
            @livewire('modules.merchants.create-merchant')
        </section>
    </div>
</x-layouts.it-office>
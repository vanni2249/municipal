<x-layouts.it-office>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciantes" />
            <div>
                <x-link-button label="Agregar comerciante"
                    href="{{ route('it-office.merchants.create') }}" />
            </div>
        </header>
        <section>
            @livewire('modules.merchants.list-merchants')
        </section>
    </div>
</x-layouts.it-office>
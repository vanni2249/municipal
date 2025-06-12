<x-layouts.accountants>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciantes"/>
            <div>
                <x-link-button label="Agregar comerciante" href="{{ route('accountants.merchants.create') }}" />
                    
            </div>
        </header>
        <section>
            @livewire('modules.merchants.list-merchants')
        </section>
    </div>
</x-layouts.accountants>
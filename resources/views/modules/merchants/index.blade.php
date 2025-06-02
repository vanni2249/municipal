<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciantes"/>
            <div>
                @if (in_array(request()->segment(1), ['it-office', 'finances']))
                    
                        <x-link-button label="Agregar comerciante" href="{{ route(''.request()->segment(1).'.merchants.create') }}" />
                    @endif
            </div>
        </header>
        <section>
            @livewire('modules.merchants.list-merchants')
        </section>
    </div>
</x-layouts>
<x-layouts.agencies>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciantes"/>
            <div>
                @if (in_array(request()->segment(2), ['it-office', 'finances']))
                    <x-link-button label="Agregar comerciante" href="{{ route('agencies.'.request()->segment(2).'.merchants.create') }}" />
                    
                @endif
                    
            </div>
        </header>
        <section>
            @livewire('modules.merchants.list-merchants')
        </section>
    </div>
</x-layouts.agencies>
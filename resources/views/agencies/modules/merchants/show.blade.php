<x-layouts.agencies>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciante" href="{{ route('agencies.'.request()->segment(2).'.merchants.index') }}" />
            @if (in_array(request()->segment(2), ['it-office', 'finances']))
            <div>
                <x-link-button label="Editar comerciante"
                    href="{{ route('agencies.'.request()->segment(2).'.merchants.edit',['merchant' => request()->segment(4)]) }}" />
            </div>
            @endif
        </header>
        <section>
            @livewire('modules.merchants.show-merchant')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Comercios" />
            @if (in_array(request()->segment(2), ['it-office', 'finances']))
            <div>
                <x-link-button label="Agregar comercio"
                    href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.create',['merchant' => request()->segment(4)]) }}" />
            </div>
            @endif
        </header>
        <section>
            <section>
                @livewire('modules.businesses.list-businesses')
            </section>
        </section>
    </div>
</x-layouts.agencies>
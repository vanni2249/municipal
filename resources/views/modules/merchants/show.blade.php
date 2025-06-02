<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciante" href="{{ route(''.request()->segment(1).'.merchants.index') }}" />
            <div>
                @if (in_array(request()->segment(1), ['it-office', 'finances']))

                <x-link-button label="Editar comerciante"
                    href="{{ route(''.request()->segment(1).'.merchants.edit',['merchant' => request()->segment(3)]) }}" />
                @endif
            </div>
        </header>
        <section>
            @livewire('modules.merchants.show-merchant')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Comercios" />
            <div>
                @if (in_array(request()->segment(1), ['it-office', 'finances']))
                <x-link-button label="Agregar comercio"
                    href="{{ route(''.request()->segment(1).'.merchants.businesses.create',['merchant' => request()->segment(3)]) }}" />
                @endif
            </div>
        </header>
        <section>
            <section>
                @livewire('modules.businesses.list-businesses')
            </section>
        </section>
    </div>
</x-layouts>
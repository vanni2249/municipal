<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comercio"
                href="{{ route(''.request()->segment(1).'.merchants.show', ['merchant' => request()->segment(3)]) }}" />
            <div>
                @if (in_array(request()->segment(1), ['it-office', 'finances']))
                <x-link-button label="Editar comercio"
                    href="{{ route(''.request()->segment(1).'.merchants.businesses.edit',['merchant' => request()->segment(3), 'business' => request()->segment(5)]) }}" />
                @endif
            </div>
        </header>
        <section>
            @livewire('modules.businesses.show-business')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Patentas" />
            <div>
                @if (in_array(request()->segment(1), ['it-office', 'finances']))

                <x-link-button label="Nueva patenta"
                    href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.create',['merchant' => request()->segment(3), 'business' => request()->segment(5)]) }}" />
                @endif
                </div>
        </header>
        <section>
            <section>
                @livewire('modules.patents.list-patents')
            </section>
        </section>
    </div>
</x-layouts>
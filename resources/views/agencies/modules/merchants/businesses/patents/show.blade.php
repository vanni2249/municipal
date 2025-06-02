<x-layouts.agencies>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Patentas" href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.show', ['merchant' => request()->segment(4), 'business' => request()->segment(6)]) }}" />
            {{-- @if (in_array(request()->segment(2), ['it-office', 'finances']))
            <div>
                <x-link-button label="Editar comercio"
                    href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.edit',['merchant' => request()->segment(4), 'business' => request()->segment(6)]) }}" />
            </div>
            @endif --}}
        </header>
        <section>
            @livewire('modules.patents.show-patent')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Periodos" />
            @if (in_array(request()->segment(2), ['it-office', 'finances']))
            <div>
                <x-link-button label="Agregar periodo"
                    href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.patents.create',
                    ['merchant' => request()->segment(4), 'business' => request()->segment(6)]) }}" />
            </div>
            @endif
        </header>
        <section>
            <section>
                @livewire('modules.periods.list-periods')
            </section>
        </section>
    </div>
</x-layouts.agencies>
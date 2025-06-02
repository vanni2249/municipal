<x-layouts.agencies>
<div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comercio" href="{{ route('agencies.'.request()->segment(2).'.merchants.show', ['merchant' => request()->segment(4)]) }}" />
            @if (in_array(request()->segment(2), ['it-office', 'finances']))
            <div>
                <x-link-button label="Editar comercio"
                    href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.edit',['merchant' => request()->segment(4), 'business' => request()->segment(6)]) }}" />
            </div>
            @endif
        </header>
        <section>
            @livewire('modules.businesses.show-business')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Patentas" />
            @if (in_array(request()->segment(2), ['it-office', 'finances']))
            <div>
                <x-link-button label="Agregar comercio"
                    href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.patents.create',['merchant' => request()->segment(4), 'business' => request()->segment(6)]) }}" />
            </div>
            @endif
        </header>
        <section>
            <section>
                @livewire('modules.patents.list-patents')
            </section>
        </section>
    </div>
</x-layouts.agencies>
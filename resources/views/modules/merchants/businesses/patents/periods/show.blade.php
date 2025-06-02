<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="md:flex space-y-4 md:space-y-0 justify-between items-center">
            <x-title title="Periodo"
                href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.show', 
                    [
                        'merchant' => request()->segment(3), 
                        'business' => request()->segment(5), 
                        'patent' => request()->segment(7)
                    ]) 
                }}" />
            {{-- <div>
                @if (in_array(request()->segment(1), ['it-office', 'finances']))

                <x-link-button label="Editar patenta"
                    href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.edit',['merchant' => request()->segment(3), 'business' => request()->segment(5), 'patent' => request()->segment(7)]) }}" />
                @endif
            </div> --}}
        </header>
        <section>
            @livewire('modules.periods.show-period')
        </section>
        <header class="md:flex space-y-4 md:space-y-0 md:justify-between items-center">
            <x-title title="Invoices" />
            <div>
                {{-- @if (in_array(request()->segment(1), ['it-office', 'finances']))

                <x-link-button label="Agregar periodo o renovacion" 
                    href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.periods.create',
                    ['merchant' => request()->segment(3), 'business' => request()->segment(5), 'patent' => request()->segment(7)]) }}" />
                @endif --}}
            </div>
        </header>
        <section>
            <section>
                @livewire('modules.invoices.list-invoices')
            </section>
        </section>
    </div>
</x-layouts>
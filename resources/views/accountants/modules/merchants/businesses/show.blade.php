<x-layouts.accountants>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comercio" href="{{ route('accountants.merchants.show', ['merchant' => request()->segment(3)]) }}" />
            <div>
                <x-link-button label="Editar comercio"
                    href="{{ route('accountants.merchants.businesses.edit',['merchant' => request()->segment(3), 'business' => request()->segment(5)]) }}" />
            </div>
        </header>
        <section>
            @livewire('modules.businesses.show-business')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Patentas" />
            <div>
                <x-link-button label="Agregar comercio"
                    href="{{ route('accountants.merchants.businesses.patents.create',['merchant' => request()->segment(3), 'business' => request()->segment(5)]) }}" />
            </div>
        </header>
        <section>
            <section>
                @livewire('modules.patents.list-patents')
            </section>
        </section>
    </div>
</x-layouts.accountants>
<x-layouts.accountants>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Comerciante" href="{{ route('accountants.merchants.index') }}" />
            <div>
                <x-link-button label="Editar comerciante" href="{{ route('accountants.merchants.edit', ['merchant' => 1]) }}" />
            </div>
        </header>
        <section>
            @livewire('modules.merchants.show-merchant')
        </section>
        <header class="flex justify-between items-center">
            <x-title title="Comercios" />
            <div>
                <x-link-button label="Agregar comercio" href="{{ route('accountants.merchants.businesses.create', ['merchant' => request()->segment(3)]) }}" />
            </div>
        </header>
        <section>
            <section>
                @livewire('modules.businesses.list-businesses')
            </section>
        </section>
    </div>
</x-layouts.accountants>
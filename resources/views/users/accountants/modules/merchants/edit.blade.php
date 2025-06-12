<x-layouts.accountants>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Editar Comerciante" href="{{ route('accountants.merchants.show', ['merchant' => request()->segment(3)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.merchants.edit-merchant')
        </section>
    </div>
</x-layouts.accountants>
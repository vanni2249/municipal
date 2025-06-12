<x-layouts.accountants>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Editar comercio" href="{{ route('accountants.merchants.businesses.show', ['merchant' => request()->segment(3), 'business' => request()->segment(5)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.businesses.create-business')
        </section>
    </div>
</x-layouts.accountants>
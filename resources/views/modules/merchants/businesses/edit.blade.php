<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Editar comercio" href="{{ route(''.request()->segment(1).'.merchants.businesses.show', ['merchant' => request()->segment(3), 'business' => request()->segment(5)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.businesses.edit-business')
        </section>
    </div>
</x-layouts>
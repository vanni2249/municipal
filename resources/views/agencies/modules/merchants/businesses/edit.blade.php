<x-layouts.agencies>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Editar comercio" href="{{ route('agencies.'.request()->segment(2).'.merchants.businesses.show', ['merchant' => request()->segment(4), 'business' => request()->segment(6)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.businesses.edit-business')
        </section>
    </div>
</x-layouts.agencies>
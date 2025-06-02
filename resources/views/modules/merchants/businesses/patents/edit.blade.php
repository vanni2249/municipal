<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Editar patenta"  href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.show', 
            ['merchant' => request()->segment(3), 'business' => request()->segment(5), 'patent' => request()->segment(7)]) }}"/>
        </header>
        <section>
            @livewire('modules.patents.edit-patent')
        </section>
    </div>
</x-layouts.agencies>
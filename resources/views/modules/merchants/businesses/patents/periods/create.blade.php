<x-layouts.agencies>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Nuevo periodo o renovacion"  href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.show', 
            ['merchant' => request()->segment(3), 'business' => request()->segment(5), 'patent' => request()->segment(7)]) }}"/>
        </header>
        <section>
            @livewire('modules.periods.create-period')
        </section>
    </div>
</x-layouts.agencies>
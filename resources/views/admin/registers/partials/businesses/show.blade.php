<x-layouts.admin>
     <div class="grid grid-cols-12 gap-4 px-4">
        <!-- Business Detail -->
        <div class="col-span-full lg:col-span-full">
            @livewire('agencies.businesses.detail-business')
        </div>
        <!-- Patents -->
        <div class="col-span-full lg:col-span-full">
            @livewire('agencies.patents.list-patents', ['show' => 2, 'head' => false])
        </div>
        <!-- Permits -->
        <div class="col-span-full lg:col-span-full">
            @livewire('agencies.permits.list-permits', ['show' => 5, 'head' => false])
        </div>
        <!-- Settlements -->
        <div class="col-span-full lg:col-span-full">
            @livewire('agencies.settlements.list-settlements', ['show' => 8, 'head' => false])
        </div>
    </div>
</x-layouts.admin>
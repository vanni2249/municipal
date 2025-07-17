<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
        <!-- Merchant Detail -->
        <div class="col-span-full lg:col-span-full">
            @livewire('agencies.merchants.detail-merchant')
        </div>
        <!-- Businesses -->
        <div class="col-span-full lg:col-span-full">
            @livewire('agencies.businesses.list-businesses', ['show' => 3, 'head' => false])
        </div>
    </div>
</x-layouts.agencies>
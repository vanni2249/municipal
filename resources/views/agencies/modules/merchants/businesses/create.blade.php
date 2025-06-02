<x-layouts.agencies>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Agreagar comercio" href="{{ route('agencies.'.request()->segment(2).'.merchants.show', ['merchant' => request()->segment(4)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.businesses.create-business')
        </section>
    </div>
</x-layouts.agencies>
<x-layouts type="{{ request()->segment(1) }}">
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Agreagar comercio" href="{{ route(''.request()->segment(1).'.merchants.show', ['merchant' => request()->segment(3)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.businesses.create-business')
        </section>
    </div>
</x-layouts>
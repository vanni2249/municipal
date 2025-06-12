<x-layouts.accountants>
    <div class="p-4 space-y-4">
        <header class="flex justify-between items-center">
            <x-title title="Agreagr comercio" href="{{ route('accountants.merchants.show', ['merchant' => request()->segment(3)]) }}"/>
        </header>
        <section class="">
            @livewire('modules.businesses.create-business')
        </section>
    </div>
</x-layouts.accountants>
<x-layouts.citizen-help-office>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Tablero" />

        </header>
         @include('agencies.dashboard.widgets')
        <div class="col-span-full"></div>
        @include('agencies.dashboard.list')
    </div>
</x-layouts.citizen-help-office>
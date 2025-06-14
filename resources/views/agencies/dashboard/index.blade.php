<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-2">
        {{-- <div class="col-span-full flex flex-wrap px-4  no-scrollbar overflow-x-auto"> --}}
        <div class="col-span-full grid grid-cols-12 gap-2 px-4">
            @include('agencies.dashboard.widgets')
        </div>
        {{-- <div class="col-span-full"></div> --}}
        {{-- @include('agencies.dashboard.list') --}}
    </div>
</x-layouts.agencies>

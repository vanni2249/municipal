<div class="animate-pulse space-y-2">
    <x-card>
        <header class="flex justify-between space-x-2 items-start">
            <div class="space-y-2">
                <div class="h-4 bg-gray-300 rounded w-24"></div>
                <div class="h-4 bg-gray-300 rounded w-48"></div>
            </div>
        </header>
    </x-card>
   <div class="col-span-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
        @for ($i = 0; $i < 4; $i++)
            <x-card>
                <div class="flex-1 flex flex-col space-y-2 md:flex-row md:space-x-2 md:items-start">
                    <div class="h-12 bg-gray-300 rounded-full w-12"></div>
                    {{-- <div class="h-4 bg-gray-300 rounded w-24"></div> --}}
                    <div class="flex flex-col space-y-2">
                        <div class="h-2 bg-gray-300 rounded w-12"></div>
                        <div class="h-4 bg-gray-300 rounded w-24"></div>
                    </div>
                </div>
            </x-card>
        @endfor
    </div>
</div>
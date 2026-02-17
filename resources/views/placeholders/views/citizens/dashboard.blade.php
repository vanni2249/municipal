<div class="animate-pulse grid grid-cols-12 gap-2">
    <div class="col-span-full">
        <x-card>
            <header class="flex justify-between space-x-2 items-start">
                <div class="space-y-2">
                    <div class="h-4 bg-gray-300 rounded w-48"></div>
                    <div class="h-4 bg-gray-300 rounded w-24"></div>
                </div>
                <div class="space-y-2 flex flex-col items-end">
                    <div class="h-4 bg-gray-300 rounded w-24"></div>
                    <div class="h-4 bg-gray-300 rounded w-12"></div>
                </div>
            </header>
        </x-card>
    </div>
    <div class="col-span-full">
        <x-card>
            <header class="flex justify-between space-x-2 items-start">
                <div class="space-y-2">
                    <div class="h-4 bg-gray-300 rounded w-48"></div>
                </div>
                <div class="space-y-2">
                    <div class="h-4 bg-gray-300 rounded w-24"></div>
                </div>
            </header>
        </x-card>
    </div>
    <div class="col-span-full grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2">
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
    <div class="col-span-full lg:col-span-7">
        <x-card>
            <div class="flex justify-between">
                <div class="h-4 bg-gray-300 rounded w-32"></div>
                <div class="h-4 bg-gray-300 rounded w-24"></div>
            </div>
            <div class="space-y-2">
                @for ($i = 0; $i < 3; $i++)
                    <div class="h-12 bg-gray-300 rounded w-full"></div>
                @endfor
            </div>

        </x-card>
    </div>
    <div class="col-span-full lg:col-span-5">
        <x-card>
            <div class="flex justify-between">
                <div class="h-4 bg-gray-300 rounded w-32"></div>
                <div class="h-4 bg-gray-300 rounded w-24"></div>
            </div>
            <div class="space-y-2">
                @for ($i = 0; $i < 3; $i++)
                    <div class="h-12 bg-gray-300 rounded w-full"></div>
                @endfor
            </div>

        </x-card>
    </div>

</div>

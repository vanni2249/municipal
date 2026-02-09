<div class="animate-pulse space-y-4">
    <header>
        <x-card>
            <header class="flex justify-between space-x-2 items-start">
                <div class="space-y-2">
                    <div class="h-4 bg-gray-300 rounded w-56"></div>
                    <div class="h-4 bg-gray-300 rounded w-24"></div>

                </div>
                <div class="h-4 bg-gray-300 rounded w-24"></div>
            </header>
        </x-card>
    </header>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4   ">
            <x-card>
                <header class="flex justify-between space-x-2 items-start">
                    <div class="h-4 bg-gray-300 rounded w-48"></div>
                </header>
                <div class="grid grid-cols-1 gap-4">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="space-y-2">

                            <div class="h-4 bg-gray-300 rounded w-24"></div>
                            <div class="h-10 bg-gray-300 rounded w-full"></div>
                        </div>
                    @endfor
                </div>
            </x-card>
            <x-card>
                <header class="flex justify-between space-x-2 items-start">
                    <div class="h-4 bg-gray-300 rounded w-48"></div>
                </header>
                <div class="grid grid-cols-1 gap-4">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="space-y-2">

                            {{-- <div class="h-4 bg-gray-300 rounded w-24"></div> --}}
                            <div class="h-10 bg-gray-300 rounded w-full"></div>
                        </div>
                    @endfor
                </div>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-7">
            <x-card>
                <header class="flex justify-between space-x-2 items-start">
                    <div class="h-4 bg-gray-300 rounded w-48"></div>
                    <div class="h-4 bg-gray-300 rounded w-24"></div>
                </header>
                <div class="grid grid-cols-1 gap-4">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="space-y-2">

                            <div class="h-4 bg-gray-300 rounded w-24"></div>
                            <div class="h-10 bg-gray-300 rounded w-full"></div>
                        </div>
                    @endfor
                </div>
            </x-card>
        </div>
    </div>
</div>

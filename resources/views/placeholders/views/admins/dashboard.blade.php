<div class="animate-pulse space-y-2">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2">
        @for ($i = 0; $i < 4; $i++)
            <x-card>
                <header class="flex justify-between space-x-2 items-start">
                    <div class="space-y-2">
                        <div class="h-2 bg-gray-300 rounded w-24"></div>
                        <div class="h-2 bg-gray-300 rounded w-12"></div>
                    </div>
                    <div>
                        <div class="h-2 bg-gray-300 rounded w-4"></div>
                    </div>
                </header>
            </x-card>
        @endfor
    </div>
    <div class="grid grid-cols-12 gap-2">
        <x-card class="col-span-full lg:col-span-12">
            <header class="mb-8">
                <div class="h-4 bg-gray-300 rounded w-32"></div>
            </header>
            <div class="flex flex-row items-end space-x-2 mt-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="h-64 bg-gray-300 rounded w-1/6"></div>
                    <div class="h-32 bg-gray-300 rounded w-1/6"></div>
                    <div class="h-12 bg-gray-300 rounded w-1/6"></div>
                    <div class="h-48 bg-gray-300 rounded w-1/6"></div>
                    <div class="h-54 bg-gray-300 rounded w-1/6"></div>
                    <div class="h-24 bg-gray-300 rounded w-1/6"></div>
                @endfor
            </div>
        </x-card>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
        @for ($i = 0; $i < 4; $i++)
            <x-card>
                <header class="mb-4">
                    <div class="h-4 bg-gray-300 rounded w-24"></div>
                </header>
                <div class="space-y-2">
                    <div class="h-4 bg-gray-300 rounded w-full"></div>
                    <div class="h-4 bg-gray-300 rounded w-full"></div>
                    <div class="h-4 bg-gray-300 rounded w-full"></div>
                    <div class="h-4 bg-gray-300 rounded w-full"></div>
                </div>
            </x-card>
        @endfor
    </div>
</div>

<div class="animate-pulse space-y-2">
    <x-card>
        <header class="flex justify-between space-x-2 items-start">
            <div class="space-y-2">
                <div class="h-4 bg-gray-300 rounded w-24"></div>
                <div class="h-4 bg-gray-300 rounded w-48"></div>
            </div>
            <div>
                <div class="h-4 bg-gray-300 rounded w-8"></div>
            </div>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-4">
        <x-card class="col-span-full lg:col-span-12">
            <header class="space-y-2">
                <div class="h-4 bg-gray-300 rounded w-24"></div>
                <div class="h-4 bg-gray-300 rounded w-32"></div>
            </header>
            <div class="grid grid-cols-1 gap-4">
                @for ($i = 0; $i < 3; $i++)
                <div class="h-12 bg-gray-300 rounded w-full"></div>
                @endfor
            </div>
        </x-card>
    </div>
</div>
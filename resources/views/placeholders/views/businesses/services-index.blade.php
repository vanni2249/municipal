<div class="animate-pulse space-y-4">
    <x-card>
        <header class="flex justify-between space-x-2 items-start">
            <div class="space-y-2">
                <div class="h-4 bg-gray-300 rounded w-24"></div>
                <div class="h-4 bg-gray-300 rounded w-48"></div>
            </div>
        </header>
    </x-card>
    <x-card>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="h-24 bg-gray-300 rounded w-full"></div>
            @endfor
        </div>
    </x-card>
</div>
<div class="animate-pulse space-y-2">
    <x-card>
        <header class="flex justify-between space-x-2 items-start">
            <div class="space-y-2">
                <div class="h-4 bg-gray-300 rounded w-24"></div>
                <div class="h-4 bg-gray-300 rounded w-48"></div>
            </div>
            <div class="space-y-2">
                <div class="h-8 bg-gray-300 rounded w-12"></div>
            </div>
        </header>
    </x-card>
    <x-card>
        <div class="grid grid-cols-1 gap-4">
            @for ($i = 0; $i < 2; $i++)
                <div class="h-12 bg-gray-300 rounded w-full"></div>
            @endfor
        </div>
    </x-card>
</div>

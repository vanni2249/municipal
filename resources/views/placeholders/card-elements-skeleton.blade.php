<x-card class="">
    <div class="space-y-4 animate-pulse">
        <header class="">
            <div class="flex justify-between items-center">
                <div class="h-4 bg-gray-300 rounded w-24"></div>
                <div class="h-4 bg-gray-300 rounded w-20"></div>
            </div>
        </header>
        <div class="space-y-2">
            @for ($i = 0; $i < 2; $i++)
                <div class="h-8 bg-gray-300 rounded w-full"></div>
            @endfor
        </div>
    </div>

</x-card>

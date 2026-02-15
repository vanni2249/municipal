<div class="animate-pulse space-y-2">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <div class="h-4 bg-gray-300 rounded w-56"></div>
                <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                    <li>
                        <div class="h-4 bg-gray-300 rounded w-24"></div>
                    </li>
                </ul>
            </div>
        </header>
    </x-card>

    <x-card>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-6 space-y-4   ">
                @for ($i = 0; $i < 2; $i++)
                    <div class="h-4 bg-gray-300 rounded w-48"></div>
                    <div class="h-10 bg-gray-300 rounded w-full mt-2"></div>
                @endfor
                <div class="h-8 bg-gray-300 rounded w-24"></div>
            </div>
        </div>
    </x-card>

</div>

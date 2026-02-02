<div class="space-y-4">
    {{-- <x-card> --}}

        <div class="space-y-4">
            <!-- Header skeleton -->
            <div class="flex items-center justify-between">
                <div class="h-6 bg-gray-200 rounded w-32"></div>
                <div class="h-4 bg-gray-200 rounded w-20"></div>
            </div>

            <!-- Table skeleton -->
            <div class="space-y-3 border border-gray-200 rounded p-4">
                <!-- Table header -->
                <div class="grid grid-cols-6 gap-4 pb-2 border-b border-gray-100">
                    <div class="h-4 bg-gray-200 rounded w-16"></div>
                    <div class="h-4 bg-gray-200 rounded w-20"></div>
                    <div class="h-4 bg-gray-200 rounded w-18"></div>
                    <div class="h-4 bg-gray-200 rounded w-16"></div>
                    <div class="h-4 bg-gray-200 rounded w-14"></div>
                    <div class="h-4 bg-gray-200 rounded w-14"></div>
                </div>

                <!-- Table rows -->
                @for ($i = 0; $i < 5; $i++)
                    <div class="grid grid-cols-6 gap-4 py-3 border-b border-gray-100">
                        <div class="h-4 bg-gray-200 rounded w-24"></div>
                        <div class="h-4 bg-gray-200 rounded w-32"></div>
                        <div class="h-4 bg-gray-200 rounded w-24"></div>
                        <div class="h-4 bg-gray-200 rounded w-20"></div>
                        <div class="h-4 bg-gray-200 rounded w-16"></div>
                        <div class="h-4 bg-gray-200 rounded w-16"></div>
                    </div>
                @endfor
            </div>
        </div>
    {{-- </x-card> --}}
</div>

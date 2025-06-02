<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex justify-between items-center pb-4">
                        <h2 class="text-sm font-bold text-gray-800">
                            Servicios al ciudadano
                        </h2>
                    </header>
                    <div class="grid grid-cols-12 gap-4">
                        @foreach (collect(\App\Data\Services\User::items())->take(6) as $item)
                        <a href="{{ route($item['route']) }}"
                            class="flex flex-col space-y-1 col-span-full md:col-span-4 lg:col-span-3 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
                            <div class="">
                                <img src="{{ asset($item['img']) }}" class="rounded-t-xl" alt="">
                            </div>
                            <div class="p-4">
                                <span class="text-sm text-gray-700 font-bold">
                                    {{ $item['title'] }}
                                </span>
                                <span class="text-gray-500 line-clamp-2">
                                    {{ $item['sub-title'] }}
                                </span>
                            </div>
                        </a>

                        @endforeach
                    </div>
                </x-card>
            </div>
        </div>
    </div>

</x-layouts.users>
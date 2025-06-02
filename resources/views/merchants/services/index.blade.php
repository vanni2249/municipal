<x-layouts.merchants>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4 ">
                <x-card class="col-span-full p-4 h-full rounded-xl">
                   <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-6">
                        <h2 class="text-sm md:text-xl lg:text-lg font-bold text-gray-600">
                            Servico al comerciante
                        </h2>
                    </header>
                    <div class="grid grid-cols-12 gap-4">
                        @foreach (\App\Data\Services\Merchant::items() as $item)
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
</x-layouts.merchants>
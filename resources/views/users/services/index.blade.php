<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4 ">
                <x-card class="col-span-full p-4 h-full rounded-xl">
                   <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Servicos
                        </h2>
                    </header>
                    <div class="grid grid-cols-12 gap-2">
                        @foreach (collect(\App\Data\Service::items())->filter(function ($item) {
                            return in_array(request()->segment(1), $item['users']);
                        })->all() as $item)
                            <a href="{{ route($item['route']) }}"
                                class="flex flex-col space-y-1 col-span-6 md:col-span-3 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
                                @if (isset($item['img']))
                                <div>
                                    <img src="{{ asset($item['img']) }}" class="rounded-t-xl" alt="">
                                </div>
                                @endif
                                <div class="p-2 lg:p-4">
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
</x-layouts.users>
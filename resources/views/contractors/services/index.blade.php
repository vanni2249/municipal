<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4">

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full space-y-4">
                <header class="">
                    <x-title title="Servicios al ciudadano" />
                </header>
                <x-card class="col-span-full p-4 h-full">
                    <div class="grid grid-cols-12 gap-2">
                        @foreach (App\Data\Services\User::items() as $item)
                        <a href="{{ route($item['route'], ['slug' => $item['slug']]) }}"
                            class="flex flex-col space-y-1 col-span-full lg:col-span-4 bg-gray-100 text-xs text-gray-700 p-2 md:p-4 hover:bg-gray-200 rounded">
                            <span class="text-sm uppercase text-gray-700 font-bold">
                                {{ $item['title'] }}
                            </span>
                            <span class="text-gray-500 line-clamp-2">
                                {{ $item['sub-title'] }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                </x-card>
            </div>
        </div>
    </div>

</x-layouts.users>
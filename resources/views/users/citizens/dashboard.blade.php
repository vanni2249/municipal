<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-2 md:gap-4">
            <x-card class="col-span-full md:col-span-12 p-4 lg:p-8 rounded-xl"  color="bg-black">
                <header class="flex justify-between items-start">
                    <div>
                        <span class="text-xs font-bold text-gray-200">Bienvenidos</span>
                        <h2 class="text-2xl font-bold text-white">
                            Juan del Pueblo
                        </h2>
                    </div>
                    <div>
                        <div>
                            <a href="#" class="text-xs text-gray-200  font-bold">Mas informacion</a>
                            {{-- <x-link href="#" class="text-xs text-gray-200">Mi informacion</x-link> --}}
                        </div>
                    </div>
                </header>
            </x-card>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex justify-between items-center pb-4">
                        <h2 class="text-sm font-bold text-gray-800">
                            Servicios al ciudadano
                        </h2>
                        <div>
                            <a href="{{ route('citizens.services.index') }}" 
                                class="text-xs text-gray-700">
                                Ver todos
                            </a>
                        </div>
                    </header>
                    <div class="grid grid-cols-12 gap-4">
                        @foreach (collect(\App\Data\Services\User::items())->take(6) as $item)
                        <a href="{{ route($item['route']) }}"
                            class="flex flex-col space-y-1 col-span-full md:col-span-4 lg:col-span-4 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
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
            <div class="col-span-full lg:col-span-4 space-y-4 h-auto">
                @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>
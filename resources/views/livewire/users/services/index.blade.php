<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4 ">
            <x-card class="col-span-full p-4 h-full rounded-xl">
                <header
                    class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Servicios
                    </h2>
                </header>
                <div class="grid grid-cols-12 gap-2">
                    @forelse ($services as $service)
                    <a href="{{ route($service->url) }}"
                        class="flex flex-col space-y-1 col-span-12 md:col-span-3 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
                        <div class="p-2 lg:p-4">
                            <span class="text-sm text-gray-700 font-bold">
                                {{ $service->es_name }}
                            </span>
                            <span class="text-gray-500 line-clamp-2">
                                {{ $service->es_description }}
                            </span>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-full text-center text-gray-500">
                        No hay servicios disponibles.
                    </div>
                    @endforelse
                </div>
            </x-card>
        </div>
    </div>
</div>
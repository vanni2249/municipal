<div>
    <section class="grid grid-cols-12 gap-2 lg:gap-4 pt-4  max-w-7xl px-4 mx-auto">
        <header id="services" class="col-span-full pt-4 px-2">
            <h2 class="font-bold text-xl text-gray-800">
                Servicios municipales
            </h2>
        </header>
    @foreach ($types as $type)

    <div
        class="bg-white col-span-full md:col-span-6 lg:col-span-4 px-4 py-6 md:p-6 lg:p-8 rounded-xl flex flex-col space-y-6">
        <header class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-gray-700 leading-3">
                Servicios al {{ $type->es_name }}
            </h2>
        </header>
        <ul class="grow text-sm space-y-4 py-2 px-1">
            @foreach ($type->services->take(6) as $service)
            <li class="text-gray-600 line-clamp-1 ">
                {{ $service->es_name }}
            </li>
            @endforeach
        </ul>
        <footer class="flex justify-center">
            <a href="{{ route('types.show', $type) }}"
                class="border border-gray-300 font-bold text-gray-600 hover:text-gray-800 transition-all hover:bg-gray-200 w-full text-center text-xs py-2 rounded-full">
                Ver todos los servicios
            </a>
        </footer>
    </div>
    @endforeach
    </section>
</div>
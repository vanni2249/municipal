<x-layouts.merchants>
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
            <x-card class="col-span-full p-4 lg:p-8 rounded-xl">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                    <div>
                        <h2 class="text-sm text-gray-800 font-bold">Solicitar atencion al comerciate</h2>
                        <p class="text-sm text-gray-600 py-4">
                            Puede solicitar atencion al comerciante para resolver dudas o problemas relacionados a su comercio.
                            Recibira una llamada devuelta si solicita una llamada o correo electronico si nos escribe un mensaje.
                        </p>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2">
                        <a href="#"
                            class="border border-gray-300 hover:bg-gray-300 whitespace-nowrap p-2 rounded font-bold uppercase text-center text-xs text-black">
                            Solicitar llamada
                        </a>
                        <a href="#"
                            class="bg-black hover:bg-gray-800 whitespace-nowrap p-2 rounded font-bold uppercase text-center text-xs text-white">
                            Escribir mensaje
                        </a>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="grid grid-cols-12 gap-4 ">
            <div class="col-span-full lg:col-span-8">
                <x-card class="col-span-full md:col-span-8 p-4 h-full rounded-xl">
                    <header class="flex justify-between items-start pb-4">
                        <h2 class=" text-sm font-bold text-gray-800">
                            Servicios al comerciante
                        </h2>
                        <div>
                            <a href="{{ route('merchants.services.index') }}" class="text-xs text-gray-700">
                                Mas servicios
                            </a>
                        </div>
                    </header>
                    <div class="grid grid-cols-12 gap-2">
                        @foreach (collect(\App\Data\Services\Merchant::items())->take(6) as $item)
                        <a href="{{ route($item['route']) }}"
                            class="flex flex-col space-y-1 col-span-full md:col-span-4 bg-gray-100 text-xs text-gray-700 hover:bg-gray-200 rounded-xl">
                            <div class="">
                                <img src="{{ asset($item['img']) }}" class="rounded-t-xl" alt="">
                            </div>
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
            <div class="col-span-full lg:col-span-4 space-y-4 h-auto">
                <x-card class="col-span-full md:col-span-4 p-4 rounded-xl">
                    <header class="flex justify-between items-start pb-4">
                        <h2 class=" text-sm font-bold text-gray-800">
                            Noticias y avisos
                        </h2>
                        <div>
                            <a href="#" class="text-xs text-gray-700">
                                Mas noticias y avisos
                            </a>
                        </div>
                    </header>
                    <div class="grid grid-cols-12 gap-2">
                        @for ($i = 0; $i < 6; $i++) 
                        <a href="#" class="flex flex-row items-center col-span-full bg-gray-100 text-xs text-gray-700 p-2 md:p-4 hover:bg-gray-200 rounded">
                            <div class="grow">
                                <small>hace 4 dias</small>
                                <p class="text-sm text-gray-700 font-bold line-clamp-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptates?
                                </p>
                            </div>
                            <div>
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                                </svg>

                            </div>

                        </a>
                        @endfor
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.merchants>
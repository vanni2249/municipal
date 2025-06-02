<x-layouts.users>
    <div class="max-w-7xl mx-auto py-4 px-4 space-y-4">
        <div class="grid grid-cols-12 gap-2 md:gap-4">
            <!-- Perfil -->
            <x-card class="col-span-full md:col-span-12 p-4 md:p-6 lg:p-8">
                <div class="flex flex-row justify-between items-start">
                    <div>
                        <span class="text-xs font-bold text-gray-600">Bienvenidos</span>
                        <h2 class="text-2xl font-bold text-gray-800">
                            Juan del Pueblo
                        </h2>

                        <ul class="flex space-x-4 text-gray-600 text-xs font-semibold pt-2">
                            <li>
                                <a href="#" class="flex items-center space-x-2">
                                    <span>
                                        <img src="{{ asset('icons/phone.svg') }}" class="w-3 text-gray-500" alt="">
                                    </span>
                                    <span>
                                        +7871237894
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center space-x-1">
                                    <span>
                                        <img src="{{ asset('icons/at-symbol.svg') }}" class="w-3 text-gray-500" alt="">
                                    </span>
                                    <span>
                                        juan@mail.com
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <x-link href="">Mas informacion</x-link>
                    </div>
                </div>
            </x-card>
            <!-- Costumer services -->
            <x-card class="col-span-full p-4 md:p-6 lg:p-8" color="bg-black">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                    <div>
                        <h2 class="text-xl text-white font-bold">Solicitar atencion al contratista
                        <p class="text-sm text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Placeat minus magnam nulla omnis ut officiis doloremque repellat illum blanditiis quae,
                            distinctio dignissimos adipisci modi pariatur eaque unde! Neque, atque unde!</p>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2">
                        <a href="#"
                            class="bg-white whitespace-nowrap p-2 rounded font-bold uppercase text-center text-xs text-black">
                            Solicitar llamada
                        </a>
                        <a href="#"
                            class="bg-white whitespace-nowrap p-2 rounded font-bold uppercase text-center text-xs text-black">
                            Escribir mensaje
                        </a>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="col-span-full md:col-span-8 p-4 h-full">
                    <header class="pb-4 text-xs font-bold uppercase text-gray-600">Contratos disponibles</header>
                    <div class="grid grid-cols-12 gap-2">
                        @for ($i = 0; $i < 3; $i++) <a href="#"
                            class="flex flex-col space-y-1 col-span-full lg:col-span-6 bg-gray-100 text-xs text-gray-700 p-2 md:p-4 hover:bg-gray-200 rounded">
                            <span class="text-sm uppercase text-gray-700 font-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, volupt
                            </span>
                            <span class="text-gray-500 line-clamp-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat provident repellendus
                                repellat porro inventore deserunt alias eligendi illum corrupti molestiae quo debitis,
                                optio, dicta soluta necessitatibus, libero tempora beatae nulla.
                            </span>
                            </a>
                            @endfor
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4 space-y-4 h-auto">
                <x-card class="col-span-full md:col-span-4 p-4">
                    <header class="pb-4 text-xs font-bold uppercase text-gray-600">Mis comercios</header>
                    <div class="grid grid-cols-12 gap-2">
                        @for ($i = 0; $i < 2; $i++) <a href="#"
                            class="flex flex-col space-y-1 col-span-full bg-gray-100 text-xs text-gray-700 p-2 md:p-4 hover:shadow rounded">
                            <span class="text-sm text-gray-700 font-bold">
                                Farmacia Walgreens
                            </span>

                            </a>
                            @endfor
                    </div>
                </x-card>
                <x-card class="col-span-full md:col-span-4 p-4">
                    <header class="pb-4 text-xs font-bold uppercase text-gray-600">Noticias y avisos al comerciante
                    </header>
                    <div class="grid grid-cols-12 gap-2">
                        @for ($i = 0; $i < 2; $i++) <a href="#"
                            class="flex flex-col space-y-1 col-span-full bg-gray-100 text-xs text-gray-700 p-2 md:p-4 hover:shadow rounded">
                            <span class="text-sm text-gray-700 font-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptates?
                            </span>

                            </a>
                            @endfor
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>
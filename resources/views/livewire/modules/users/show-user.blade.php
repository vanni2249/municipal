<div>
    <div class="grid grid-cols-12 gap-4">
        <x-card class="col-span-full md:col-span-8 p-4">
                <header class="flex justify-between items-start">
                    <div>
                        <span class="text-xs font-bold text-gray-600">Bienvenidos</span>
                        <h2 class="text-2xl font-bold text-gray-800">
                            Juan del Pueblo
                        </h2>
                    </div>
                </header>
                <div class="grid grid-cols-12 gap-2  mt-4">
                    <div class="col-span-full bg-gray-100 p-4 rounded md:col-span-4">
                        <h3 class="pb-2">Contacto</h3>
                        <ul class="py-2 space-y-1 text-gray-600 text-xs font-semibold">
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
                    <div class="col-span-full bg-gray-100 p-4 rounded md:col-span-4">
                        <h3 class="pb-2">Direccion</h3>
                        <ul class="py-2 space-y-1 text-gray-600 text-xs font-semibold">
                            <li>
                                Villas del Prado
                            </li>
                            <li>
                                Calle 123
                            </li>
                            <li>
                                San Juan, PR 00926
                            </li>
                        </ul>
                    </div>

                </div>
            </x-card>
        <div class="col-span-full lg:col-span-4">
            <x-card class=""></x-card>
        </div>
    </div>
</div>

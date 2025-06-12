<x-card class="rounded-xl p-4">
    <header class="flex justify-between items-start">
        <h2 class="text-lg font-bold text-gray-900">
            Tienes dudas o necesitas ayuda?
        </h2>
    </header>
    <div class="flex flex-col md:flex-row lg:flex-col lg:justify-between lg:items-center">
        <div class="">
            <p class="text-gray-600 text-sm py-4">
                    Puedes solicitar una interaccion con el equipo de soporte
                    de la plataforma. Selecciona el tipo de interaccion que deseas realizar.
            </p>
        </div>
        <div class="flex items-center space-x-2 lg:w-full">
            <div class="flex w-1/2">
                <a href="{{ route(request()->segment(1) . '.interactions.calls.create') }}"
                    class="w-full bg-gray-200 hover:bg-gray-300 p-2 rounded-full flex justify-center items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    </svg>
                    <span class="text-xs text-gray-700 font-bold pr-5">
                        Llamada
                    </span>
                </a>
            </div>
            <div class="flex w-1/2">
                <a href="{{ route(request()->segment(1) . '.interactions.messages.create') }}"
                    class="w-full bg-gray-200 hover:bg-gray-300 p-2 rounded-full flex justify-center items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 9h8" />
                        <path d="M8 13h6" />
                        <path
                            d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                    </svg>
                    <span class="text-xs text-gray-700 font-bold pr-5">
                        Mensaje
                    </span>
                </a>
            </div>
        </div>
    </div>

</x-card>

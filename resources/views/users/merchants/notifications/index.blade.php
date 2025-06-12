<x-layouts.merchants>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-sm font-bold text-gray-600">
                            Notificaciones
                        </h2>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 2; $i++) 
                            <a href="{{ route('merchants.interactions.messages.show' , ['message' => $i]) }}"
                                class="bg-gray-100 hover:bg-gray-200 flex w-full p-4 rounded-xl">
                                <div class="flex w-full justify-between items-start">
                                    <div class="grow flex items-center space-x-4 p-2">
                                        <ul class="text-sm">
                                            <li class="text-xs text-gray-500">Mensajes de interraccion</li>
                                            <li class="text-gray-800 text-md font-bold ">
                                                Respuesta a tu mensaje sobre radicación de renovación de patente.
                                            </li>
                                            <li class="text-gray-600 text-xs mt-2">
                                                {{ rand(1, 12) }} horas atrás
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                @include('merchants.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.merchants>
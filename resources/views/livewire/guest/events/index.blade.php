<div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full md:col-span-8 space-y-2">
            <x-card class="border-b-4 border-blue-300">
                <header class="">
                    <div class="flex justify-between items-center">
                        <x-h1>
                            Eventos
                        </x-h1>
                    </div>
                    <p class="text-sm text-gray-800">
                        Mantente informado sobre los últimos eventos del municipio.
                    </p>
                </header>
            </x-card>
            <div class="space-y-2">
                @for ($i = 0; $i < 10; $i++)
                    <a href="{{ route('events.show', $i) }}" class="block col-span-full lg:col-span-6" wire:navigate>
                        <x-card class="h-full hover:shadow">
                            <span class="text-xs text-gray-700">
                                12 de Octubre de 2024
                            </span>
                            <p class="font-bold text-gray-950">
                                La ultima information sobre los eventos administrativos relacionados con el servicio
                            </p>
                            <ul class="text-gray-800">
                                <li class="flex space-x-1 items-start text-sm">
                                    <x-icon icon="clock" height="16" width="16"
                                        class="text-gray-700 stroke-1 inline-block" />
                                    <span>
                                        Hora: 10:00 AM - 12:00 PM
                                    </span>
                                </li>
                                <li class="flex space-x-1 items-start text-sm">
                                    <x-icon icon="map-pin" height="16" width="16"
                                        class="text-gray-700 stroke-1 inline-block" />
                                    <span>
                                        Ubicación: Oficina de Servicios Municipales
                                    </span>
                                </li>
                            </ul>
                        </x-card>
                    </a>
                @endfor
            </div>
        </div>
        <div class="col-span-full md:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Últimas Noticias" />
                    <a href="{{ route('news.index') }}" class="text-sm text-blue-500 hover:underline" wire:navigate>
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 5; $i++)
                        <a href="{{ route('news.show', $i) }}" class="block" wire:navigate>
                            <x-card-body-list class="hover:bg-gray-200">
                                <span class="text-xs text-gray-700">
                                    12 de Octubre de 2024
                                </span>
                                <p class="text-sm font-bold">
                                    La ultima informacion sobre los eventos administrativos relacionados con el servicio

                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
        </div>
    </div>
</div>

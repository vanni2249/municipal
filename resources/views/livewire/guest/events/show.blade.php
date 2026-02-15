<div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full md:col-span-8">
            <x-card>
                <header>
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
                </header>
                <div class="flex justify-center mt-4 w-full bg-gray-100 rounded-md lg:p-4">
                    <img src="{{ asset('img/news/1.png') }}" alt="lake" class="object-cover rounded-md">
                </div>
            </x-card>
        </div>
        <div class="col-span-full md:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Mas Eventos" />
                    <a href="{{ route('events.index') }}" class="text-sm text-blue-500 hover:underline">
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 2; $i++)
                        <a href="{{ route('events.show', $i) }}" class="block" wire:navigate>
                            <x-card-body-list class="hover:bg-gray-200">
                                <span class="text-xs text-gray-700">
                                    12 de Octubre de 2024
                                </span>
                                <p class="text-sm font-bold">
                                    Fin de semanan habra una actividad informativa sobre el servicio

                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Ultimas Noticias" />
                    <a href="{{ route('news.index') }}" class="text-sm text-blue-500 hover:underline">
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 2; $i++)
                        <a href="{{ route('news.show', $i) }}" class="block" wire:navigate>
                            <x-card-body-list class="hover:bg-gray-200">
                                <span class="text-xs text-gray-700">
                                    12 de Octubre de 2024
                                </span>
                                <p class="text-sm font-bold">
                                    La ultima informacion sobre los eventos admonistrativos relacionados con el servicio

                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
        </div>
    </div>
</div>

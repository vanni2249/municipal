<div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full md:col-span-8">
            <x-card>
                <header>
                    <span class="text-xs text-gray-700">
                        12 de Octubre de 2024
                    </span>
                    <x-h1>
                        Ultima noticia sobre los eventos administrativos relacionados con el servicio
                    </x-h1>
                    <ul class="text-gray-800">
                        <li class="flex space-x-1 items-start text-sm">
                            <x-icon icon="user" height="16" width="16"
                                class="text-gray-700 stroke-1 inline-block" />
                            <span>
                                Autor: Juan Perez
                            </span>
                        </li>
                    </ul>
                </header>
                <div class="flex justify-center mt-4 w-full bg-gray-100 rounded-md lg:p-4">
                    <img src="{{ asset('img/news/2.png') }}" alt="lake" class="object-cover rounded">
                </div>
                <div>
                    <p class="text-gray-700 leading-relaxed">
                        <b>Loremipsum dolor sit amet consectetur adipisicing elit.</b> Voluptas, doloremque. Doloribus
                        voluptate, cumque quisquam, doloremque voluptate, cumque quisquam, doloremque voluptate,
                        cumque quisquam, doloremque voluptate, cumque quisquam, doloremque voluptate,
                        <br />
                        Bumque quisquam, doloremque voluptate, cumque quisquam, doloremque voluptate, cumque
                        quisquam, doloremque voluptate, cumque quisquam, doloremque voluptate, cumque quisquam,
                        doloremque voluptate, cumque quisquam, doloremque voluptate, cumque quisquam, doloremque
                        voluptate, cumque quisquam, doloremque voluptate, cumque quisquam, doloremque voluptate, cumque
                        quisquam, doloremque voluptate, cumque quis
                    </p>
                </div>
            </x-card>
        </div>
        <div class="col-span-full md:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Noticias" />
                    <a href="#" class="text-sm text-blue-500 hover:underline">
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
                                    La ultima information sobre los eventos administrativos relacionados con el servicio

                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Eventos" />
                    <a href="#" class="text-sm text-blue-500 hover:underline">
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
                                    Fin de semana habrá una actividad informativa sobre el servicio

                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
        </div>
    </div>
</div>

<div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full md:col-span-8 space-y-2">
            <x-card class="border-b-4 border-blue-300">
                <header class="">
                    <div class="flex justify-between items-center">
                        <x-h3>
                            Noticias
                        </x-h3>
                    </div>
                    <p class="text-sm text-gray-800">
                        Mantente informado sobre las últimas noticias del municipio.
                    </p>
                </header>
            </x-card>
            <div class="space-y-1">

                @for ($i = 0; $i < 10; $i++)
                    <a href="{{ route('news.show', $i) }}" class="block" wire:navigate>
                        <x-card class="hover:shadow">
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
                        </x-card>
                    </a>
                @endfor
            </div>
            <x-card>

            </x-card>
        </div>
        <div class="col-span-full md:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Últimos Eventos" />
                    <a href="{{ route('events.index') }}" class="text-sm text-blue-500 hover:underline" wire:navigate>
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 5; $i++)
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
        </div>
    </div>
</div>

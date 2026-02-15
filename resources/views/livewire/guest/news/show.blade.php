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
                        <b>Geopolítica y Conflictos:</b>
                        <br>
                        <b>Tensiones Transatlánticas:</b> En la Conferencia de Seguridad de Múnich, el secretario de Estado de
                        EE. UU., Marco Rubio, advirtió a los aliados europeos que Estados Unidos podría "actuar solo" si
                        Europa no cambia su rumbo en temas de defensa y migración [0.4.5, 0.4.17]. Por su parte, el
                        canciller alemán Friedrich Merz pidió reparar la confianza mutua ante un orden global cambiante
                        [0.4.23].
                        <br>
                        <b>Caso Navalny:</b> Varios países europeos alegan que el opositor ruso Alexei Navalny fue asesinado
                        con una toxina de rana dardo, una revelación que ha intensificado las acusaciones contra el
                        Kremlin [0.4.2, 0.4.6].
                        <br>
                        <b>Guerra en Ucrania:</b> El presidente Zelenskyy denunció a Putin como un "esclavo de la guerra" y
                        señaló que Ucrania enfrenta presiones internacionales para hacer concesiones territoriales con
                        el fin de alcanzar la paz [0.4.6, 0.4.18].
                        <br>
                        <b>Política en Estados Unidos:</b>
                        <br>
                        <b>Crisis en la Frontera:</b> El Departamento de Seguridad Nacional (DHS) se encamina a un cierre
                        parcial debido a una falta de acuerdo presupuestario en el Congreso, en medio de críticas de los
                        demócratas por las recientes operaciones de deportación masiva de la administración Trump
                        [0.4.6, 0.4.20].
                        <br>
                        <b>Escándalo Epstein:</b> Se filtraron nuevos documentos que vinculan a figuras de alto perfil, lo que
                        provocó la renuncia de directivos como Casey Wasserman (jefe de los JJ. OO. de LA) y el CEO de
                        la logística emiratí DP World [0.4.18, 0.4.20].
                        <br>
                        <b>Ciencia y Tecnología:</b>
                        <br>
                        <b>Espacio:</b> Una nueva tripulación de la misión SpaceX Dragon llegó con éxito a la Estación Espacial
                        Internacional (ISS) para relevar a los astronautas que se encontraban allí [0.4.5, 0.4.18].
                        <br>
                        <b>Inteligencia Artificial:</b> Se reportó que el ejército de EE. UU. utilizó el modelo de IA Claude de
                        Anthropic en operativos recientes en Venezuela, lo que ha generado debates sobre la ética de la
                        IA en conflictos armados [0.4.18].

                    </p>
                </div>
            </x-card>
        </div>
        <div class="col-span-full md:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Noticias" />
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

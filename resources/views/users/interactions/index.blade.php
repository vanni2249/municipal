<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Interacciones
                        </h2>
                        <div class="flex lg:hidden space-x-2">
                            <div class="flex">
                                <a href="{{ route(request()->segment(1) . '.interactions.calls.create') }}"
                                    class="bg-gray-100 hover:bg-gray-300 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex">
                                <a href="{{ route(request()->segment(1) . '.interactions.messages.create') }}"
                                    class="bg-gray-100 hover:bg-gray-300 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 9h8" />
                                        <path d="M8 13h6" />
                                        <path
                                            d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 3; $i++)
                            @php
                                if ($i == 0) {
                                    $interaction = 'call';
                                } else {
                                    $interaction = 'message';
                                }
                            @endphp
                            <a href="{{ route(request()->segment(1) . '.interactions.' . $interaction . 's.show', [$interaction => $i]) }}"
                                class="bg-gray-100 hover:bg-gray-200 block p-2 md:p-4 rounded-xl">
                                <header class="flex justify-between items-center">
                                    <small class=" text-gray-600">
                                        @if ($i == 0)
                                            Llamada
                                        @else
                                            Mensaje
                                        @endif
                                    </small>
                                    @switch($i)
                                        @case(0)
                                            <x-badge color="yellow">
                                                Sin respuesta
                                            </x-badge>
                                        @break

                                        @case(1)
                                            <x-badge color="green">
                                                Respondido
                                            </x-badge>
                                        @break

                                        @case(2)
                                            <x-badge color="red">
                                                Cerrado
                                            </x-badge>
                                        @break

                                        @default
                                    @endswitch
                                </header>
                                <div class="flex w-full justify-between items-start">
                                    <ul class="text-sm pt-2">
                                        <li class="text-gray-800 text-md font-bold ">
                                            @switch($i)
                                                @case(0)
                                                    Radicacion de renovacion de patente
                                                @break

                                                @case(1)
                                                    Solicitar uso de facilidad de facilidad deportiva
                                                @break

                                                @case(2)
                                                    Radicacion de patente temporera
                                                @break

                                                @default
                                            @endswitch
                                        </li>
                                        <li class="line-clamp-2 text-sm mb-2 text-gray-700">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quae sint deserunt magni quia esse ea exercitationem fugiat! Cumque labore at, molestias qui voluptatibus maiores odit facilis aperiam omnis officiis.
                                        </li>
                                        <li class="text-xs text-gray-600 flex space-x-4">
                                            hace {{ rand(1, 12) }} horas
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        @endfor
                    </div>
                </x-card>
            </div>
            <div class="col-span-full lg:col-span-4">
                @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>

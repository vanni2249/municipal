<x-layouts.merchants>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-row justify-between items-center space-x-4 mb-4">  
                        <h2 class="text-sm md:text-xl lg:text-lg font-bold text-gray-800">
                            Asistencias
                        </h2>
                        <div class="flex space-x-2">
                            <div class="flex">
                                <a href="{{ route('merchants.interactions.calls.create') }}" class="bg-gray-100 hover:bg-gray-300 p-2 rounded-full">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                                </a>
                            </div>
                            <div class="flex">
                                <a href="{{ route('merchants.interactions.messages.create') }}" class="bg-gray-100 hover:bg-gray-300 p-2 rounded-full">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-message"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                                </a>
                            </div>
                        </div>
                    </header>
                     <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 3; $i++) 
                        @php
                            if ($i == 0) {
                                $interaction = 'call';
                            }else {
                                $interaction = 'message';
                            }
                        @endphp
                        <a href="{{ route('merchants.interactions.' .$interaction .'s.show' , [ $interaction => $i]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-2 rounded-xl">
                            <div class="flex w-full justify-between items-start">
                                <div class="grow p-2">
                                    @if (in_array($i, [0]))
                                    <ul class="text-sm">
                                        <li class="text-xs text-gray-600">Solicitud de llamada</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de renovacion de patente</li>
                                        <li class="text-xs text-gray-600">Finanza</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="yellow">
                                                En espera de respuesta
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @elseif($i == 1)
                                    <ul class="text-sm">
                                        <li class="text-xs text-gray-600">Pregunta por mensaje</li>
                                        <li class="text-gray-800 text-md font-bold ">Solicitar uso de facilidad de facilidad deportiva</li>
                                        <li class="text-xs text-gray-600">DRD</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="green">
                                                Completado
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @elseif($i == 2)
                                    <ul class="text-sm">
                                        <li class="text-xs text-gray-600">Pregunta por mensaje</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de patente temporera</li>
                                        <li class="text-xs text-gray-600">Finanza</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="green">
                                                Completado
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @endif
                                </div>
                                <div class="">
                                    <span class="text-xs text-gray-600">hace 12 horas</span>
                                </div>
                            </div>
                        </a>
                        @endfor
                    </div>       
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                 @include('users.merchants.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.merchants>
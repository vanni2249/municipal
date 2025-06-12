<x-layouts.merchants>
   <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-sm md:text-xl lg:text-lg font-bold text-gray-800">
                           Comercio
                        </h2>
                        <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-button variant="light" size="sm" class="flex items-center space-x-2">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                                    </x-button>
                                </x-slot>
                                <x-slot name="content">
                                    @foreach (collect(App\Data\Services\Merchant::items())->where('category', 'settlements') as $item)
                                        <x-dropdown-link href="{{ route($item['route']) }}">
                                            {{ $item['title'] }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <ul class="text-sm text-gray-600 bg-gray-100 p-4 rounded-xl space-y-4">
                        <li>
                            Nombre del comercio: <span class="font-bold">Farmacia Walgreens LLC</span>
                        </li>
                        <li>
                            Tipo de comercio: <span class="font-bold">Farmacia</span>
                        </li>
                        <li>
                            Fecha de creacion: <span class="font-bold">12/01/2023</span>
                        </li>
                        <li>
                            Fecha de actualizacion: <span class="font-bold">12/01/2023</span>
                        </li>
                        <li>
                            Permiso de construccion: <span class="font-bold">Si</span>
                        </li>
                        <li>
                            Permiso de uso: <span class="font-bold">Si</span>
                        </li>
                        <li>
                            Estado: <span class="font-bold">Activo</span>
                        </li>
                        <li>
                            Patente temporera: <span class="font-bold">Si</span>
                        </li>
                        <li>
                            Patente oficial: <span class="font-bold">No</span>
                        </li>
                        <li>
                            Patente renovacion: <span class="font-bold">No</span>
                        </li>
                    </ul>
                    <header class="flex flex-row justify-between items-center space-x-4 mt-6 mb-4">
                        <h3 class="text-sm font-bold">Actividades</h3>
                    </header>
                   <div class="col-span-full space-y-2 py-4">
                        @for ($i = 0; $i < 3; $i++) 
                        <a href="{{ route('merchants.settlements.show' , ['settlement' => $i]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-2 md:p-4 rounded-xl">
                            <div class="flex w-full justify-between items-start">
                                <div class="grow p-2">
                                    @if (in_array($i, [0]))
                                    <ul class="text-sm">
                                        <li class="text-xs text-gray-600">Finanza</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de renovacion de patente</li>
                                        <li class="text-xs text-gray-600">Farmacia Walwreen LLC</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="yellow">
                                                Proseso de evaluacion
                                            </x-badge>
                                            {{-- <x-badge color="green">
                                                Aprovado
                                                
                                            </x-badge> --}}
                                        </li>
                                    </ul>
                                    @elseif($i == 1)
                                    <ul class="text-sm">
                                        <li class="text-xs">Finanza</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de petente oficial</li>
                                        <li class="text-xs text-gray-600">Farmacia Walwreen LLC</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="green">
                                                Aprovado
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @elseif($i == 2)
                                    <ul class="text-sm">
                                        <li class="text-xs">Finanza</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de patente temporera</li>
                                        <li class="text-xs text-gray-600">Farmacia Walwreen LLC</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="green">
                                                Aprovado
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @endif
                                </div>
                                <div class="line-clamp-1">
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
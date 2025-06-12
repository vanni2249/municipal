<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Solicitudes
                        </h2>
                        <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-button size="sm" variant="light" class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 6h16" />
                                            <path d="M7 12h13" />
                                            <path d="M10 18h10" />
                                        </svg>
                                    </x-button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route(request()->segment(1) . '.applications.collect-debris.create') }}">
                                        Solicitud de recogido de escombros
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 2; $i++)
                            <a href="{{ route(request()->segment(1) . '.applications.show', ['application' => 1]) }}"
                                class="bg-gray-100 hover:bg-gray-200 block p-2 md:p-4 rounded-xl">
                                <header class="flex justify-between items-center">
                                    <small class=" text-gray-600">
                                        {{ rand(10000,99999) }}
                                    </small>
                                    @switch($i)
                                        
                                    @case(0)
                                        <x-badge color="yellow">
                                            Evaluacion
                                        </x-badge>
                                        
                                        @break
                                    @case(1)
                                        <x-badge color="green">
                                            Aprovad
                                        </x-badge>
                                        
                                        @break
                                        @default
                                            
                                    @endswitch
                                </header>
                                    <ul class="text-sm pt-2">
                                        <li class="text-gray-800 text-md font-bold ">
                                            @switch($i)
                                                @case(0)
                                                Solicitud de recogido de escombros
                                                    @break    
                                                @case(1)
                                                    Solicitar uso de facilidad de facilidad deportiva
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                        </li>
                                        <li class="text-xs text-gray-600 flex space-x-4">
                                            @switch($i)
                                                @case(1)
                                                    hace {{ rand(1, 12) }} horas &bull; Departamento Recreacion y Deportes
                                                    @break
                                               
                                                @default
                                                hace {{ rand(1, 12) }} horas &bull; Departamento Obras Publicas
                                            @endswitch
                                        </li>
                                    </ul>
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

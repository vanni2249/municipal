<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Radicaciones
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
                                    <x-dropdown-link
                                        href="{{ route(request()->segment(1) . '.settlements.building-permit.create') }}">
                                        Radicacion de permiso de construccion
                                    </x-dropdown-link>
                                    <x-dropdown-link
                                        href="{{ route(request()->segment(1) . '.settlements.use-permit.create') }}">
                                        Radicacion de permiso de uso
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 4; $i++)
                            <a href="{{ route(request()->segment(1) . '.settlements.show', ['settlement' => 1]) }}"
                                class="bg-gray-100 hover:bg-gray-200 block p-2 md:p-4 rounded-xl">
                                <header class="flex justify-between items-center">
                                    <small class=" text-gray-600">
                                        {{ rand(10000, 99999) }}
                                    </small>
                                    @switch($i)
                                        @case(0)
                                            <x-badge color="yellow">
                                                En proceso
                                            </x-badge>
                                        @break

                                        @case(1)
                                            <x-badge color="green">

                                                Aprobado
                                            </x-badge>
                                        @break

                                        @case(2)
                                            <x-badge color="red">
                                                Rechazado
                                            </x-badge>
                                        @break

                                        @case(3)
                                            <x-badge color="blue">
                                                En revision
                                            </x-badge>
                                        @break

                                        @default
                                    @endswitch
                                </header>
                                <ul class="text-sm pt-2">
                                    <li class="text-gray-800 text-md font-bold ">
                                        @switch($i)
                                            @case(0)
                                                Radicacion de permiso de renovacion de patente
                                            @break

                                            @case(1)
                                                Radicacion de permiso de renovacion de patente
                                            @break

                                            @case(2)
                                                Radicacion de permiso de uso
                                            @break

                                            @case(3)
                                                Radicacion de permiso de construccion
                                            @break

                                            @default
                                        @endswitch
                                    </li>
                                    <li class="text-xs text-gray-600">hace {{ rand(2, 18) }} horas &bull; Finanzas
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

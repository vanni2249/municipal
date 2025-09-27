<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Solicitudes
                        </h2>
                        <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-icon-button icon="ellipsis-vertical" />
                                </x-slot>
                                <x-slot name="content">
                                    @foreach ($services as $service)
                                        <x-dropdown-link href="{{ route($service->url) }}">
                                            {{ $service->es_name }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="col-span-full space-y-2">
                        @forelse ($actions as $action)
                            <a href="{{ route('users.applications.show', ['application' => $action]) }}"
                                class="bg-gray-100 hover:bg-gray-200 block p-2 md:p-4 rounded-xl">
                                <header class="flex justify-between items-center">
                                    <small class=" text-gray-600">
                                        {{ rand(10000, 99999) }}
                                    </small>
                                    @switch(1)
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
                                        @switch(1)
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
                                        @switch(1)
                                            @case(1)
                                                hace {{ rand(1, 12) }} horas &bull; Departamento Recreacion y Deportes
                                            @break

                                            @default
                                                hace {{ rand(1, 12) }} horas &bull; Departamento Obras Publicas
                                        @endswitch
                                    </li>
                                </ul>
                            </a>
                            @empty
                            @endforelse
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </div>

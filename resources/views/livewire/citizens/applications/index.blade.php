<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Aplicaciones" />
                <span class="text-sm text-gray-700">Gestiona las aplicaciones enviadas por tu negocio.</span>
            </div>
            <div>
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-icon-button variant="light" icon="ellipsis-vertical" />
                    </x-slot>
                    <x-slot name="content">
                        @forelse ($services as $service)
                            <x-dropdown-link href="{{ route('citizens.services.create', $service->ulid) }}">
                                {{ $service->title }}
                            </x-dropdown-link>
                        @empty
                            <x-dropdown-link href="">
                                No hay servicios disponibles
                            </x-dropdown-link>
                        @endforelse
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-4">
        {{-- <div class="col-span-full lg:col-span-3">
            <div x-data="{ open: false }" class="w-full">
                <header class="flex justify-between items-center bg-white p-4 rounded-t-lg border-b md:border-none">
                    <x-h3 value="Filtros" />
                    <!-- El botón solo es visible en móviles -->
                    <button @click="open = ! open" class="md:hidden">
                        <x-icon icon="chevron-down" :class="open ? 'rotate-180' : ''" class="transition-transform duration-200" />
                    </button>
                </header>

                <ul x-show="open" x-collapse :class="{ 'hidden': !open, 'md:block': open }"
                    class="bg-white p-4 hidden md:block "
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    @foreach ($service_types as $service_type)
                        <li class="hover:bg-gray-100 p-2 rounded-lg text-sm w-full cursor-pointer transition-colors">
                            {{ $service_type->name }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = ! open">Expand</button>

                <div :class="open ? '' : 'hidden'">
                    Content...
                </div>
            </div>
        </div> --}}
        <x-card class="col-span-full">
            <header class="flex justify-between items-center">
                <x-h3 value="Lista" />
            </header>
            <x-card-elements-group>
                @forelse ($applications as $application)
                    <a href="{{ route('citizens.applications.show', $application->ulid) }}" class="block"
                        wire:navigate>
                        <x-card-element class="hover:bg-gray-200 md:hidden"
                            border="{{ $application->status->statusType->variant }}">
                            <div class="flex justify-between items-start space-x-2">
                                <div class="flex-1 flex flex-col space-y-1">
                                    <span class="text-gray-900 font-bold uppercase text-sm">
                                        {{ $application->number }}
                                    </span>
                                    <span class="text-sm font-bold text-gray-700">
                                        {{ $application->service->title }}
                                    </span>
                                    <ul class="text-sm text-gray-700">
                                        <li>{{ $application->service->serviceType->name }}</li>
                                    </ul>
                                </div>
                                <div class="flex flex-col space-y-2">
                                    <div class="flex justify-end">
                                        <x-badge label="{{ $application->status->statusType->name }}"
                                            variant="{{ $application->status->statusType->variant }}" />
                                    </div>
                                    <span class="text-xs text-gray-700 text-right">
                                        <x-date-format :date="$application->created_at" format="d/M/Y" />
                                    </span>
                                </div>
                            </div>
                        </x-card-element>
                        <x-card-element class="hidden md:block hover:bg-gray-200 text-sm" border="{{ $application->status->statusType->variant }}">
                            {{-- <div class="flex justify-between items-start space-x-2"> --}}
                            <ul class="grid grid-flow-col grid-rows-3 md:grid-cols-6 md:grid-rows-none gap-1">
                                <li class="font-bold md:place-self-start">{{ $application->number }}</li>
                                <li class="text-gray-700 md:col-span-2 line-clamp-1 font-bold">{{ $application->service->title }}</li>
                                <li class="text-gray-700 md:place-self-center">{{ $application->service->serviceType->name }}</li>
                                <li class="md:order-last md:place-self-end">
                                    <x-badge label="{{ $application->status->statusType->name }}"
                                        variant="{{ $application->status->statusType->variant }}" />
                                </li>
                                <li class="place-self-end md:place-self-start text-sm">
                                    <x-date-format :date="$application->created_at" format="d/M/Y" />
                                </li>
                            </ul>
                        </x-card-element>
                    </a>

                @empty
                    <x-card-element>
                        <p class="text-gray-600 text-center">No hay aplicaciones recientes.</p>
                    </x-card-element>
                @endforelse

            </x-card-elements-group>
        </x-card>

    </div>
</div>

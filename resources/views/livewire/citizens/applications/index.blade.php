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
        <x-card class="col-span-full">
            <header class="flex justify-between items-center">
                <x-h3 value="Lista" />
            </header>
            <x-card-elements-group>
                @forelse ($applications as $application)
                    <a href="{{ route('citizens.applications.show', $application->ulid) }}" class="block"
                        wire:navigate>
                        <x-card-element class="hover:bg-gray-200"
                            border="{{ $application->status->statusType->variant }}">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2 grid grid-cols-1 lg:grid-cols-4 gap-1 ">
                                    <span class="text-gray-900 font-bold uppercase text-sm tracking-wide">
                                        {{ $application->number }}
                                    </span>
                                    <span class="lg:col-span-2 text-sm font-bold text-gray-700">
                                        {{ $application->service->title }}
                                    </span>
                                    <span class="text-sm text-gray-700">
                                        {{ $application->service->serviceType->name }}
                                    </span>
                                </div>
                                <div class="col-span-1">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 h-auto">
                                        <div class="tracking-wide text-right lg:order-last">
                                            <x-badge label="{{ $application->status->statusType->name }}"
                                                variant="{{ $application->status->statusType->variant }}" />
                                        </div>
                                        <div class="text-sm text-gray-700 text-right lg:text-center">
                                            <x-date-format :date="$application->created_at" format="d/M/Y" />
                                        </div>
                                    </div>
                                </div>
                            </div>
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

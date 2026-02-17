<div class="space-y-2">
    <!-- Businesses info -->
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="{{ $business->name }}" />
                <ul class="text-sm flex flex-col md:flex-row md:space-x-4 space-y-1 md:space-y-0 text-gray-800 mt-1">
                    <li>{{ $business->account->accountType->name }}</li>
                </ul>
            </div>
            <div class="flex flex-col items-end space-y-2">
                <span class="text-sm text-gray-700">
                    {{ $business->number }}
                </span>
                @livewire('users.accounts.components.modal-accounts')
            </div>
        </header>
    </x-card>

    <!-- Services -->
    <div class="grid grid-cols-12 gap-2">
        <x-card class="col-span-full">

            <header class="flex justify-between items-center">
                <h1 class="text-lg font-bold text-gray-900 leading-3">
                    Servicios
                </h1>
                <a href="{{ route('businesses.services') }}" class="text-sm text-blue-500 hover:underline">
                    Ver todos
                </a>
            </header>
        </x-card>


        @foreach ($services as $service)
            <a href="{{ route('businesses.services.create', $service->ulid) }}"
                class="block bg-white hover:shadow col-span-6 md:col-span-4 lg:col-span-3 p-2 rounded-xl space-x-4">
                <x-card-service :service="$service" />
            </a>
        @endforeach
    </div>
    <!-- Applications and Interactions -->
    <div class="grid grid-cols-12 gap-2">
        <!-- Applications -->

        <x-card class="col-span-full lg:col-span-6">
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Últimas aplicaciones" />
                <a href="{{ route('businesses.applications') }}" class="text-sm text-gray-600 font-bold hover:underline"
                    wire:navigate>
                    Ver todas
                </a>
            </x-card-header>
            <x-card-elements-group>
                @forelse ($applications as $application)
                    <a href="{{ route('businesses.applications.show', $application->ulid) }}" class="block"
                        wire:navigate>
                        <x-card-element class="hover:bg-gray-200"
                            border="{{ $application->status->statusType->variant }}">
                            <div class="flex justify-between items-start space-x-2">
                                <div class="flex-1 flex flex-col space-y-1">
                                    <span class="text-gray-700 font-bold uppercase text-xs">
                                        {{ $application->number }}
                                    </span>
                                    <span class="text-md font-bold text-gray-900 lg:line-clamp-2">
                                        {{ $application->service->title }}
                                    </span>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <div class="flex justify-end">
                                        <x-badge label="{{ $application->status->statusType->name }}"
                                            variant="{{ $application->status->statusType->variant }}" />
                                    </div>
                                    <span class="text-sm text-gray-800 text-right">
                                        <x-date-format :date="$application->created_at" format="d/M/Y" />
                                    </span>
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

        <!-- Interactions -->
        <x-card class="col-span-full lg:col-span-6">
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Interacciones" />
                <a href="#" class="text-sm text-gray-600 font-bold hover:underline" wire:navigate>
                    Ver todas
                </a>
            </x-card-header>
            <x-card-elements-group>
                @forelse ($interactions as $interaction)
                    <a href="{{ route('citizens.interactions.show', $interaction->ulid) }}" class="block"
                        wire:navigate>
                        <x-card-element class="hover:bg-gray-200"
                            border="{{ $interaction->status->statusType->variant }}">
                            <div class="flex justify-between items-center space-x-2">
                                <div class="flex-1 flex flex-col space-y-1">
                                    <span class="text-gray-700 font-bold uppercase text-xs">
                                        {{ $interaction->number }}
                                    </span>
                                    <span class="text-md font-bold text-gray-900 lg:line-clamp-2">
                                        {{ $interaction->interactionable->service->title }}
                                    </span>
                                </div>
                                <div class="flex flex-col space-y-1 items-end">
                                    <x-badge label="{{ $interaction->status->statusType->name }}"
                                        variant="{{ $interaction->status->statusType->variant }}" />
                                    <span class="text-sm text-gray-800 text-right">
                                        <x-date-format :date="$interaction->created_at" format="d/M/Y" />
                                    </span>
                                </div>
                            </div>
                        </x-card-element>
                    </a>
                @empty
                    <x-card-element>
                        <p class="text-gray-600 text-center">No hay interacciones recientes.</p>
                    </x-card-element>
                @endforelse
            </x-card-elements-group>
        </x-card>

    </div>

</div>

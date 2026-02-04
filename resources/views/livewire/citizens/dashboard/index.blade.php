<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Bienvenido, {{ $account->user->name }}" />
                <ul class="text-sm flex flex-col md:flex-row md:space-x-4 space-y-1 md:space-y-0 text-gray-800 mt-1">
                    <li>{{ $account->accountType->name }}</li>
                </ul>
            </div>
            <div class="flex flex-col items-end space-y-2">
                @livewire('users.accounts.components.modal-accounts')
                <span class="text-xs text-gray-700">
                    {{ $account->number }}
                </span>
            </div>
        </header>
    </x-card>
    <!-- Services -->
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Servicios" />
            <a href="{{ route('citizens.services') }}" class="text-sm text-gray-600 font-bold hover:underline"
                wire:navigate>
                Ver todos
            </a>
        </x-card-header>
        <div class="grid grid-cols-1">
            <div class="flex flex-row space-x-2 pb-1 overflow-x-auto no-scrollbar">

                @foreach ($services as $service)
                <a href="{{ route('citizens.services.create', $service->ulid) }}" class="flex-shrink-0 w-76 sm:w-80 md:w-84 lg:w-1/4" wire:navigate>
                    <x-card-element class="flex flex-col hover:bg-gray-200 h-full" border="secondary">
                        <div class="grow">
                            <div>
                                <span class="text-gray-700 text-xs font-bold uppercase">
                                    {{ $service->serviceType->name }}
                                </span>
                                <br>
                                <span class="text-md font-bold text-gray-900 line-clamp-2">{{ $service->title }}</span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-2 grow mb-2">
                                {{ $service->description }}
                            </p>
                        </div>
                    </x-card-element>
                </a>
                @endforeach
            </div>
        </div>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        <!-- Applications -->
        <x-card class="col-span-full lg:col-span-7">
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Últimas aplicaciones" />
                <a href="{{ route('citizens.applications') }}" class="text-sm text-gray-600 font-bold hover:underline"
                    wire:navigate>
                    Ver todas
                </a>
            </x-card-header>
            <x-card-elements-group>
                @forelse ($applications as $application)
                    <a href="{{ route('citizens.applications.show', $application->ulid) }}" class="block"
                        wire:navigate>
                        <x-card-element class="hover:bg-gray-200"
                            border="{{ $application->status->statusType->variant }}">
                            <div class="flex justify-between items-start space-x-2">
                                <div class="flex-1 flex flex-col space-y-1">
                                    <span class="text-gray-700 font-bold uppercase text-xs">
                                        {{ $application->number }}
                                    </span>
                                    <span class="text-md font-bold text-gray-900 line-clamp-1">
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
        <x-card class="col-span-full lg:col-span-5">
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Interacciones" />
                <a href="#" class="text-sm text-gray-600 font-bold hover:underline" wire:navigate>
                    Ver todas
                </a>
            </x-card-header>
            <x-card-elements-group>
                @for ($i = 0; $i < rand(2, 5); $i++)
                    <a href="#" class="block" wire:navigate>
                        <x-card-element class="hover:bg-gray-200" border="success">
                            <div class="flex justify-between items-center space-x-2">
                                <div class="flex-1 flex flex-col space-y-1">
                                    <span class="text-gray-700 font-bold uppercase text-xs">
                                        APP-2023-000{{ $i + 1 }}
                                    </span>
                                    <span class="text-md font-bold text-gray-900 line-clamp-1">
                                        Servicio de ejemplo {{ $i + 1 }}
                                    </span>
                                </div>
                                <div class="flex flex-col space-y-1 items-end">
                                    <x-badge label="Abierto" color="success" />
                                    <span class="text-sm text-gray-600 text-right">
                                        2023/01/0{{ $i + 1 }}
                                    </span>
                                </div>
                            </div>
                        </x-card-element>
                    </a>
                @endfor
            </x-card-elements-group>
        </x-card>

    </div>
</div>

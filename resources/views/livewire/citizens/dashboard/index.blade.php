<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Bienvenido, {{ $account->user->name }}" />
                <ul class="text-sm flex flex-col md:flex-row md:space-x-4 space-y-1 md:space-y-0 text-gray-800 mt-1">
                    <li>{{ $account->number }}</li>
                </ul>
            </div>
            <div class="flex">
                <x-link-button href="{{ route('users.accounts.index') }}" icon="cog"
                    class="flex items-center md:space-x-2" variant="primary" size="md" wire:navigate>
                    <x-icon icon="home" class="" width="20" height="20" />
                    <span class="hidden md:block">
                        Mis cuentas
                    </span>
                </x-link-button>
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
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2">
            @foreach ($services as $service)
                <x-card-element class="flex flex-col" border="secondary">
                    <div class="grow">
                        <div>
                            <span class="text-gray-700 text-xs font-bold uppercase">
                                {{ $service->serviceType->name }}
                            </span>
                            <br>
                            <span class="text-md font-bold text-gray-900 line-clamp-2">{{ $service->title }}</span>
                        </div>
                        <p class="text-sm text-gray-600 line-clamp-2 grow mb-4">
                            {{ $service->description }}
                        </p>
                    </div>
                    <div class="flex justify-between items-center mt-auto">
                        <div class="text-sm text-gray-800">
                            {{-- <x-money-format :amount="$service->amount" /> --}}
                        </div>
                        <div class="flex justify-end">
                            <x-link-button href="{{ route('citizens.services.create', $service->ulid) }}"
                                variant="primary" wire:navigate>Aplicar</x-link-button>
                        </div>
                    </div>
                </x-card-element>
            @endforeach
        </div>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        <!-- Applications -->
        <x-card class="col-span-full lg:col-span-7 min-h-96">
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Últimas aplicaciones" />
                <a href="{{ route('citizens.applications') }}" class="text-sm text-gray-600 font-bold hover:underline"
                    wire:navigate>
                    Ver todas
                </a>
            </x-card-header>
            <x-card-elements-group>
                @forelse ($applications as $application)
                    <a href="{{ route('citizens.applications.show', $application->ulid) }}" class="block" wire:navigate>
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
        <x-card class="col-span-full lg:col-span-5 min-h-96">
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

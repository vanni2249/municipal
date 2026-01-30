<div class="space-y-4">
    <x-card>
        <div class="md:flex md:justify-between space-y-4 md:space-y-0 md:items-start">
            <div>
                <x-h2 value="Bienvenido, {{ $account->user->name }}" />
                <span class="text-sm text-gray-800">{{ $account->accountType->name }} | {{ $account->number }}</span>
            </div>
            <div>
                <x-link-button href="{{ route('users.accounts.index') }}" icon="cog" variant="light" size="sm"
                    label="Cambiar cuenta" />
            </div>
        </div>
    </x-card>
    <!-- Services -->
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Servicios" />
            <a href="{{ route('citizens.services') }}" class="text-sm text-gray-600 font-bold hover:underline">
                Ver todos
            </a>
        </x-card-header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
            @foreach ($services as $service)
                <x-card-element class="flex flex-col">
                    <div class="grow">
                        <div>
                            <small class="text-gray-700">
                                {{ $service->serviceType->name }}
                            </small>
                            <br>
                            <strong class="text-md">{{ $service->title }}</strong>
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
                            <x-link-button href="{{ route('citizens.services.show', $service->ulid) }}"
                                variant="light" wire:navigate>Aplicar</x-link-button>
                        </div>
                    </div>
                </x-card-element>
            @endforeach
        </div>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        <!-- Applications -->
        <x-card class="col-span-full lg:col-span-7 min-h-96">
            <x-card-header>
                <x-h2 value="Últimas aplicaciones" />
            </x-card-header>
            <x-card-elements-group>
                @for ($i = 0; $i < 5; $i++)
                    <x-card-element class="border-l-4 border-green-400">
                        <div class="flex justify-between items-center space-x-2">
                            <div class="flex flex-col">
                                <strong class="text-md">Servicio de ejemplo {{ $i + 1 }}</strong>
                                <span class="text-gray-600 text-sm">Tipo de servicio</span>
                            </div>
                            <div class="flex flex-col">
                                <x-badge label="Abierto" color="success" />
                                <span class="text-sm text-gray-600">

                                    2023-01-0{{ $i + 1 }}
                                </span>
                            </div>
                        </div>
                    </x-card-element>
                @endfor
            </x-card-elements-group>
        </x-card>
        <!-- Interactions -->
        <x-card class="col-span-full lg:col-span-5 min-h-96">
            <x-card-header>
                <x-h2 value="Interacciones" />
            </x-card-header>
            <x-card-elements-group>
                @for ($i = 0; $i < 5; $i++)
                    <x-card-element class="border-l-4 border-green-400">
                        <div class="flex justify-between items-center space-x-2">
                            <div class="flex flex-col">
                                <strong class="text-md">Servicio de ejemplo {{ $i + 1 }}</strong>
                                <span class="text-gray-600 text-sm">Tipo de servicio</span>
                            </div>
                            <div class="flex flex-col">
                                <x-badge label="Abierto" color="success" />
                                <span class="text-sm text-gray-600">

                                    2023-01-0{{ $i + 1 }}
                                </span>
                            </div>
                        </div>
                    </x-card-element>
                @endfor
            </x-card-elements-group>
        </x-card>

    </div>
</div>

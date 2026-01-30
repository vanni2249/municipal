<div class="space-y-4">
    <!-- Businesses info -->
    <x-card>
        <div class="flex justify-between space-x-4 md:items-start">
            <div class="flex-1">
                <x-h2 value="{{ $business->name }}" />
                <ul class="text-sm flex flex-col md:flex-row md:space-x-4 space-y-1 md:space-y-0 text-gray-800 mt-2">
                    <li>{{ $business->businessType->name }}</li>    
                    <li>{{ $business->number }}</li>    
                </ul>    
            </div>
            <div class="">
                <x-link-button href="{{ route('users.accounts.index') }}" icon="cog" variant="primary" size="md"
                    label="Mis cuentas" />
            </div>
        </div>
    </x-card>

    <!-- Services -->
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Servicios" />
            <a href="{{ route('businesses.services') }}" class="text-sm text-gray-600 font-bold hover:underline">
                Ver todos
            </a>
        </x-card-header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
            @foreach ($services as $service)
                <x-card-element class="flex flex-col border-l-4 border-gray-400">
                    <div class="grow">
                        <div>
                            <span class="text-gray-700 text-xs font-bold uppercase">
                                {{ $service->serviceType->name }}
                            </span>
                            <br>
                            <span class="text-md font-bold text-gray-900">{{ $service->title }}</span>
                        </div>
                        <p class="text-sm text-gray-600 line-clamp-3 grow mb-4">
                            {{ $service->description }}
                        </p>
                    </div>
                    <div class="flex justify-between items-center mt-auto">
                        <div class="text-sm text-gray-800">
                            {{-- <x-money-format :amount="$service->amount" /> --}}
                        </div>
                        <div class="flex justify-end">
                            <x-link-button href="{{ route('businesses.services.create', $service->ulid) }}"
                                variant="secondary" wire:navigate>Aplicar</x-link-button>
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
                <a href="{{ route('businesses.applications') }}"
                    class="text-sm text-gray-600 font-bold hover:underline">
                    Ver todas
            </x-card-header>
            <x-card-elements-group>
                @foreach ($applications as $application)
                    <a href="{{ route('businesses.applications.show', $application->ulid) }}" class="block">
                        <x-card-element class="border-l-4 border-green-400 hover:bg-gray-50">
                            <div class="flex justify-between items-start space-x-2">
                                <div class="flex-1 flex flex-col space-y-1">
                                    <span
                                        class="text-gray-700 font-bold uppercase text-xs">{{ $application->service->serviceType->name }}</span>
                                    <span class="text-md font-bold text-gray-900">{{ $application->service->title }}</span>
                                </div>
                                <div class="flex flex-col space-y-2">
                                    <div class="flex justify-end">
                                        <x-badge label="{{ $application->status->statusType->name }}"
                                            variant="{{ $application->status->statusType->variant }}" />
                                    </div>
                                    <span class="hidden md:block text-sm text-gray-600">
                                        <x-date-format :date="$application->created_at" format="d M Y H:m a"/>
                                    </span>
                                    <span class="md:hidden text-sm text-gray-600 text-right">
                                        <x-date-format :date="$application->created_at" format="d/M/Y"/>
                                    </span>
                                </div>
                            </div>
                        </x-card-element>
                    </a>
                @endforeach
            </x-card-elements-group>
        </x-card>
        <!-- Interactions -->
        <x-card class="col-span-full lg:col-span-5 min-h-96">
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Interacciones" />
                <a href="#" class="text-sm text-gray-600 font-bold hover:underline">
                    Ver todas
                </a>
            </x-card-header>
            <x-card-elements-group>
                @for ($i = 0; $i < rand(2, 5); $i++)
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

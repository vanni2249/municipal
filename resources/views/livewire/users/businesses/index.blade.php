<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Comercios" />
                <p>
                    Gestiona y navega entre los comercios asociados a tu cuenta.
                </p>
            </div>
            <div class="flex">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-icon-button icon="ellipsis-vertical" variant="light" />
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('users.businesses.create') }}">
                            Crear nuevo comercio
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
    </x-card>
    <x-card>
        <div class="grid grid-cols-12 gap-4 rounded">
            @forelse ($businesses as $business)
                <x-card-element class="col-span-full lg:col-span-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <x-h3 class="mb-1">{{ $business->name }}</x-h3>
                            <p class="text-sm text-gray-600">{{ $business->number }}</p>
                        </div>
                        <div class="flex space-x-2">
                            <x-dropdown align="right">
                                <x-slot name="trigger">
                                    <x-icon-button icon="ellipsis-vertical" variant="light" />
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route('businesses.set-session', $business->ulid) }}">
                                        Ir al comercio
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </x-card-element>

            @empty
                <x-card-element>
                    <p class="text-center text-gray-500">No hay comercios registrados.</p>
                </x-card-element>
            @endforelse
        </div>
    </x-card>
</div>

<div class="space-y-4">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <!-- User Information -->
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h1 :value="$user->name . ' ' . $user->lastname" />
                        <x-badge :variant="$user->status->statusType->variant" :label="$user->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $user->number }}
                        </li>
                        <li class="">|</li>
                        <li class="line-clamp-1">
                            Ultima conexión:
                            {{ $user->session ? \Carbon\Carbon::parse($user->session->created_at)->diffForHumans() : '...' }}
                        </li>
                    </ul>
                </x-card-header>
            </x-card>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Información básica" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Editar</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-card-list>
                    <x-card-list-element title="Ulid">
                        {{ $user->ulid ?? 'N/A' }}
                    </x-card-list-element>
                    <x-card-list-element title="Numero">
                        {{ $user->number ?? 'N/A' }}
                    </x-card-list-element>
                    <x-card-list-element title="Nombre completo">
                        {{ $user->name }} {{ $user->lastname }}
                    </x-card-list-element>
                    <x-card-list-element title="Correo electrónico">
                        {{ $user->email ?? 'N/A' }}
                    </x-card-list-element>
                    <x-card-list-element title="Telefono">
                        {{ $user->phone ?? 'N/A' }}
                    </x-card-list-element>
                    <x-card-list-element title="Fecha de creacion">
                        {{ $user->created_at ?? 'N/A' }}
                    </x-card-list-element>
                </x-card-list>
            </x-card>
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Cuentas" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Agregar cuenta</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-card-elements-group>
                    @for ($i = 0; $i < rand(2, 4); $i++)
                        <x-card-element></x-card-element>
                    @endfor
                </x-card-elements-group>
            </x-card>
            <!-- Statues -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Estados" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Editar</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-card-elements-group>
                    @foreach ($user->statuses as $status)
                        <x-card-element class="flex justify-between items-center">
                            <div>
                                <strong class="text-sm">{{ $status->statusType->name }}</strong>
                                <br>
                                <span class="text-gray-700">{{ $status->created_at }}</span>
                            </div>
                            <x-badge :variant="$status->statusType->variant" :label="$status->statusType->name" />
                        </x-card-element>
                    @endforeach
                </x-card-elements-group>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-7">
            <!-- Session -->
            <x-card class="h-full">
                <x-card-header>
                    <x-h2 value="Sesiones" />
                </x-card-header>
                <x-card-elements-group>
                    <x-card-element class="flex justify-between items-center">
                        <div>
                            <strong class="text-sm">Sesión reciente</strong>
                            <br>
                            <span class="text-gray-700">2024-01-01 12:00:00</span>
                        </div>
                        <x-badge variant="success" label="Activa" />
                    </x-card-element>
                    <x-card-element class="flex justify-between items-center">
                        <div>
                            <strong class="text-sm">Sesión anterior</strong>
                            <br>
                            <span class="text-gray-700">2023-12-31 11:00:00</span>
                        </div>
                        <x-badge variant="warning" label="Inactiva" />
                    </x-card-element>
                </x-card-elements-group>
            </x-card>
        </div>
    </div>
</div>

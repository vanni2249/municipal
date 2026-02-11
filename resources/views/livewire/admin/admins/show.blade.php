<div class="space-y-4">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <!-- Admin Information -->
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h1 :value="$administrator->name . ' ' . $administrator->lastname" />
                        <x-badge :variant="$administrator->status->statusType->variant" :label="$administrator->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $administrator->number }}
                        </li>
                        <li class="">|</li>
                        <li class="line-clamp-1">
                            Ultima conexión:
                            {{ $administrator->session ? \Carbon\Carbon::parse($administrator->session->created_at)->diffForHumans() : '...' }}
                        </li>
                    </ul>
                </x-card-header>
                
            </x-card>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- User detail -->
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
                <x-app-elements>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Número" />
                        <x-app-element-value value="{{ $administrator->number ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Nombre completo" />
                        <x-app-element-value value="{{ $administrator->name }} {{ $administrator->lastname }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Correo electrónico" />
                        <x-app-element-value value="{{ $administrator->email ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Teléfono" />
                        <x-app-element-value value="{{ $administrator->phone ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value value="{{ $administrator->created_at ?? 'N/A' }}" />
                    </x-app-element>
                </x-app-elements>
            </x-card>

            <!-- Accounts -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Roles" />
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
                    @for ($i = 0; $i < 3; $i++)
                        <x-card-element class="flex justify-between items-center">
                            <div>
                                <strong class="text-sm">Role</strong>
                                <br>
                                <span class="text-gray-700">{{ now() }}</span>
                            </div>
                            <x-icon-button icon="ellipsis-vertical" variant="light" size="xs" />
                        </x-card-element>
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
                    @foreach ($administrator->statuses as $status)
                        @for ($i = 0; $i < 3; $i++)
                            <x-card-element class="flex justify-between items-center">
                                <div>
                                    <strong class="text-sm">{{ $status->statusType->name }}</strong>
                                    <br>
                                    <span class="text-gray-700">{{ $status->created_at }}</span>
                                </div>
                                <x-badge :variant="$status->statusType->variant" :label="$status->statusType->name" />
                            </x-card-element>
                        @endfor
                    @endforeach
                </x-card-elements-group>
            </x-card>

        </div>
        <div class="col-span-full lg:col-span-7 space-y-4">
            <!-- Sessions -->
            <x-card class="">
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Sesiones de Administrador" />
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
                    @for ($i = 0; $i < 5; $i++)
                        <x-card-element class="flex justify-between items-center">
                            <div>
                                <strong class="text-sm">Sesión reciente</strong>
                                <br>
                                <span class="text-gray-700">2024-01-01 12:00:00</span>
                            </div>
                            <x-badge variant="success" label="Activa" />
                        </x-card-element>
                    @endfor
                </x-card-elements-group>
            </x-card>

            <!-- Logs -->
            <x-card>
                <x-card-header class="flex justify-between items-end">
                    <x-h2 value="Registros de Administrador" />
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
                    @for ($i = 0; $i < 5; $i++)
                        <x-card-element class="flex justify-between items-center">
                            <div>
                                <strong class="text-sm">Registro reciente</strong>
                                <br>
                                <span class="text-gray-700">2024-01-01 12:00:00</span>
                            </div>
                            <x-badge variant="success" label="Activo" />
                        </x-card-element>
                    @endfor
                </x-card-elements-group>
            </x-card>
        </div>
    </div>
</div>

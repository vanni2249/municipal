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
                    </ul>
                </x-card-header>
            </x-card>
            {{-- @livewire('admin.users.components.user-header', ['user' => $user], key($user->id)) --}}
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- User detail -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Información básica" />
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
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Número de usuario" />
                        <x-app-element-value value="{{ $user->number ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Nombre completo" />
                        <x-app-element-value value="{{ $user->name }} {{ $user->lastname }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Correo electrónico" />
                        <x-app-element-value value="{{ $user->email ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Teléfono" />
                        <x-app-element-value value="{{ $user->phone ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value value="{{ $user->created_at ?? 'N/A' }}" />
                    </x-app-element>
                </x-app-elements>
            </x-card>
            <!-- Accounts -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Cuentas" />
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
                                <strong class="text-sm">Accounts</strong>
                                <br>
                                <span class="text-gray-700">{{ now() }}</span>
                            </div>
                            <x-icon-button icon="ellipsis-vertical" variant="light" size="xs" />
                        </x-card-element>
                    @endfor
                </x-card-elements-group>
            </x-card>
            {{-- @livewire('admin.users.components.user-accounts', ['user' => $user], key($user->id)) --}}

            <!-- Statues -->
            {{-- @livewire('admin.users.components.user-statuses', ['user' => $user], key($user->id)) --}}
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
            <x-card class="">
                <x-card-header>
                    <x-h2 value="Sesiones" />
                </x-card-header>
                <x-card-elements-group>
                    @for ($i = 0; $i < 10; $i++)
                        <x-card-element class="flex justify-between items-center">
                            <div>
                                <strong class="text-sm">Sesión reciente</strong>
                                <br>
                                <span class="text-gray-700">2024-01-01 12:00:00</span>
                            </div>
                            <x-badge variant="success" label="Activa" />
                        </x-card-element>
                    @endfor
                    {{-- <x-card-element class="flex justify-between items-center">
                <div>
                    <strong class="text-sm">Sesión anterior</strong>
                    <br>
                    <span class="text-gray-700">2023-12-31 11:00:00</span>
                </div>
                <x-badge variant="warning" label="Inactiva" />
            </x-card-element> --}}
                </x-card-elements-group>
            </x-card>
            {{-- @livewire('admin.users.components.user-sessions', ['user' => $user], key($user->id)) --}}

        </div>
    </div>
</div>

<div class="space-y-2">
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <!-- Admin Information -->
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h1 :value="$admin->employee->name . ' ' . $admin->employee->last_name" />
                        <x-badge :variant="$admin->status->statusType->variant" :label="$admin->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $admin->number }}
                        </li>
                        <li class="">|</li>
                        <li class="line-clamp-1">
                            Ultima conexión:
                            {{ $admin->session ? \Carbon\Carbon::parse($admin->session->created_at)->diffForHumans() : '...' }}
                        </li>
                    </ul>
                </x-card-header>

            </x-card>

        </div>
    </div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Admin Detail -->
            <livewire:admin.components.admin-detail :admin="$admin" />


            <!-- Employee detail -->
            <livewire:admin.components.employee-detail :employee="$admin->employee" />

            <!-- Admin Positions -->
            <livewire:admin.components.admin-positions :admin="$admin" />

            <!-- Admin Statuses -->
            <livewire:admin.components.admin-statuses :admin="$admin" />

        </div>
        <div class="col-span-full lg:col-span-7 space-y-2">
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

<div class="">
    <x-card class="h-full">
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
            {{-- <x-card-element class="flex justify-between items-center">
                <div>
                    <strong class="text-sm">Registro anterior</strong>
                    <br>
                    <span class="text-gray-700">2023-12-31 11:00:00</span>
                </div>
                <x-badge variant="warning" label="Inactivo" />
            </x-card-element> --}}
            @endfor
        </x-card-elements-group>
    </x-card>
</div>

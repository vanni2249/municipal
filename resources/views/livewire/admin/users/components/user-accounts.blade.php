<div>
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
</div>

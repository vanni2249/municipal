<div>
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
                    <x-icon-button icon="ellipsis-vertical" variant="light" size="xs"/>
                </x-card-element>
            @endfor
        </x-card-elements-group>
    </x-card>
</div>
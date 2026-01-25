<div>
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
                {{ $administrator->ulid ?? 'N/A' }}
            </x-card-list-element>
            <x-card-list-element title="Numero">
                {{ $administrator->number ?? 'N/A' }}
            </x-card-list-element>
            <x-card-list-element title="Nombre completo">
                {{ $administrator->name }} {{ $administrator->lastname }}
            </x-card-list-element>
            <x-card-list-element title="Correo electrónico">
                {{ $administrator->email ?? 'N/A' }}
            </x-card-list-element>
            <x-card-list-element title="Telefono">
                {{ $administrator->phone ?? 'N/A' }}
            </x-card-list-element>
            <x-card-list-element title="Fecha de creacion">
                {{ $administrator->created_at ?? 'N/A' }}
            </x-card-list-element>
        </x-card-list>
    </x-card>
</div>
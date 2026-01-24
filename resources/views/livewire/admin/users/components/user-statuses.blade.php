<div>
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

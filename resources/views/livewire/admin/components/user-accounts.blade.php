<div>
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Cuentas del usuario" />
            <x-dropdown>
                <x-slot name="trigger">
                    <x-icon-button icon="ellipsis-vertical" variant="light" />
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="#">Agregar cuenta</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </x-card-header>
        <x-card-body-lists>
            @foreach ($user->accounts as $account)
                <x-card-body-list class="flex justify-between items-start">
                    <ul>
                        <li class="text-xs font-bold text-gray-600">
                            {{ $account->number }}
                        </li>
                        <li class=" text-gray-900">
                            {{ $account->accountType->name }}
                        </li>
                        <li class="text-xs text-gray-700">
                            Fecha de creación: {{ $account->created_at->format('d/M/Y') }}
                        </li>
                    </ul>
                    <x-badge variant="{{ $account->status->statusType->variant }}"
                        label="{{ $account->status->statusType->name }}" />
                </x-card-body-list>
            @endforeach
        </x-card-body-lists>
    </x-card>
</div>

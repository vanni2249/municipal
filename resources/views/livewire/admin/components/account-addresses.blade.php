<div>
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Direcciones" />
            <div>
                <x-button variant="light" label="Crear direccion" wire:click="create" size="sm" />
            </div>
        </x-card-header>
        <x-card-body-lists>
            @forelse ($addresses as $address)
                <x-card-body-list class="flex justify-between items-center">
                    <ul>
                        <li class="text-sm text-gray-600">
                            {{ $address->name }}
                        </li>
                        <li class="text-gray-900">
                            {{ $address->address }}
                        </li>
                        <li class="text-xs text-gray-700">
                            {{ $address->postal_code }} | {{ $address->place->name }}
                        </li>
                    </ul>
                    <ul class="text-sm text-gray-700">
                        <li>
                            <x-button variant="light" label="Editar" size="xs"
                                wire:click="edit({{ $address->id }})" />
                        </li>
                    </ul>
                </x-card-body-list>
            @empty
                <x-card-body-list class="flex justify-between items-center">
                    <p class="text-sm text-gray-600">
                        No hay direcciones asociadas a esta cuenta.
                    </p>
                </x-card-body-list>
            @endforelse
        </x-card-body-lists>
    </x-card>

    <!-- Create Address Modal -->
    <x-modal name="address-modal" title="Crear direccion">
        @include('forms.address-form')
    </x-modal>
</div>

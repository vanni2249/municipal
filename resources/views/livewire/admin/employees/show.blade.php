<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold text-gray-800">Detalles del empleado</h1>
            <div class="flex items-center space-x-2">
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-icon-button icon="ellipsis-vertical"></x-icon-button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-button @click="$dispatch('open-modal', 'edit-employee-modal')">
                            Editar
                        </x-dropdown-button>
                        <x-dropdown-button @click="$dispatch('open-modal', 'block-employee-modal')">
                            Blockear
                        </x-dropdown-button>
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
        <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4 py-4">
            @foreach ($items as $item)
            <li class="col-span-4 md:col-span-2 lg:col-span-1">
                <small class="font-bold text-gray-800">{{ $item['label'] }}</small>
                <br>
                <span>
                    {!! $item['value'] !!}
                </span>
            </li>

            @endforeach
        </ul>
    </x-card>

    <!-- Edit Employee Modal -->
    <x-modal name="edit-employee-modal" title="Editar Empleado" size="lg">
            <form wire:submit.prevent="updateEmployee" class="space-y-4">
                <div>
                    <x-label for="name" value="Nombre" />
                    <x-input id="name" wire:model.defer="name" @class(['w-full', 'border-red-600' => true])/>
                </div>
                <div>
                    <x-label for="email" value="Email" />
                    <x-input id="email" type="email" wire:model.defer="email" @class(['w-full', 'border-red-600' => true])/>
                </div>
                <div>
                    <x-label for="phone" value="Telefono" />
                    <x-input id="phone" wire:model.defer="phone" @class(['w-full', 'border-red-600' => true])/>
                </div>
                <x-button type="submit">Actualizar</x-button>
            </form>
    </x-modal>

    <!-- Block Employee Modal -->
    <x-modal name="block-employee-modal" title="Blockear Empleado">
        <x-slot name="title">Blockear Empleado</x-slot>
        <x-slot name="content">
            <form>
                <!-- Form fields for blocking employee -->
            </form>
        </x-slot>
    </x-modal>
</div>
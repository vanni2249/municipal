<div>
    <x-card class="rounded-xl">
        <!-- User Information -->
        <header class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <h3 class="font-bold text-lg text-gray-800">Usuario</h3>
                <div>
                    @if ($user->approved_at)
                    <x-badge color="green" class="capitalize">Aprobado</x-badge>
                    @else
                    <x-badge color="red" class="capitalize">Inactivo</x-badge>
                    @endif
                </div>

            </div>
            <!-- Dropdown -->
            <x-dropdown>
                <x-slot name="trigger">
                    <x-icon-button icon="ellipsis-vertical"></x-icon-button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-button @click="$dispatch('open-modal', 'approve-user-modal')">
                        {{ $user->approved_at ? 'Desaprobar' : 'Aprobar' }}
                    </x-dropdown-button>
                    <x-dropdown-button @click="$dispatch('open-modal', 'block-user-modal')">
                       {{ $user->blocked_at ? 'Desbloquear' : 'Bloquear' }}
                    </x-dropdown-button>
                </x-slot>
            </x-dropdown>
            <!-- Approve modal -->
            <x-modal name="approve-user-modal" title="Aprobar Usuario">
                @if ($user->approved_at)
                    <p>¿Estás seguro de que deseas desaprobar a este usuario?</p>
                    <div class="flex justify-start space-x-2 mt-4">
                        <x-button wire:click="disapproveUser">Desaprobar</x-button>
                        <x-button @click="$dispatch('close-modal', 'approve-user-modal')">Cancelar</x-button>
                    </div>
                @else
                    <p>¿Estás seguro de que deseas aprobar a este usuario?</p>
                    <div class="flex justify-start space-x-2 mt-4">
                        <x-button wire:click="approveUser">Aprobar</x-button>
                        <x-button @click="$dispatch('close-modal', 'approve-user-modal')">Cancelar</x-button>
                    </div>
                @endif
            </x-modal>
            <!-- Block modal -->
            <x-modal name="block-user-modal" title="Eliminar Usuario">
                @if ($user->blocked_at)
                    <p>¿Estás seguro de que deseas desbloquear a este usuario?</p>
                    <form wire:submit.prevent="unblockUser">
                        <div class="flex justify-start space-x-2 mt-4">
                            <x-button type="submit">Desbloquear</x-button>
                            <x-button @click="$dispatch('close-modal', 'block-user-modal')">Cancelar</x-button>
                        </div>
                    </form>
                @else
                    <form wire:submit.prevent="blockUser">
                        <p>¿Estás seguro de que deseas bloquear a este usuario?</p>
                        <div class="mt-4">
                            <label for="blocked_reason" class="block text-sm font-medium text-gray-700">Motivo de bloqueo</label>
                            <x-textarea wire:model="blocked_reason" class="w-full"/>
                            @error('blocked_reason')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex justify-start space-x-2 mt-4">
                            <x-button type="submit">Bloquear</x-button>
                            <x-button @click="$dispatch('close-modal', 'block-user-modal')">Cancelar</x-button>
                        </div>
                    </form>
                @endif
            </x-modal>
        </header>
        @php
        $items = [
            ['label' => 'ID de User', 'value' => $user->code??'N/A'],
            ['label' => 'Nombre', 'value' => $user->name],
            ['label' => 'Email', 'value' => $user->email],
            ['label' => 'Telefono', 'value' => $user->phone],
            ['label' => 'Aprovado', 'value' => $user->approved_at ? 'Si' : 'No'],
            ['label' => 'Fecha de Aprobacion', 'value' => $user->approved_at ?
                \Carbon\Carbon::parse($user->approved_at)->format('d/m/Y') : 'N/A'],
            ['label' => 'Categoria', 'value' => $user->category->es_name ?? 'N/A'],
            ['label' => 'Fecha de registro', 'value' => $user->created_at->format('d/m/Y')],
            ['label' => 'Ultima conexion', 'value' => $user->getLastLogin()],
            ['label' => 'Bloqueado', 'value' => $user->blocked_at ? 'Si' : 'No'],
            ['label' => 'Fecha de bloqueo', 'value' => $user->blocked_at ? \Carbon\Carbon::parse($user->blocked_at)->format('d/m/Y') : 'N/A'],
        ];
        @endphp
        <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4 py-4">
            @foreach ($items as $item)
            <li class="col-span-4 md:col-span-2 lg:col-span-1">
                <small class="font-bold">{{ $item['label'] }}</small>
                <br>
                <span class="text-sm">
                    {!! $item['value'] !!}
                </span>
            </li>

            @endforeach
            @if ($user->blocked_at)
                <li class="col-span-4 md:col-span-2 lg:col-span-4">
                    <small class="font-bold">Motivo de bloqueo</small>
                    <br>
                    <span class="capitalize text-sm">
                        {!! $user->blocked_reason !!}
                    </span>
                </li>
            @endif
        </ul>
    </x-card>
</div>
<div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
            <x-card class="rounded-xl">
                <!-- User Information -->
                <header class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <h3 class="font-bold text-lg text-gray-800">Usuario</h3>
                        <div>
                            @if ($user->approved_at)
                                <x-badge color="green" class="capitalize">Aprobado</x-badge>
                            @else
                                <x-badge color="red" class="capitalize">No aprobado</x-badge>
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
                                    <label for="blocked_reason" class="block text-sm font-medium text-gray-700">Motivo
                                        de
                                        bloqueo</label>
                                    <x-textarea wire:model="blocked_reason" class="w-full" />
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
                <!-- Info -->
                <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4 py-4">
                    @foreach ($items as $item)
                        <li class="col-span-4 md:col-span-2 lg:col-span-1">
                            <small class="font-bold text-gray-800">{{ $item['label'] }}</small>
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
    </div>
</div>

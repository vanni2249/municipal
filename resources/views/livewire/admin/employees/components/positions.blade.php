    <div>

        @if ($employee->admin)
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Posiciones" />
                    <div>
                        {{-- <x-button variant="light" size="sm" @click="$dispatch('open-modal', 'update-admin-modal')">Cambiar
                        estado</x-button> --}}
                    </div>
                </x-card-header>
                <x-card-body-lists>

                    @forelse ($admin->positions->sortDesc() ?? [] as $position)
                        <x-card-body-list class="flex justify-between items-center">
                            <div class="text-sm text-gray-800">
                                <span>
                                    {{ $position->position->department->name }}
                                </span>
                                <br>
                                <span class="text-gray-600">
                                    {{ $position->position->name }}
                                </span>
                            </div>
                            <div>
                                @if ($position->is_active)
                                    <x-badge variant="success" label="Activo" />
                                @else
                                    <x-badge variant="danger" label="Inactivo" />
                                @endif
                            </div>
                        </x-card-body-list>
                    @empty
                        <div class="p-4 text-center text-gray-500">
                            No hay estados asociados a esta cuenta administrativa.
                        </div>
                    @endforelse
                </x-card-body-lists>
            </x-card>
        @endif

        <!-- Create Admin Status Modal -->
        <x-modal name="update-admin-modal" title="Cambiar estado de la cuenta administrativa">
        </x-modal>
    </div>

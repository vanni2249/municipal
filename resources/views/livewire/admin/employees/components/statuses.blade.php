<div>

    @if ($employee->admin)
        <x-card>
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Estados de la cuenta" />
                <div>
                    <x-button variant="light" size="sm" @click="$dispatch('open-modal', 'update-admin-modal')">Cambiar
                        estado</x-button>
                </div>
            </x-card-header>
            <x-card-body-lists>

                @forelse ($admin->statuses->sortDesc() ?? [] as $status)
                    <x-card-body-list class="flex justify-between items-center">
                        <div class="text-sm text-gray-800">
                            <x-date-format date="{{ $status->created_at }}" format="d/M/Y H:i" />
                        </div>
                        <x-badge :variant="$status->statusType->variant" :label="$status->statusType->name" />
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
        @include('forms.admin-status-form')
    </x-modal>
</div>

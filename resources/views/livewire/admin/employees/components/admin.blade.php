<div>
    <x-card>
        @if ($form->employee->admin)
            <x-card-header class="flex justify-between items-center">
                <x-h2 value="Información administrador" />
            </x-card-header>

            <x-card-body-grids>
                <x-card-body-grid label="Number" value="{{ $form->employee->admin->number }}" class="col-span-6" />
                <x-card-body-grid label="Username" value="{{ $form->employee->admin->username }}" class="col-span-6" />
            </x-card-body-grids>
        @else
            <div class="text-center text-gray-700 space-y-2">
                <p>
                    Este empleado no tiene una cuenta administrativa asociada. Haga clic en el botón a
                    continuación para crear una cuenta y asignarla a este empleado.
                </p>
                <x-button variant="light" size="sm" @click="$dispatch('open-modal', 'create-admin-modal')">
                    Acceso a cuenta administrativa
                </x-button>
            </div>
        @endif
    </x-card>

    <!-- Create Admin Modal -->
    <x-modal name="create-admin-modal" title="Crear cuenta administrativa">
        @include('forms.employee-admin-form')
    </x-modal>
</div>

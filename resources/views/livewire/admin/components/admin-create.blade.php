<div>
    <x-card>
        <x-card-header>
            <x-h2 value="Crear cuenta administrativa para {{ $form->employee->name }} {{ $form->employee->last_name }}" />
        </x-card-header>
        <div class=" text-gray-700 space-y-2">
            <p>
                Este empleado no tiene una cuenta administrativa asociada. Haga clic en el botón a
                continuación para crear una cuenta y asignarla a este empleado.
            </p>
            <x-button variant="light" @click="$dispatch('open-modal', 'create-admin-modal')">
                Crear cuenta administrativa
            </x-button>
        </div>
    </x-card>
    <!-- Create Admin Modal -->
    <x-modal name="create-admin-modal" title="Crear cuenta administrativa">
        @include('forms.admin-form')
    </x-modal>
</div>

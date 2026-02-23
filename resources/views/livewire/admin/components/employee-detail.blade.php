<div>
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Información del empleado" />
            <x-button variant="light" size="sm"
                @click="$dispatch('open-modal', 'update-employee-modal')">Editar</x-button>
        </x-card-header>
        <x-card-body-grids>
            <x-card-body-grid label="Número" value="{{ $employee->number ?? 'N/A' }}" class="col-span-full" />
            <x-card-body-grid label="Nombre" value="{{ $employee->name }}" class="col-span-full md:col-span-6" />
            <x-card-body-grid label="Apellido" value="{{ $employee->last_name }}" class="col-span-full md:col-span-6" />
            <x-card-body-grid label="Fecha de nacimiento" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $employee->birth_date }}" format="d/M/Y" />
            </x-card-body-grid>
            <x-card-body-grid label="Género" class="col-span-full md:col-span-6">
                @if ($employee->gender === 'male')
                    Masculino
                @elseif ($employee->gender === 'female')
                    Femenino
                @elseif ($employee->gender === 'other')
                    Otro
                @else
                    N/A
                @endif
            </x-card-body-grid>
            <x-card-body-grid label="Correo electrónico" value="{{ $employee->email ?? 'N/A' }}"
                class="col-span-full" />
            <x-card-body-grid label="Teléfono" value="{{ $employee->phone ?? 'N/A' }}"
                class="col-span-full md:col-span-6" />
            <x-card-body-grid label="Fecha de contratación" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $employee->hired_at }}" format="d/M/Y" />
            </x-card-body-grid>
            <x-card-body-grid label="Fecha de creación" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $employee->created_at }}" format="d/M/Y" />
            </x-card-body-grid>
        </x-card-body-grids>
    </x-card>
    <!-- Update Employee Modal -->
    <x-modal name="update-employee-modal" title="Editar empleado">
        @include('forms.employee-form')
    </x-modal>
</div>

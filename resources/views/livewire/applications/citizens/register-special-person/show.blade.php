<div>
    <x-card>
        <x-card-header>
            <x-h3 :value="$application->applicable->service->title ?? 'Detalles de la Aplicación'" />
        </x-card-header>
        <x-card-body-grids>
            <!-- Name -->
            <x-card-body-grid label="Nombre" value="{{ $application->applicable->name ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Lastname -->
            <x-card-body-grid label="Apellido" value="{{ $application->applicable->last_name ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Birth -->
            <x-card-body-grid label="Fecha de nacimiento" class="col-span-full lg:col-span-6">
                <x-date-format date="{{ $application->applicable->birth_date }}" format="d/m/Y" />
            </x-card-body-grid>
            <!-- Is disabled -->
            <x-card-body-grid label="Discapacitado" value="{{ $application->applicable->is_disabled ? 'Sí' : 'No' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Disability Description -->
            <x-card-body-grid label="Descripción de la discapacidad"
                value="{{ $application->applicable->disability_type ?? 'N/A' }}" class="col-span-full" />
            <!-- Is Veteran -->
            <x-card-body-grid label="Veterano" value="{{ $application->applicable->is_veteran ? 'Sí' : 'No' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Is deceased -->
            <x-card-body-grid label="Fallecido" value="{{ $application->applicable->is_deceased ? 'Sí' : 'No' }}"
                class="col-span-full lg:col-span-6 lg:col-start-1" />
            <!-- Deceased Date -->
            <x-card-body-grid label="Fecha de fallecimiento" class="col-span-full lg:col-span-6">
                @if ($application->applicable->is_deceased)
                    <x-date-format date="{{ $application->applicable->deceased_date }}" format="d/m/Y" />
                @else
                    N/A
                @endif
            </x-card-body-grid>
            <!-- Address -->
            <x-card-body-grid label="Dirección" value="{{ $application->applicable->address ?? 'N/A' }}"
                class="col-span-full" />
            <!-- Place -->
            <x-card-body-grid label="Lugar" value="{{ $application->applicable->place->name ?? 'N/A' }}" class="col-span-full md:col-span-6" />
                <!-- Zip code -->
            <x-card-body-grid label="Código postal" value="{{ $application->applicable->zip_code ?? 'N/A' }}"
                class="col-span-full md:col-span-6" />
                <!-- Contact person -->
            <x-card-body-grid label="Persona de contacto" value="{{ $application->applicable->contact_person ?? 'N/A' }}"
                class="col-span-full" />
                <!-- Relationship -->
                <x-card-body-grid label="Relación" value="{{ $application->applicable->relationship ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />
                <!-- Contact phone -->
            <x-card-body-grid label="Teléfono de contacto" value="{{ $application->applicable->contact_phone ?? 'N/A' }}"
                class="col-span-full md:col-span-6" />
                <!-- Remarks -->
            <x-card-body-grid label="Observaciones" value="{{ $application->applicable->remarks ?? 'N/A' }}"
                class="col-span-full" />
            <!-- Created At -->
            <x-card-body-grid label="Fecha de creación" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $application->applicable->created_at }}" format="d/m/Y h:i a" />
            </x-card-body-grid>
        </x-card-body-grids>
    </x-card>
</div>

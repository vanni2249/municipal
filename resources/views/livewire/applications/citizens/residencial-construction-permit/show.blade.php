<div>
    <x-card>
        <x-card-header>
            <x-h3 :value="$application->applicable->service->title ?? 'Detalles de la Aplicación'" />
        </x-card-header>
        <x-card-body-grids>
            <!-- Address -->
            <x-card-body-grid label="Propiedad" value="{{ $application->applicable->address->address ?? 'N/A' }}"
                class="col-span-full" />
            <!-- Place -->
            <x-card-body-grid label="Lugar" value="{{ $application->applicable->place->name ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />

            <!-- Postal code -->
            <x-card-body-grid label="Código postal" value="{{ $application->applicable->address->postal_code ?? 'N/A' }}"
                class="col-span-full md:col-span-6" />
            <!-- Owner name -->
            <x-card-body-grid label="Propietario" value="{{ $application->applicable->owner_name ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Contractor name -->
            <x-card-body-grid label="Contratista" value="{{ $application->applicable->contractor_name ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Description -->
            <x-card-body-grid label="Descripción" value="{{ $application->applicable->description ?? 'N/A' }}"
                class="col-span-full" />
            <!-- Created At -->
            <x-card-body-grid label="Fecha de creación" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $application->applicable->created_at }}" format="d/m/Y h:i a" />
            </x-card-body-grid>
        </x-card-body-grids>
    </x-card>
</div>

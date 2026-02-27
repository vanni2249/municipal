<div>
    <x-card>
        <x-card-header>
            <x-h3 :value="$application->applicable->service->title ?? 'Detalles de la Aplicación'" />
        </x-card-header>
        <x-card-body-grids>
            <!-- Property Name -->
            <x-card-body-grid label="Propiedad" value="{{ $application->applicable->property->name ?? 'N/A' }}" class="col-span-full" />

                <!-- Description -->
                <x-card-body-grid label="Descripción" value="{{ $application->applicable->description ?? 'N/A' }}" class="col-span-full" />
                <!-- Use Date -->
                <x-card-body-grid label="Fecha de uso" class="col-span-full md:col-span-6">
                    <x-date-format date="{{ $application->applicable->use_date }}" format="d/m/Y" />
                </x-card-body-grid>
            <!-- Created At -->
            <x-card-body-grid label="Fecha de creación" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $application->applicable->created_at }}" format="d/m/Y h:i a" />
            </x-card-body-grid>
        </x-card-body-grids>
    </x-card>
</div>

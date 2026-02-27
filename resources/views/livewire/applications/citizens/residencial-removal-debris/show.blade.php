<div>
    <x-card>
        <x-card-header>
            <x-h3 :value="$application->applicable->service->title ?? 'Detalles de la Aplicación'" />
        </x-card-header>
        <x-card-body-grids>
            <!-- Address -->
            <x-card-body-grid label="Dirección" value="{{ $application->applicable->address->address ?? 'N/A' }}"
                class="col-span-full lg:col-span-6" />
            <!-- Place -->
            <x-card-body-grid label="Lugar" value="{{ $application->applicable->address->place->name ?? 'N/A' }}" class="col-span-full lg:col-span-3" />
                <!-- Postal code -->
            <x-card-body-grid label="Código Postal" value="{{ $application->applicable->address->postal_code ?? 'N/A' }}" class="col-span-full lg:col-span-3" />
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

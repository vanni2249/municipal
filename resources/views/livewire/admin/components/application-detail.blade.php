<div>
   <x-card>
    <x-card-header>
        <x-h3 value="Detalles de la Aplicación" />
    </x-card-header>
    <x-card-body-grids>
        <!-- Service Name -->
        <x-card-body-grid label="Servicio" value="{{ $application->service->title ?? 'N/A' }}" class="col-span-full" />

        <!-- Application Number -->
        <x-card-body-grid label="Número de aplicación" value="{{ $application->number ?? 'N/A' }}" class="col-span-full md:col-span-6" />

        <!-- Created At -->
        <x-card-body-grid label="Fecha de creación" class="col-span-full md:col-span-6">
            <x-date-format date="{{ $application->created_at }}" format="d/m/Y h:i a" />
        </x-card-body-grid>
    </x-card-body-grids>
   </x-card>
</div>

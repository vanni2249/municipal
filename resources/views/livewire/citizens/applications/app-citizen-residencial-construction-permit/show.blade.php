<div>
    <x-card>
        <header>
            <x-h3>Detalles de permiso de construcción residencial</x-h3>
        </header>
        <x-app-elements>
            <!-- Owner name -->
            <x-app-element class="col-span-full">
                <x-app-element-label label="Nombre del propietario" />
                <x-app-element-value value="{{ $application->applicable->owner_name }}" />
            </x-app-element>
            <!-- Address -->
            <x-app-element class="col-span-full">
                <x-app-element-label label="Dirección" />
                <x-app-element-value value="{{ $application->applicable->address->address }}" />
            </x-app-element>

            <!-- Place -->
            <x-app-element class="col-span-full md:col-span-3">
                <x-app-element-label label="Lugar" />
                <x-app-element-value value="{{ $application->applicable->address->place->name }}" />
            </x-app-element>
            <!-- Zip -->
            <x-app-element class="col-span-full md:col-span-3">
                <x-app-element-label label="Código Postal" />
                <x-app-element-value value="{{ $application->applicable->address->postal_code }}" />
            </x-app-element>
            <!-- Contractor name -->
            <x-app-element class="col-span-full">
                <x-app-element-label label="Nombre del contratista" />
                <x-app-element-value value="{{ $application->applicable->contractor_name }}" />
            </x-app-element>

            <x-app-element class="col-span-full">
                <x-app-element-label label="Descripción" />
                <x-app-element-value value="{{ $application->applicable->description }}" />
            </x-app-element>
        </x-app-elements>
    </x-card>
</div>

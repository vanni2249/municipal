<div>
    <x-card>
        <header>
            <x-h3>Detalles de Uso de Propiedad</x-h3>
        </header>
        <x-app-elements>
            <x-app-element class="col-span-full md:col-span-4">
                <x-app-element-label label="Propiedad" />
                <x-app-element-value value="{{ $application->applicable->property->name }}" />
            </x-app-element>

            <x-app-element class="col-span-full md:col-span-2">
                <x-app-element-label label="Fecha de Uso de Propiedad" />
                <x-app-element-value value="{{ $application->applicable->use_date }}" />
            </x-app-element>

            <x-app-element class="col-span-full">
                <x-app-element-label label="Descripción" />
                <x-app-element-value value="{{ $application->applicable->description }}" />
            </x-app-element>
        </x-app-elements>
    </x-card>
</div>

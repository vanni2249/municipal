<div>
    <!-- Remove trash application -->
    <x-card>
        <header>
            <x-h3>Detalles de patente temporal de negocio</x-h3>
        </header>
        <x-app-elements>
            <x-app-element class="col-span-full md:col-span-4">
                <x-app-element-label label="Nombre de negocio" />
                <x-app-element-value value="{{ $application->business->name }}" />
            </x-app-element>
            <x-app-element class="col-span-full">
                <x-app-element-label label="Dirección" />
                <x-app-element-value value="{{ $application->business->address->address }}" />
            </x-app-element>

            <x-app-element class="col-span-full lg:col-span-3">
                <x-app-element-label label="Fecha de comienzo" />
                <x-app-element-value>
                    <x-date-format date="{{ $application->applicable->started_at }}" format="d/M/Y" />
                </x-app-element-value>
            </x-app-element>
            <x-app-element class="col-span-full lg:col-span-3">
                <x-app-element-label label="Fecha de finalización" />
                <x-app-element-value>
                    <x-date-format date="{{ $application->applicable->ended_at }}" format="d/M/Y" />
                </x-app-element-value>
            </x-app-element>
        </x-app-elements>
    </x-card>
</div>

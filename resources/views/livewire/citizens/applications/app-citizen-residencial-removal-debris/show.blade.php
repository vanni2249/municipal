<div>
    <x-card>
        <header>
            <x-h3>Detalles de remoción de escombros residencial</x-h3>
        </header>
        <x-app-elements>
            <x-app-element class="col-span-full">
                <x-app-element-label label="Dirección" />
                <x-app-element-value value="{{ $application->applicable->address->address }}" />
            </x-app-element>

            <x-app-element class="col-span-full md:col-span-4">
                <x-app-element-label label="Lugar" />
                <x-app-element-value value="{{ $application->applicable->address->place->name }}" />
            </x-app-element>
            <x-app-element class="col-span-full md:col-span-2">
                <x-app-element-label label="Código Postal" />
                <x-app-element-value value="{{ $application->applicable->address->postal_code }}" />
            </x-app-element>

            <x-app-element class="col-span-full">
                <x-app-element-label label="Descripción" />
                <x-app-element-value value="{{ $application->applicable->description }}" />
            </x-app-element>
        </x-app-elements>
    </x-card>
</div>

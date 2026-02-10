<div>
    <header>
        <x-h3>Detalles de recogido de basura</x-h3>
    </header>
    <x-app-elements>
        <x-app-element class="col-span-full md:col-span-4">
            <x-app-element-label label="Dirección" />
            <x-app-element-value value="{{ $application->business->address->address }}" />
        </x-app-element>
        <x-app-element class="col-span-full">
            <x-app-element-label label="Descripción" />
            <x-app-element-value value="{{ $application->applicable->description }}" />
        </x-app-element>
    </x-app-elements>
</div>

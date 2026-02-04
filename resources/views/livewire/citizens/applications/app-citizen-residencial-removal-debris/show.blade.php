<div>
    <x-card>
        <x-app-elements>
            <x-app-element class="col-span-full md:col-span-4">
                <x-app-element-label label="Dirección" />
                <x-app-element-value value="{{ $application->applicable->address->address }}"/>
            </x-app-element>

            <x-app-element class="col-span-full md:col-span-4">
                <x-app-element-label label="Descripción" />
                <x-app-element-value value="{{ $application->applicable->description }}"/>
            </x-app-element>
        </x-app-elements>
    </x-card>
</div>

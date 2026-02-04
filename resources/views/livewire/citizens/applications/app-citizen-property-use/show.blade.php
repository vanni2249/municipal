<div>
    <x-card>
        <x-app-elements>
            <x-app-element class="col-span-2 md:col-span-2 lg:col-span-3">
                <x-app-element-label label="Propiedad" />
                <x-app-element-value value="{{ $application->applicable->property->name }}"/>
            </x-app-element>

            <x-app-element class="col-span-2 ">
                <x-app-element-label label="Fecha de Uso de Propiedad" />
                <x-app-element-value value="{{ $application->applicable->use_date }}"/>
            </x-app-element>

            <x-app-element class="col-span-2 md:col-span-3 lg:col-span-3">
                <x-app-element-label label="Descripción" />
                <x-app-element-value value="{{ $application->applicable->description }}"/>
            </x-app-element>
        </x-app-elements>
        {{-- <br> --}}
        {{-- <x-link-button href="" class="mt-4">
            Editar applicacion
        </x-link-button> --}}
    </x-card>
</div>

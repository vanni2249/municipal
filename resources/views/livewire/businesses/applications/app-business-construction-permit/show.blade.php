<div class="space-y-4">
    <x-card>
        <header>
            <x-h3>Detalles de permiso de construcción</x-h3>
        </header>
        <x-app-elements>
            <x-app-element class="col-span-full md:col-span-4">
                <x-app-element-label label="Dirección" />
                <x-app-element-value value="{{ $application->business->address->address }}" />
            </x-app-element>
            <x-app-element class="col-span-full">
                <x-app-element-label label="Descripción" />
                <x-app-element-value value="{{ $application->applicable->project_description }}" />
            </x-app-element>
            <x-app-element class="col-span-full lg:col-span-3">
                <x-app-element-label label="Nombre contratista" />
                <x-app-element-value value="{{ $application->applicable->contractor_name }}" />
            </x-app-element>
            <x-app-element class="col-span-full lg:col-span-3">
                <x-app-element-label label="Número de licencia contratista" />
                <x-app-element-value value="{{ $application->applicable->contractor_license_number }}" />
            </x-app-element>
        </x-app-elements>
    </x-card>

    @if ($application->inspections->count() > 0)
        <x-card>
            <header>
                <x-h3>Inspecciones asociadas</x-h3>
            </header>
            <x-card-elements-group>
                @foreach ($application->inspections as $inspection)
                    <x-card-element class="col-span-full flex justify-between items-center"
                        border="{{ $inspection->status->statusType->variant }}">
                        <ul>
                            <li>
                                {{ $inspection->number }}
                            </li>
                            <li class="text-sm text-gray-700">
                                {{ $inspection->inspectionType->name }}
                            </li>
                        </ul>
                        <div>
                            <x-badge label="{{ $inspection->status->statusType->name }}"
                                variant="{{ $inspection->status->statusType->variant }}" />
                        </div>
                    </x-card-element>
                @endforeach
            </x-card-elements-group>
        </x-card>
    @endif
</div>

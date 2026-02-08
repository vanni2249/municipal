<div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- Basic information -->
            <x-card>
                <header>
                    <x-h3>Detalles de la aplicación</x-h3>
                </header>
                <x-app-elements>
                    <!-- Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Número de solicitud" />
                        <x-app-element-value value="{{ $application->number }}" />
                    </x-app-element>

                    <!-- Account Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="# Cuenta solicitante" />
                        <x-app-element-value value="{{ $application->business->number }}" />
                    </x-app-element>

                    <!-- Applicant -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Solicitante" />
                        <x-app-element-value
                            value="{{ $application->business->user
                                ? $application->business->user->name . ' ' . $application->business->user->lastname
                                : $application->business->name . ' ' . $application->business->lastname }}" />
                    </x-app-element>

                    <!-- Created At -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value value="{{ $application->created_at }}" />
                    </x-app-element>
                </x-app-elements>
            </x-card>

            <x-card>
                <header>
                    <x-h3>Estado de la Aplicación</x-h3>
                </header>
                <x-card-elements-group>
                    @foreach ($application->statuses as $status)
                        <x-card-element class="mb-4" border="{{ $status->statusType->variant }}">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm text-gray-600 mt-1">
                                        <x-date-format :date="$status->created_at" format="d M Y h:i a" />
                                    </p>
                                </div>
                                <div class="mt-1 text-right">
                                    <x-badge label="{{ $status->statusType->name }}"
                                        variant="{{ $status->statusType->variant }}" />
                                </div>
                            </div>
                        </x-card-element>
                    @endforeach
                </x-card-elements-group>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-7">
            <!-- Remove trash application -->
            <x-card>
                <header>
                    <x-h3>Detalles de permiso de construcción</x-h3>
                </header>
                <x-app-elements>
                    <x-app-element class="col-span-full md:col-span-4">
                        <x-app-element-label label="Dirección" />
                        <x-app-element-value value="{{ $application->business->addresses->first()->address }}" />
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
        </div>
    </div>
</div>

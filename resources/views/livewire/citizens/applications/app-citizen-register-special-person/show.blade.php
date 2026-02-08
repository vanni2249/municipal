<div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <x-card>
                <header>
                    <x-h3>Detalles de la aplicacion</x-h3>
                </header>
                <x-app-elements>
                    <!-- Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Numero de solicitud" />
                        <x-app-element-value value="{{ $application->number }}" />
                    </x-app-element>

                    <!-- Account Number -->
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="# Cuenta solicitante" />
                        <x-app-element-value value="{{ $application->account->number }}" />
                    </x-app-element>

                    <!-- Applicant -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Solicitante" />
                        <x-app-element-value
                            value="{{ $application->account->user
                                ? $application->account->user->name . ' ' . $application->account->user->lastname
                                : $application->account->name . ' ' . $application->account->lastname }}" />
                    </x-app-element>

                    <!-- Created At -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value>
                            <x-date-format :date="$application->created_at" format="d M Y h:i a" />
                        </x-app-element-value>
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
            <x-card>
                <header>
                    <x-h3>Detalles de la registracion</x-h3>
                </header>
                <x-app-elements>
                    <!-- Name -->
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Nombre" />
                        <x-app-element-value value="{{ $application->applicable->name }}" />
                    </x-app-element>
                    <!-- Last_name -->
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Apellido" />
                        <x-app-element-value value="{{ $application->applicable->last_name }}" />
                    </x-app-element>
                    <!-- Birth Date -->
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Fecha de nacimiento" />
                        <x-app-element-value>
                            <x-date-format :date="$application->applicable->birth_date" format="d M Y" />
                        </x-app-element-value>
                    </x-app-element>
                    <!-- is_disabled -->
                    <x-app-element class="col-span-full lg:col-span-3 lg:col-start-1">
                        <x-app-element-label label="¿Discapacidad?" />
                        <x-app-element-value>
                            @if ($application->applicable->is_disabled)
                                <x-badge label="Sí" variant="success" />
                            @else
                                <x-badge label="No" variant="danger" />
                            @endif
                        </x-app-element-value>
                    </x-app-element>
                    <!-- disability type -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Tipo de discapacidad" />
                        <x-app-element-value value="{{ $application->applicable->disability_type }}" />
                    </x-app-element>
                    <!-- is_veteran -->
                    <x-app-element class="col-span-3 lg:col-span-3">
                        <x-app-element-label label="¿Veterano?" />
                        <x-app-element-value>
                            @if ($application->applicable->is_veteran)
                                <x-badge label="Sí" variant="success" />
                            @else
                                <x-badge label="No" variant="danger" />
                            @endif
                        </x-app-element-value>
                    </x-app-element>
                    <!-- is deceased -->
                    <x-app-element class="col-span-3 col-start-1 lg:col-span-3 lg:col-start-1">
                        <x-app-element-label label="¿Fallecido?" />
                        <x-app-element-value>
                            @if ($application->applicable->is_deceased)
                                <x-badge label="Sí" variant="success" />
                            @else
                                <x-badge label="No" variant="danger" />
                            @endif
                        </x-app-element-value>
                    </x-app-element>
                    <!-- deceased date -->
                    @if ($application->applicable->is_deceased && $application->applicable->deceased_date)
                        <x-app-element class="col-span-3 col-start-1 lg:col-span-3 lg:col-start-1">
                            <x-app-element-label label="Fecha de fallecimiento" />
                            <x-app-element-value>
                                <x-date-format :date="$application->applicable->deceased_date" format="d M Y" />
                            </x-app-element-value>
                        </x-app-element>
                    @endif
                    <!-- contact person -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Persona de contacto" />
                        <x-app-element-value value="{{ $application->applicable->contact_person }}" />
                    </x-app-element>
                    <!-- contact phone -->
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Teléfono de contacto" />
                        <x-app-element-value value="{{ $application->applicable->contact_phone }}" />
                    </x-app-element>
                    <!-- relationship -->
                    <x-app-element class="col-span-full lg:col-span-3">
                        <x-app-element-label label="Relación" />
                        <x-app-element-value value="{{ $application->applicable->relationship }}" />
                    </x-app-element>
                    <!-- Address -->
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Dirección" />
                        <x-app-element-value value="{{ $application->applicable->address }}" />
                    </x-app-element>
                    <!-- place -->
                    <x-app-element class="col-span-3">
                        <x-app-element-label label="Lugar de residencia" />
                        <x-app-element-value value="{{ $application->applicable->place->name }}" />
                    </x-app-element>
                    <!-- Zip Code -->
                    <x-app-element class="col-span-3">
                        <x-app-element-label label="Código Postal" />
                        <x-app-element-value value="{{ $application->applicable->zip_code }}" />
                    </x-app-element>
                    @if ($application->applicable->remarks)
                        <!-- Remarks -->
                        <x-app-element class="col-span-full">
                            <x-app-element-label label="Observaciones" />
                            <x-app-element-value value="{{ $application->applicable->remarks }}" />
                        </x-app-element>
                    @endif

                    <!-- is active -->
                    <x-app-element class="col-span-3">
                        <x-app-element-label label="¿Registro activo?" />
                        <x-app-element-value>
                            @if ($application->applicable->is_active)
                                <x-badge label="Sí" variant="success" />
                            @else
                                <x-badge label="No" variant="danger" />
                            @endif
                        </x-app-element-value>
                    </x-app-element>
                </x-app-elements>
            </x-card>
        </div>
    </div>
</div>

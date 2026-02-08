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
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value>
                            <x-date-format :date="$application->created_at" format="d M Y h:i a" />
                        </x-app-element-value>
                    </x-app-element>
                </x-app-elements>
            </x-card>
            <x-card>
                <header>
                    <x-h3>Estado de la aplicación</x-h3>
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
                                <div class="">
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
                    <x-h3>Detalles de alquiler de propiedad</x-h3>
                </header>
                <x-app-elements>
                    <x-app-element class="col-span-full md:col-span-4">
                        <x-app-element-label label="Propiedad" />
                        <x-app-element-value value="{{ $application->applicable->property->name }}" />
                    </x-app-element>

                    <x-app-element class="col-span-full md:col-span-2">
                        <x-app-element-label label="Fecha de Uso de Propiedad" />
                        <x-app-element-value>
                            <x-date-format :date="$application->applicable->rent_date" format="d M Y" />
                        </x-app-element-value>
                    </x-app-element>

                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Descripción" />
                        <x-app-element-value value="{{ $application->applicable->description }}" />
                    </x-app-element>
                </x-app-elements>
            </x-card>

        </div>
    </div>
</div>

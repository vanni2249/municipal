<div class="">
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full">
            <!-- Header -->
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h2>{{ $application->service->title }}</x-h2>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $application->number }}</li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <x-badge label="{{ $application->status->statusType->name }}"
                            variant="{{ $application->status->statusType->variant }}" />
                        <div class="mt-2">
                            <span class="text-sm text-gray-600 text-right">
                                <x-date-format :date="$application->created_at" format="d/M/Y" />
                            </span>
                        </div>
                    </div>
                </header>
            </x-card>
        </div>

        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- App details -->
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

            <!-- Application Status -->
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
        <div class="col-span-full lg:col-span-7 space-y-4">

            @switch($service->slug)
                @case('app-business-remove-trash')
                    @livewire('businesses.applications.app-business-remove-trash.show',[
                            'application' => $application,
                        ],key('app-business-remove-trash-show')
                    )
                @break

                @case('app-business-remove-debris')
                    @livewire('businesses.applications.app-business-remove-debris.show',[
                            'application' => $application,
                        ],key('app-business-remove-debris-show')
                    )
                @break

                @case('app-business-construction-permit')
                    @livewire('businesses.applications.app-business-construction-permit.show',[
                            'application' => $application,
                        ],key('app-business-construction-permit-show')
                    )
                @break

                @case('app-business-use-permit')
                    @livewire('businesses.applications.app-business-use-permit.show',[
                            'application' => $application,
                        ],
                        key('app-business-use-permit-show')
                    )
                @break

                @case('app-business-temporary-patent')
                        @livewire('businesses.applications.app-business-temporary-patent.show',[
                            'application' => $application,
                        ],
                        key('app-business-temporary-patent-show')
                    )
                @break

                @case('app-business-renew-patent')
                        @livewire('businesses.applications.app-business-renew-patent.show',[
                            'application' => $application,
                        ],
                        key('app-business-renew-patent-show')
                    )
                @break

                @case('app-business-report-tax')
                        @livewire('businesses.applications.app-business-report-tax.show',[
                            'application' => $application,
                        ],
                        key('app-business-report-tax-show')
                    )
                @break
                @default
            @endswitch
        </div>
    </div>
</div>

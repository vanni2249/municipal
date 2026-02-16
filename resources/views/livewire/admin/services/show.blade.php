<div class="grid grid-cols-12 gap-2">
    <div class="col-span-full lg:col-span-full">
        <x-card>
            <!-- Service Information -->
            <x-card-header>
                <div class="flex justify-between items-start">
                    <div>
                        <x-h2 :value="$service->title" />
                        <x-sub-title :value="$service->number" />
                    </div>
                    <div>
                        <span class="text-sm text-gray-800">
                            {{ $service->serviceType->name }}
                        </span>
                    </div>
                </div>
            </x-card-header>
        </x-card>
    </div>
    <div class="col-span-full lg:col-span-5 space-y-4">
        <x-card>
            <x-card-header>
                <x-h3>
                    Información del servicio
                </x-h3>
            </x-card-header>
            <x-card-body-grids>
                <x-card-body-grid label="Number" class="col-span-full lg:col-span-6">
                    {{ $service->number }}
                </x-card-body-grid>
                <x-card-body-grid label="Tipo de servicio" class="col-span-full lg:col-span-6">
                    {{ $service->serviceType->name }}
                </x-card-body-grid>
                <x-card-body-grid label="Tipo de cuenta" class="col-span-full lg:col-span-6">
                    {{ $service->accountType->name }}

                </x-card-body-grid>
                <x-card-body-grid label="Costo" class="col-span-full lg:col-span-6">
                    {{ $service->amount ? '$' . number_format($service->amount, 2) : 'Gratis' }}

                </x-card-body-grid>
                <x-card-body-grid label="Titulo del servicio" class="col-span-full">
                    {{ $service->title }}
                </x-card-body-grid>
                <x-card-body-grid label="Descripción del servicio" class="col-span-full">
                    {{ $service->description ?? 'N/A' }}
                </x-card-body-grid>
            </x-card-body-g>
        </x-card>
    </div>
    <div class="col-span-full lg:col-span-7">
        <x-card>
            <x-card-header>
                <x-h3>
                    Ultimas aplicaciones del servicio
                </x-h3>
            </x-card-header>
            <x-card-body-lists class="gap-2">
                @forelse ($service->applications as $application)
                    <x-card-body-list class="col-span-full flex justify-between item-center">
                        <div>
                            <ul class="flex space-x-2">
                                <li>
                                    <span class="text-xs font-bold uppercase text-gray-700">
                                        {{ $application->number }}
                                    </span>
                                </li>
                            </ul>
                            <p class=" text-gray-800">{{ $application->account_id ? $application->account->user->name . ' ' . $application->account->user->lastname : $application->business->name }}</p>
                            <ul class="flex space-x-2 text-xs text-gray-600">
                                <li>
                                    <x-date-format date="{{ $application->created_at }}" format="d M Y" />
                                </li>
                            </ul>
                        </div>
                        <div>
                            <x-badge label="{{ $application->status->statusType->name }}"
                                variant="{{ $application->status->statusType->variant }}" />
                        </div>
                    </x-card-body-list>
                @empty
                    <x-card-body-list class="col-span-full">
                        No hay aplicaciones para este servicio.
                    </x-card-body-list>
                @endforelse
            </x-card-body-lists>
        </x-card>
    </div>
</div>

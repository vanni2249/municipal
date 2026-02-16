<div>

    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <header class="flex justify-between items-start">
                    <div>
                        <x-h2>{{ $inspection->inspectable->service->title }}</x-h2>
                        <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                            <li>{{ $inspection->number }}</li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <x-badge label="{{ $inspection->status->statusType->name }}"
                            variant="{{ $inspection->status->statusType->variant }}" />
                    </div>
                </header>
            </x-card>
        </div>
        <!-- Application detail & statuses -->
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Application detail -->
            <x-card>
                <x-card-header>
                    <x-h3>Detalles de la aplicación</x-h3>
                </x-card-header>
                <x-card-body-grids>
                    <x-card-body-grid label="Número de inspección" class="col-span-full md:col-span-6">
                        {{ $inspection->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="# Cuenta solicitante" class="col-span-full md:col-span-6">
                        {{ $inspection->inspectable->account_id ? $inspection->inspectable->account->number : $inspection->inspectable->business->number }}
                    </x-card-body-grid>
                    <x-card-body-grid label="Solicitante" class="col-span-full">
                        @if ($inspection->inspectable->account_id)
                            {{ $inspection->inspectable->account->user
                                ? $inspection->inspectable->account->user->name . ' ' . $inspection->inspectable->account->user->lastname
                                : $inspection->inspectable->account->name . ' ' . $inspection->inspectable->account->lastname }}
                        @else
                            {{ $inspection->inspectable->business->name }}
                        @endif
                    </x-card-body-grid>
                    <x-card-body-grid label="Fecha de creación" class="col-span-full">
                        <x-date-format :date="$inspection->created_at" format="d M Y h:i a" />
                    </x-card-body-grid>
                </x-card-body-grids>
            </x-card>
            <!-- Application statuses -->
            <x-card>
                <header>
                    <x-h3>Estado de la Aplicación</x-h3>
                </header>
                <x-card-elements-group>
                    @foreach ($inspection->statuses as $status)
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
        <!-- Application includes -->
        <div class="col-span-full lg:col-span-7">
            <x-card></x-card>
        </div>
    </div>


</div>

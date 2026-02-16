<div class="space-y-2">
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <!-- Account Information -->
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h2 :value="$account->user_id
                            ? $account->user->name . ' ' . $account->user->lastname
                            : $account->name . ' ' . $account->lastname" />
                        <x-badge :variant="$account->status->statusType->variant" :label="$account->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $account->number }}
                        </li>
                        @if ($account->user_id)
                            <li>|</li>
                            <li>{{ $account->user->number }}</li>
                        @else
                            <li>|</li>
                            <li class="text-red-600 line-clamp-1">Esta cuenta no está asociada a un usuario</li>
                        @endif
                    </ul>
                </x-card-header>

            </x-card>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- User detail -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Información básica" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Editar</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-app-elements>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Número" />
                        <x-app-element-value value="{{ $account->number ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Tipo de cuenta" />
                        <x-app-element-value value="{{ $account->accountType->name ?? 'N/A' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Nombre completo" />
                        <x-app-element-value
                            value="{{ $account->user_id ? $account->user->name . ' ' . $account->user->lastname : $account->name . ' ' . $account->lastname }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Email" />
                        <x-app-element-value
                            value="{{ $account->user_id ? $account->user->email : $account->email }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full md:col-span-3">
                        <x-app-element-label label="Teléfono" />
                        <x-app-element-value
                            value="{{ $account->user_id ? $account->user->phone ?? '...' : $account->phone ?? '...' }}" />
                    </x-app-element>
                    <x-app-element class="col-span-full">
                        <x-app-element-label label="Fecha de creación" />
                        <x-app-element-value>
                            <x-date-format date="{{ $account->created_at }}" format="d/m/Y h:i a" />
                        </x-app-element-value>
                    </x-app-element>
                </x-app-elements>
            </x-card>
            <!-- Statues -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Estados" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Editar</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-card-elements-group>
                    @foreach ($account->statuses as $status)
                        <x-card-element class="flex justify-between items-center text-sm"
                            border="{{ $status->statusType->variant }}">
                            <x-date-format date="{{ $status->created_at }}" format="d/m/Y h:i a" />
                            <x-badge :variant="$status->statusType->variant" :label="$status->statusType->name" />
                        </x-card-element>
                    @endforeach
                </x-card-elements-group>
            </x-card>
            @if ($account->accountType->slug == 'merchant')
                <x-card>
                    <x-card-header class="flex justify-between items-center">
                        <x-h3 value="Negocio" />
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-icon-button icon="ellipsis-vertical" variant="light" />
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="#">Crear negocio</x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </x-card-header>
                    <x-card-elements-group>
                        @foreach ($account->businesses as $business)
                            <x-card-element class="flex justify-between items-center text-sm"
                                border="{{ $business->status->statusType->variant }}">
                                <div class="flex flex-col space-y-1">
                                    <span>
                                        {{ $business->name }}
                                    </span>
                                    <ul class="flex space-x-2 items-center">
                                        <li>
                                            <x-badge variant="{{ $business->status->statusType->variant }}"
                                                label="{{ $business->status->statusType->name }}" />
                                        </li>
                                        <li class="text-gray-700 text-xs">
                                            {{ $business->number }}
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <x-dropdown>
                                        <x-slot name="trigger">
                                            <x-icon-button icon="ellipsis-vertical" variant="light" size="xs" />
                                        </x-slot>
                                        <x-slot name="content">
                                            <x-dropdown-link href="" wire:navigate>
                                                Ver detalles
                                            </x-dropdown-link>
                                            <x-dropdown-link href="#">
                                                Editar
                                            </x-dropdown-link>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </x-card-element>
                        @endforeach
                    </x-card-elements-group>
                </x-card>
            @endif
        </div>
        <div class="col-span-full lg:col-span-7 space-y-4">
            <!-- Applications -->
            {{-- @if ($account->accountType->slug == 'merchant') --}}
            <x-card>
                <x-card-header class="flex justify-between items-end">
                    <x-h2 value="Aplicaciones" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Editar</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-card-body-lists>
                    @forelse ($applications as $application)
                        <x-card-body-list class="flex justify-between items-start"
                            border="{{ $application->status->statusType->variant }}">
                            <div>
                                <ul class="flex space-x-2 items-center">
                                    <li class="text-sm text-gray-700">
                                        {{ $application->number }}
                                    </li>
                                </ul>
                                <p>
                                    {{ $application->service->title }}
                                </p>
                                <ul class="text-xs text-gray-700 flex flex-col md:flex-row space-x-4">
                                    <li>
                                        {{ $application->account_id ? $application->account->number : $application->business->number }}
                                    </li>
                                    <li>
                                        {{ $application->account_id
                                            ? ($application->account->user_id
                                                ? $application->account->user->name . ' ' . $application->account->user->lastname
                                                : $application->account->name . ' ' . $application->account->lastname)
                                            : $application->business->name }}
                                    </li>
                                    <li>
                                        <x-date-format date="{{ $application->created_at }}" format="d/m/Y h:i a" />
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <x-badge label="{{ $application->status->statusType->name }}"
                                    variant="{{ $application->status->statusType->variant }}" />
                            </div>
                        </x-card-body-list>
                    @empty
                        <x-card-body-list class="flex justify-between items-center">
                            <div>
                                <p>
                                    No hay aplicaciones asociadas a esta cuenta.
                                </p>
                            </div>
                        </x-card-body-list>
                    @endforelse
                </x-card-body-lists>
            </x-card>
            {{-- @else --}}
            {{-- @endif --}}
        </div>
    </div>
</div>

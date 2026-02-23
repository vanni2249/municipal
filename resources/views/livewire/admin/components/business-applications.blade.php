<div>
    <x-card>
        <x-card-header class="flex justify-between items-end">
            <x-h2 value="Aplicaciones del negocio" />
            <x-dropdown>
                <x-slot name="trigger">
                    <x-icon-button icon="ellipsis-vertical" variant="light" />
                </x-slot>
                <x-slot name="content">
                    @forelse ($services as $service)
                        <x-dropdown-button wire:click="createService('{{ $service->slug }}')">
                            {{ $service->title }}
                        </x-dropdown-button>
                    @empty
                        
                    @endforelse
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
                    <p>
                        No hay aplicaciones asociadas a esta cuenta.
                    </p>
                </x-card-body-list>
            @endforelse
        </x-card-body-lists>
    </x-card>

    <x-modal name="create-business-application-modal" title="Crear nueva aplicación">
        @if ($service_slug)
            <livewire:admin.components.application-create :service_slug="$service_slug" :account="$account" :business="$business" key="{{ $service_slug }}" />
        @endif
    </x-modal>
</div>

<div>
    <x-card>
        <x-card-header class="flex justify-between items-end">
            <x-h2 value="Aplicaciones del negocio" />
            {{-- <x-dropdown>
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
            </x-dropdown> --}}
             <x-button size="sm" variant="light" label="Crear nueva aplicación"
                @click="$dispatch('open-modal', 'services-list-modal')" class="whitespace-nowrap"/>
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

    <!-- Services list -->
    <x-modal name="services-list-modal" title="Lista de servicios" size="sm">
        <ul class="flex flex-col space-y-1">
            @foreach ($services as $service)
                <li class="w-full">
                    <button wire:click="createService('{{ $service->slug }}')" class="bg-gray-200 w-full text-sm text-left px-4 py-2 flex justify-between items-start rounded hover:bg-gray-300 cursor-pointer">
                        <div class="flex space-x-2">
                            <x-icon :icon="$service->icon" with="20" height="20"  class="inline-block mr-2 text-gray-700 stroke-1" />
                            {{ $service->title }}
                            </div>
                        <x-icon icon="arrow-up-right" with="20" height="20" class="inline-block ml-2 text-gray-700 stroke-1" />
                    </button>
                </li>
            @endforeach
        </ul>
    </x-modal>

     <!-- Create application modal -->
     <x-modal name="create-citizen-application-modal" title="Crear nueva aplicación">
        @if ($service_slug)
            <livewire:admin.components.application-create :service_slug="$service_slug" :account="$account" :business="$business" key="{{ $service_slug }}" />
        @endif
    </x-modal>

    <!-- Create business application modal -->
    <x-modal name="create-business-application-modal" title="Crear nueva aplicación">
        @if ($service_slug)
            <livewire:admin.components.application-create :service_slug="$service_slug" :account="$account" :business="$business" key="{{ $service_slug }}" />
        @endif
    </x-modal>
</div>

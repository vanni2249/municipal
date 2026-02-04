<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2>{{ $application->service->title }}</x-h2>
                <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                    <li>{{ $application->number }}</li>
                    {{-- <li>{{ $application->service->serviceType->name }}</li> --}}
                </ul>
            </div>
            <div class="text-right">
                <x-badge label="{{ $application->status->statusType->name }}"
                    variant="{{ $application->status->statusType->variant }}" />
                <div class="uppercase text-xs font-bold text-gray-500 mt-1">
                    <span class="text-sm text-gray-600 text-right">
                        {{ $application->service->serviceType->name }}
                    </span>
                </div>
            </div>
        </header>
    </x-card>

     @switch($application->service->slug)
        @case('app-citizen-property-use')
            @livewire('citizens.applications.app-citizen-property-use.show', [
                'application' => $application,
            ])
            
            @break
        @case('app-citizen-property-rent')
            @livewire('citizens.applications.app-citizen-property-rent.show', [
                'application' => $application,
            ])
            @break
        @case('app-citizen-residencial-removal-debris')
            @livewire('citizens.applications.app-citizen-residencial-removal-debris.show', [
                'application' => $application,
            ])
            @break

        @case('app-citizen-report-property-damage')
            @livewire('citizens.applications.app-citizen-report-property-damage.show', [
                'application' => $application,
            ])
            @break
        @case('app-citizen-register-special-person')
            @livewire('citizens.applications.app-citizen-register-special-person.show', [
                'application' => $application,
            ])
            @break
        @case('app-citizen-residencial-construction-permit')
            @livewire('citizens.applications.app-citizen-residencial-construction-permit.show', [
                'application' => $application,
            ])
            @break
        @default
            
    @endswitch
</div>

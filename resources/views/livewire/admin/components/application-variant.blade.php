<div>
    <!-- Citizen Applications -->
    @switch($application->service->slug)
        @case('app-citizen-property-use')
            <livewire:applications.citizens.property-use.show :application="$application" />
        @break

        @case('app-citizen-property-rent')
            <livewire:applications.citizens.property-rent.show :application="$application" />
        @break

        @case('app-citizen-residencial-removal-debris')
            <livewire:applications.citizens.residencial-removal-debris.show :application="$application" />
        @break

        @case('app-citizen-report-property-damage')
            <livewire:applications.citizens.report-property-damage.show :application="$application" />
        @break

        @case('app-citizen-register-special-person')
            <livewire:applications.citizens.register-special-person.show :application="$application" />
        @break

        @case('app-citizen-residencial-construction-permit')
            <livewire:applications.citizens.residencial-construction-permit.show :application="$application" />
        @break

        @default
    @endswitch

    {{ $application->service->slug }}
    <!-- Business Applications -->
    @switch($application->service->slug)
        @case('app-business-remove-trash')
            <livewire:applications.businesses.remove-trash.show :application="$application" />
        @break
        @case('app-business-remove-debris')
            <livewire:applications.businesses.remove-debris.show :application="$application" />
        @break

        @case('app-business-signage-permit')
            <livewire:applications.businesses.signage-permit.show :application="$application" />
        @break

        @case('app-business-commercial-construction-permit')
            <livewire:applications.businesses.commercial-construction-permit.show :application="$application" />
        @break

        @default
    @endswitch
</div>

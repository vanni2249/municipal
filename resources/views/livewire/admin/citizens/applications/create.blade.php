<div>
    @switch($service_slug)
        @case('app-citizen-property-use')
            <livewire:applications.citizens.property-use.create :account="$account" :service="$service" />
        @break

        @case('app-citizen-property-rent')
            <livewire:applications.citizens.property-rent.create :account="$account" :service="$service" />
        @break

        @case('app-citizen-residencial-removal-debris')
            <livewire:applications.citizens.residencial-removal-debris.create :account="$account" :service="$service" />
        @break

        @case('app-citizen-report-property-damage')
            <livewire:applications.citizens.report-property-damage.create :account="$account" :service="$service" />
        @break

        @case('app-citizen-register-special-person')
            <livewire:applications.citizens.register-special-person.create :account="$account" :service="$service" />
        @break

        @case('app-citizen-residencial-construction-permit')
            <livewire:applications.citizens.residencial-construction-permit.create :account="$account" :service="$service" />
        @break

        @default
    @endswitch
</div>

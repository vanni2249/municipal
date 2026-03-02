<div>
    <!-- Citizen Services -->
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

    <!-- Business Services -->
    @switch($service_slug)
        @case('app-business-remove-trash')
            <livewire:applications.businesses.remove-trash.create :business="$business" :service="$service" />
        @break

        @case('app-business-remove-debris')
            <livewire:applications.businesses.remove-debris.create :business="$business" :service="$service" />
        @break

        @case('app-business-construction-permit')
            <livewire:applications.businesses.construction-permit.create :business="$business" :service="$service" />
        @break

        @case('app-business-temporary-patent')
            <livewire:applications.businesses.temporary-patent.create :business="$business" :service="$service" />
        @break

        @case('app-business-renew-patent')
            <livewire:applications.businesses.renew-patent.create :business="$business" :service="$service" />
        @break

        @case('app-business-report-tax')
            <livewire:applications.businesses.report-tax.create :business="$business" :service="$service" />
        @break

        @default
    @endswitch
</div>

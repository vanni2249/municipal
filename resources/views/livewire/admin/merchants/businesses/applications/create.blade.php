<div>
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

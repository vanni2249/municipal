<div class="space-y-4">
    <x-card>
        <x-card-header>
            <h1 class="font-bold text-lg text-gray-900 line-clamp-2">{{ $service->title }}</h1>
            <span class="text-gray-700 text-sm">{{ $service->title }}</span>
        </x-card-header>
    </x-card>

    @switch($service->slug)
        @case('app-business-remove-trash')
            @livewire('businesses.applications.app-business-remove-trash.create',
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-remove-trash-create')
            )
        @break

        @case('app-business-remove-debris')
            @livewire('businesses.applications.app-business-remove-debris.create',  
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-remove-debris-create')
            )
        @break

        @case('app-business-construction-permit')
            @livewire('businesses.applications.app-business-construction-permit.create',
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-construction-permit-create')
            )
        @break

        @case('app-business-use-permit')
            @livewire('businesses.applications.app-business-use-permit.create',
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-use-permit-create')
            )
        @break

        @case('app-business-temporary-patent')
            @livewire('businesses.applications.app-business-temporary-patent.create',
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-temporary-patent-create')
            )
        @break

        @case('app-business-renew-patent')
            @livewire('businesses.applications.app-business-renew-patent.create',
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-renew-patent-create')
            )
        @break

        @case('app-business-report-tax')
            @livewire('businesses.applications.app-business-report-tax.create',
                [
                    'service' => $service,
                    'business' => $business,
                ],
                key('app-business-report-tax-create')
            )
        @break

        @default
    @endswitch
</div>

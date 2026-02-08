<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2>{{ $application->service->title }}</x-h2>
                <ul class="flex space-x-4 text-sm text-gray-700 mt-1">
                    <li>{{ $application->number }}</li>
                    <li>{{ $application->service->serviceType->name }}</li>
                </ul>
            </div>
            <div class="text-right">
                <x-badge label="{{ $application->status->statusType->name }}"
                    variant="{{ $application->status->statusType->variant }}" />
                <div class="mt-2">
                    <span class="hidden md:block text-sm text-gray-600">
                        <x-date-format :date="$application->created_at" format="d M Y H:m a" />
                    </span>
                    <span class="md:hidden text-sm text-gray-600 text-right">
                        <x-date-format :date="$application->created_at" format="d/M/Y" />
                    </span>
                </div>
            </div>
        </header>
    </x-card>

    @switch($service->slug)
        @case('app-business-remove-trash')
            @livewire('businesses.applications.app-business-remove-trash.show',
                [
                    'application' => $application,
                ],
                key('app-business-remove-trash-show')
            )
        @break

        @case('app-business-remove-debris')
            @livewire('businesses.applications.app-business-remove-debris.show',  
                [
                    'application' => $application,
                ],
                key('app-business-remove-debris-show')
            )
        @break

        @case('app-business-construction-permit')
            @livewire('businesses.applications.app-business-construction-permit.show',
                [
                    'application' => $application,
                ],
                key('app-business-construction-permit-show')
            )
        @break

        @case('app-business-use-permit')
            @livewire('businesses.applications.app-business-use-permit.show',
                [
                    'application' => $application,
                ],
                key('app-business-use-permit-show')
            )
        @break

        @case('app-business-temporary-patent')
            @livewire('businesses.applications.app-business-temporary-patent.show',
                [
                    'application' => $application,
                ],
                key('app-business-temporary-patent-show')
            )
        @break

        @case('app-business-renew-patent')
            @livewire('businesses.applications.app-business-renew-patent.show',
                [
                    'application' => $application,
                ],
                key('app-business-renew-patent-show')
            )
        @break

        @case('app-business-report-tax')
            @livewire('businesses.applications.app-business-report-tax.show',
                [
                    'application' => $application,
                ],
                key('app-business-report-tax-show')
            )
        @break

        @default
    @endswitch
</div>

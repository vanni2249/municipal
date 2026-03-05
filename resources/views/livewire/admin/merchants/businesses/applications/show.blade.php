<div>
    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <x-breadcrumb :array="[
                    [
                        'label' => 'Comerciantes',
                        'href' => route('admin.merchants', ['department' => request()->department()]),
                    ],
                    [
                        'label' => $business->account->name(),
                        'href' => route('admin.merchants.show', [
                            'department' => request()->department(),
                            'merchant' => $business->account->ulid,
                        ]),
                    ],
                    [
                        'label' => $business->name,
                        'href' => route('admin.merchants.businesses.show', [
                            'department' => request()->department(),
                            'merchant' => $business->account->ulid,
                            'business' => $business->ulid,
                        ]),
                    ],
                   
                    [
                        'label' => $application->service->title,
                        'href' => null,
                    ],
                ]" />
                <x-card-header>
                    <h2 class="text-xl font-bold">{{ $application->service->title }}</h2>
                </x-card-header>
            </x-card>
        </div>
        <!-- Column left -->
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Add content for the left column here -->
            <livewire:admin.components.application-detail :application="$application" />
        </div>
        <!-- Column right -->
        <div class="col-span-full lg:col-span-7">
            <!-- Add content for the right column here -->
            @switch($service_slug)
                @case('app-business-remove-trash')
                    <livewire:applications.businesses.remove-trash.show :application="$application" />
                @break

                @case('app-business-remove-debris')
                    <livewire:applications.businesses.remove-debris.show :application="$application" />
                @break

                @case('app-business-construction-permit')
                    <livewire:applications.businesses.construction-permit.show :application="$application" />
                @break

                @case('app-business-temporary-patent')
                    <livewire:applications.businesses.temporary-patent.show :application="$application" />
                @break

                @case('app-business-renew-patent')
                    <livewire:applications.businesses.renew-patent.show :application="$application" />
                @break

                @case('app-business-report-tax')
                    <livewire:applications.businesses.report-tax.show :application="$application" />
                @break

                @default
            @endswitch
        </div>
    </div>
</div>

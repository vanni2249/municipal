<div>
    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                 <x-breadcrumb :array="[
                    [
                        'label' => 'Ciudadanos',
                        'href' => route('admin.citizens', ['department' => request()->department()]),
                    ],
                    [
                        'label' => $account->name(),
                        'href' => route('admin.citizens.show', [
                            'department' => request()->department(),
                            'citizen' => $account->ulid,
                        ]),
                    ],
                    // [
                    //     'label' => $account->name,
                    //     'href' => route('admin.citizens.show', [
                    //         'department' => request()->department(),
                    //         'citizen' => $citizen->account->ulid,
                    //         'application' => $application->ulid,
                    //     ]),
                    // ],
                   
                    [
                        'label' => $application->service->title,
                        'href' => null,
                    ],
                ]" />
                    <h2 class="text-xl font-bold">{{ $application->service->title }}</h2>
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
        </div>
    </div>
</div>

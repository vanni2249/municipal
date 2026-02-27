<div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-12">
            <!-- Header -->
            <x-card>
                <x-card-header>
                    <div class="flex justify-between items-start">

                        <div>
                            <x-h1 value="{{ $application->service->title }}" class="text-2xl font-bold" />
                            <ul>
                                <li class="text-sm text-gray-700">
                                    {{ $application->number }}
                                </li>
                            </ul>
                        </div>
                        <div>
                            <x-badge :variant="$application->status->statusType->variant" :label="$application->status->statusType->name" />
                        </div>
                    </div>
                </x-card-header>
            </x-card>
        </div>
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Application Details -->
            <livewire:admin.components.application-detail :application="$application" />

            <!-- Account Details -->
            <livewire:admin.components.account-detail :account="$application->account" />
        </div>
        <div class="col-span-full lg:col-span-7 space-y-2">
            <!-- Variant Details -->
            <livewire:admin.components.application-variant :application="$application" />
        </div>
    </div>
</div>

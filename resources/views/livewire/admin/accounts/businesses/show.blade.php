<div class="space-y-2">
    <div class="grid grid-cols-12 gap-2">
        <!-- Header -->
        <div class="col-span-full">
            <x-card>
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h2 :value="$business->name" />
                        <x-badge :variant="$business->status->statusType->variant" :label="$business->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $business->number }}
                        </li>
                    </ul>
                </x-card-header>
            </x-card>
        </div>
        <!-- Left Column -->
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Business Detail -->
            <livewire:admin.components.business-detail :business="$business" />
            

            <!-- Account Detail -->
            <livewire:admin.components.account-detail :account="$business->account" />

        </div>
        <!-- Right Column -->
        <div class="col-span-full lg:col-span-7 space-y-2">
            <!-- Business Applications -->
            <livewire:admin.components.business-applications :account="$business->account" :business="$business" />
        </div>
    </div>
</div>

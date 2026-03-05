<div class="grid grid-cols-12 gap-2">
    <div class="col-span-full lg:col-span-full">
        <x-card>
            <!-- Business Information -->
            <x-card-header>
                <!-- Breadcrumb -->
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
                        ],),
                    ],
                    [
                        'label' => $business->name,
                        'href' => null,
                    ]
                ]" />
                <div class="flex justify-between items-start">
                    <x-h2 :value="$business->name" />
                    <div class="flex space-x-2 items-start">
                        <x-badge :variant="$business->status->statusType->variant" :label="$business->status->statusType->name" />
                    </div>
                </div>
                <ul class="md:flex md:space-x-2 text-sm text-gray-700">
                    <li class="line-clamp-1">
                        {{ $business->number }}
                    </li>
                </ul>
            </x-card-header>
        </x-card>
    </div>
   
    <div class="col-span-full lg:col-span-5 space-y-2">
        <!-- Business detail -->
        <livewire:admin.components.business-detail :business="$business" />

        <!-- Business status -->

        @if ($business->user)
            <!-- User Detail -->
            <livewire:admin.components.user-detail :user="$business->user" />

            <!-- User status -->
        @endif

    </div>
    <div class="col-span-full lg:col-span-7 space-y-2">
        <!-- Merchant Businesses -->
        <livewire:admin.components.business-applications :account="$business->account" :business="$business" />
    </div>
</div>

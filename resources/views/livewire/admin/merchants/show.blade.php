<div class="grid grid-cols-12 gap-2">
    <div class="col-span-full lg:col-span-full">
        <x-card>
            <!-- Account Information -->
            <x-card-header>
                <x-breadcrumb :array="[
                    [
                        'label' => 'Comerciantes',
                        'href' => route('admin.merchants', ['department' => request()->department()]),
                    ],
                    [
                        'label' => $merchant->name(),
                        'href' => null,
                    ]
                ]" />
                <div class="flex justify-between items-start">
                    <x-h2 :value="$merchant->name()" />
                    <div class="flex space-x-2 items-start">
                        <x-badge :variant="$merchant->status->statusType->variant" :label="$merchant->status->statusType->name" />
                    </div>
                </div>
                <ul class="md:flex md:space-x-2 text-sm text-gray-700">
                    <li class="line-clamp-1">
                        {{ $merchant->number }}
                    </li>
                    @if ($merchant->user_id)
                        <li>{{ $merchant->user->number }}</li>
                    @else
                        <li class="text-red-600 line-clamp-1">Esta cuenta no está asociada a un usuario</li>
                    @endif
                </ul>
            </x-card-header>
        </x-card>
    </div>

    <div class="col-span-full lg:col-span-5 space-y-2">
        <!-- Account detail -->
        <livewire:admin.components.account-detail :account="$merchant" />

        <!-- Account status -->

        @if ($merchant->user)
            <!-- User Detail -->
            <livewire:admin.components.user-detail :user="$merchant->user" />

            <!-- User status -->
        @endif

    </div>
    <div class="col-span-full lg:col-span-7 space-y-2">
        <!-- Merchant Businesses -->
        <livewire:admin.components.merchant-businesses :account="$merchant" />
    </div>
</div>

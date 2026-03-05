<div class="grid grid-cols-12 gap-2">
    <div class="col-span-full lg:col-span-full">
        <x-card>
            <!-- Account Information -->
            <x-card-header>
                <!-- Breadcrumb -->
                <x-breadcrumb :array="[
                    [
                        'label' => 'Ciudadanos',
                        'href' => route('admin.citizens', ['department' => request()->department()]),
                    ],
                    [
                        'label' => $account->name(),
                        'href' => null,
                    ]
                ]" />
                <div class="flex justify-between items-start">
                    <x-h2 :value="$account->name()" />
                    <div class="flex space-x-2 items-start">
                        <x-badge :variant="$account->status->statusType->variant" :label="$account->status->statusType->name" />
                       
                    </div>
                </div>
                <ul class="md:flex md:space-x-2 text-sm text-gray-700">
                    <li class="line-clamp-1">
                        {{ $account->number }}
                    </li>
                    @if ($account->user_id)
                        <li>{{ $account->user->number }}</li>
                    @else
                        <li class="text-red-600 line-clamp-1">Esta cuenta no está asociada a un usuario</li>
                    @endif
                </ul>
            </x-card-header>
        </x-card>
    </div>
    <div class="col-span-full lg:col-span-5 space-y-2">
        <!-- Account detail -->
        <livewire:admin.components.account-detail :account="$account" />

        <!-- Account addresses -->
        <livewire:admin.components.account-addresses :account="$account" />

        <!-- Account status -->

        @if ($account->user)
            <!-- User Detail -->
            <livewire:admin.components.user-detail :user="$account->user" />

            <!-- User status -->
        @endif

    </div>
    <div class="col-span-full lg:col-span-7 space-y-2">
        <!-- Citizen Applications -->
        @if ($account->accountType->slug == 'citizen')
            <livewire:admin.components.citizen-applications :account="$account" />
        @endif
    </div>
</div>

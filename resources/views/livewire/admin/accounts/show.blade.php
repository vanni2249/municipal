<div class="space-y-2">
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <!-- Account Information -->
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h2 :value="$account->user_id
                            ? $account->user->name . ' ' . $account->user->lastname
                            : $account->name . ' ' . $account->lastname" />
                        <x-badge :variant="$account->status->statusType->variant" :label="$account->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $account->number }}
                        </li>
                        @if ($account->user_id)
                            <li>|</li>
                            <li>{{ $account->user->number }}</li>
                        @else
                            <li>|</li>
                            <li class="text-red-600 line-clamp-1">Esta cuenta no está asociada a un usuario</li>
                        @endif
                    </ul>
                </x-card-header>

            </x-card>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- Account detail -->
            <livewire:admin.components.account-detail :account="$account" />

            <!-- Account status -->

            @if ($account->user)
                <!-- User Detail -->
                <livewire:admin.components.user-detail :user="$account->user" />
                    
                <!-- User status -->

            @endif
            
        </div>
        <div class="col-span-full lg:col-span-7 space-y-4">
            <!-- Citizen Applications -->
            @if ($account->accountType->slug == 'citizen')
            <livewire:admin.components.citizen-applications :account="$account" />
            
            @endif
            
            <!-- Merchant Businesses -->
            @if ($account->accountType->slug == 'merchant')
                <!-- Account Businesses -->
                <livewire:admin.components.merchant-businesses :businesses="$account->businesses" />
                
            @endif
            <!-- Accountant merge -->
            @if ($account->accountType->slug == 'accountant')
                <livewire:admin.components.accountant-merges :account="$account" />
            @endif
        </div>
    </div>
</div>

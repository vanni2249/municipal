<div class="space-y-4">
    <header class="px-2 flex justify-between items-center mb-8">
        <div>
            <x-h1 value="Mis cuentas" />
            <p class="text-sm text-gray-700">
                Gestiona y navega entre las cuentas asociadas a tu usuario.
            </p>
        </div>
        {{-- <div class="flex">
            <x-icon-button icon="ellipsis-vertical" variant="light" />
        </div> --}}
    </header>
    <x-card>
        <x-card-header>
            <p class="text-sm">
                <strong class="text-lg">
                    Cuentas asociadas a tu usuario.
                </strong>
                <br>
                <span class="text-gray-700">
                    Selecciona una cuenta para navegar a su panel administrativo.
                </span>
            </p>
        </x-card-header>

        <!-- Citizen account -->
        <x-card-elements-group>
            @if ($account_citizen)
                <x-card-element class="flex justify-between items-center">
                    <div>
                        <strong class="text-sm">{{ $account_citizen->accountType->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $account_citizen->number }}</span>
                    </div>
                    <x-icon-link href="{{ route('citizens.set-session', ['account' => $account_citizen->ulid]) }}" icon="arrow-right" variant="light"
                        size="xs" wire:navigate />
                </x-card-element>
            @endif

            <!-- Merchant account -->
            @if ($account_merchant)
                <x-card-element class="">
                    <div class="flex justify-between items-center">
                        <div>
                            <strong class="text-sm">{{ $account_merchant->accountType->name }}</strong>
                            <br>
                            <span class="text-gray-700 text-sm">{{ $account_merchant->number }}</span>
                        </div>
                        <x-icon-link
                            href="{{ route('users.accounts.businesses.index', ['account' => $account_merchant->ulid]) }}"
                            icon="arrow-right" variant="light" size="xs" wire:navigate />
                    </div>

                    <!-- Merchant businesses -->
                    {{-- <div class="space-y-2">

                        @foreach ($account_merchant->businesses as $business)
                            <x-card-element class="bg-gray-200 flex justify-between items-center">
                                <div>
                                    <strong>
                                        {{ $business->name }}
                                    </strong>
                                    <br>
                                    <span class="text-sm">
                                        {{ $business->number }}
                                    </span>
                                </div>
                                <div class="flex">
                                    <x-icon-link href="{{ route('businesses.set-session', ['business' => $business->ulid]) }}" icon="arrow-right"
                                        variant="light-outline" size="xs" wire:navigate />
                                </div>
                            </x-card-element>
                        @endforeach
                    </div> --}}
                </x-card-element>
            @endif

            <!-- Accountant account -->
            @if ($account_accountant)
                <x-card-element class="flex justify-between items-center">
                    <div>
                        <strong class="text-sm">{{ $account_accountant->accountType->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $account_accountant->number }}</span>
                    </div>
                    <x-icon-link
                        href="{{ route('users.accounts.merges.index', ['account' => $account_accountant->ulid]) }}"
                        icon="arrow-right" variant="light" size="xs" wire:navigate />
                </x-card-element>
            @endif
        </x-card-elements-group>
    </x-card>
</div>

<div class="space-y-4">
    <x-card>
        <header class="flex justify-between space-x-2 items-start">
            <div class="flex-1">
                <x-h2 value="Cuenta de comerciante" />
                <p class="text-sm text-gray-800">
                    Gestión de sus comercios asociados a la cuenta de comerciante.
                </p>
            </div>
            <div class="flex">
                <x-link-button href="{{ route('users.accounts.index') }}" variant="primary" class="flex md:space-x-2 items-center">
                    <x-icon icon="home" class="" width="20" height="20" />
                    <span class="hidden md:block">
                        Mis cuentas
                    </span>
                </x-link-button>
            </div>
        </header>
    </x-card>

    @livewire('users.accounts.businesses.components.businesses-list', ['account' => $account])

</div>

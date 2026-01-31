<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-center">
            <div>
                <x-h2 value="Mis cuentas" />
                <p class="text-sm text-gray-700">
                    Gestiona y navega entre las cuentas asociadas a tu usuario.
                </p>
            </div>
        </header>
    </x-card>
    <!-- Accounts -->
    @livewire('users.accounts.components.account-list')

<div>
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h3 value="Detalle de la cuenta" />
        </x-card-header>
        <x-card-body-grids>
            <!-- Number -->
            <x-card-body-grid label="Número" value="{{ $account->number ?? 'N/A' }}" class="col-span-6" />

            <!-- Account Type -->
            <x-card-body-grid label="Tipo de cuenta" value="{{ $account->accountType->name ?? 'N/A' }}"
                class="col-span-6" />
            <!-- Full Name -->
            <x-card-body-grid label="Nombre completo"
                value="{{ $account->user_id ? $account->user->name . ' ' . $account->user->lastname : $account->name . ' ' . $account->lastname }}"
                class="col-span-full" />

            <!-- Email -->
            <x-card-body-grid label="Email" value="{{ $account->user_id ? $account->user->email : $account->email }}"
                class="col-span-full md:col-span-6" />

            <!-- Phone -->
            <x-card-body-grid label="Teléfono"
                value="{{ $account->user_id ? $account->user->phone ?? '...' : $account->phone ?? '...' }}"
                class="col-span-full md:col-span-6" />

            <!-- Created At -->
            <x-card-body-grid label="Fecha de creación" class="col-span-full">
                <x-date-format date="{{ $account->created_at }}" format="d/m/Y h:i a" />
            </x-card-body-grid>
        </x-card-body-grids>
    </x-card>
</div>

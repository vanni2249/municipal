<div class="space-y-4">
    <x-card>
        <div class="md:flex md:justify-between space-y-4 md:space-y-0 md:items-start">
            <div>
                <x-h2 value="Bienvenido, {{ auth()->user()->name }}!" />
                  <span class="text-sm text-gray-800">{{ $account->accountType->name }} | {{ $account->number }}</span>      
            </div>
            <div>
                <x-link-button href="{{ route('users.accounts.index') }}"  icon="cog" variant="light" size="sm" label="Cambiar cuenta" />
            </div>
        </div>
    </x-card>

    <x-card>
        {{ session('account_type') }} - {{ session('account_ulid') }}
    </x-card>
</div>

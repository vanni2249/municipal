<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div class="flex-1">
                <x-h2 value="Cuenta de comerciante" />
                <p class="text-sm text-gray-800">
                    Gestión de sus comercios asociados a la cuenta de comerciante.
                </p>
            </div>
            <div>
                <x-link-button href="{{ route('users.accounts.index') }}" label="Mis cuentas" variant="primary" />

            </div>
        </header>
    </x-card>
    <x-card>
        <x-card-elements-group>
            @foreach ($businesses as $business)
                <x-card-element class="flex justify-between items-center border-l-4 border-gray-400">
                    <div>
                        <strong class="text-sm">{{ $business->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                    </div>
                    <x-icon-link href="{{ route('businesses.set-session', ['business' => $business->ulid]) }}"
                        icon="arrow-right" variant="secondary" size="xs" wire:navigate />
                </x-card-element>
            @endforeach
        </x-card-elements-group>
    </x-card>
</div>

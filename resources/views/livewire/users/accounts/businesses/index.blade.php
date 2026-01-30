<div class="space-y-4">
    <header class="px-2 flex justify-between items-center mb-8">
        <div class="flex items-center space-x-1.5">
            {{-- <div class="flex">
                <x-icon-link href="{{ route('users.accounts.index') }}" icon="arrow-left" variant="light" size="xs"
                    wire:navigate />
            </div> --}}
            <div>
                <x-h1 value="Mis comercios" />
                <p class="text-sm text-gray-800 line-clamp-1">
                    Manejo de sus comercios.
                </p>
            </div>
        </div>
        <div class="flex">
            <x-link-button href="{{ route('users.accounts.index') }}" label="Mis cuentas" variant="light" />
        </div>
    </header>
    <x-card>
        <x-card-header>
            <p class="text-sm">
                <strong>
                    Aquí están los sus comercios asociados a la cuenta de comerciante.
                </strong>
                <br>
                <span class="text-gray-800">
                    Selecciona un comercio para navegar a su panel administrativo.
                </span>
            </p>
        </x-card-header>
        <x-card-elements-group>
            @foreach ($businesses as $business)
                <x-card-element class="flex justify-between items-center">
                    <div>
                        <strong class="text-sm">{{ $business->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                    </div>
                    <x-icon-link href="{{ route('businesses.set-session', ['business' => $business->ulid]) }}" icon="arrow-right" variant="light"
                        size="xs" wire:navigate />
                </x-card-element>
            @endforeach
        </x-card-elements-group>
    </x-card>
</div>

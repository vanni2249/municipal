<div class="space-y-4">
    <x-card>
        <header class="flex justify-between space-x-2 items-start">
            <div class="flex-1">
                <ul class="flex space-x-2 text-xs mb-2">
                    <li class="font-bold">
                        <a href="{{ route('users.accounts.index') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="text-gray-600">Lista de Comercios</li>
                </ul>
                <x-h2 value="Cuenta de comerciante" />
                <p class="text-sm text-gray-700">
                    Gestión de sus comercios asociados a la cuenta de comerciante.
                </p>
            </div>
            <div class="flex">
                {{-- <x-link-button href="{{ route('users.accounts.index') }}" variant="primary-outline"
                    class="flex md:space-x-2 items-center">
                    <x-icon icon="home" class="" width="16" height="16" />
                    <span class="hidden md:block">
                        Mis cuentas
                    </span>
                </x-link-button> --}}
            </div>
        </header>
    </x-card>

    <x-card>
        <x-card-elements-group>
            @foreach ($businesses as $business)
                <a href="{{ route('businesses.set-session', ['business' => $business->ulid]) }}" class="block">
                    <x-card-element class="flex justify-between items-center  hover:bg-gray-200" border="secondary">
                        <div>
                            <strong class="text-sm">{{ $business->name }}</strong>
                            <br>
                            <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                        </div>
                        <div>
                            <x-icon icon="arrow-right" size="5" class="text-gray-400" />
                        </div>
                        {{-- <x-icon-link href=""
                        icon="arrow-right" variant="primary" size="xs" wire:navigate /> --}}
                    </x-card-element>
                </a>
            @endforeach
        </x-card-elements-group>
    </x-card>

</div>

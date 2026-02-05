<div>
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <x-icon icon="user-circle" />
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link href="{{ route('users.profile') }}">
                Mi Perfil
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('users.accounts.index') }}">
                Mis cuentas
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('users.businesses.index') }}">
                Mis comercios
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('logout') }}">
                Salir
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
</div>

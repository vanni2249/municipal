<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Bienvenido, {{ $user->name }}" />
                <ul class="text-sm flex flex-col md:flex-row md:space-x-4 space-y-1 md:space-y-0 text-gray-800 mt-1">
                    <li>{{ $user->number }}</li>
                </ul>
            </div>
            <div class="flex">
                <span class="text-sm text-gray-700">
                    {{ $user->status->statusType->name }}
                </span>
            </div>
        </header>
    </x-card>
    <x-card class="space-y-4">
        <header class="flex flex-row justify-between items-start">
            <div>
                <x-h3 value="Info del usuario" />
                <p class="text-sm text-gray-700">
                    Última actualización: {{ $user->updated_at->diffForHumans() }}
                </p>
            </div>
            <div></div>
        </header>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <li>
                <x-app-element-label label="Nombre" />
                <x-app-element-value value="{{ $user->name }}" />
            </li>
            <li>
                <x-app-element-label label="Apellido" />
                <x-app-element-value value="{{ $user->lastname }}" />
            </li>
            <li>
                <x-app-element-label label="Correo electrónico" />
                <x-app-element-value value="{{ $user->email }}" />
            </li>
            <li>
                <x-app-element-label label="Número de teléfono" />
                <x-app-element-value value="{{ $user->phone??'...' }}" />
            </li>
            <li>
                <x-app-element-label label="Número de usuario" />
                <x-app-element-value value="{{ $user->number??'...' }}" />
            </li>
            <li>
                <x-app-element-label label="Fecha de nacimiento" />
                <x-app-element-value>
                    <x-date-format date="{{ $user->date_birth }}" format="d/m/Y" />
                </x-app-element-value>
            </li>
        </ul>
    </x-card>
</div>

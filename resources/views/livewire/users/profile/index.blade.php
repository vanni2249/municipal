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
                <x-badge variant="{{ $user->status->statusType->variant }}" label="{{ $user->status->statusType->name }}"
                    class="px-3 py-1" />
            </div>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full md:col-span-5">
            <!-- Información del usuario -->
            <x-card class="space-y-4">
                <header class="flex flex-row justify-between items-start">
                    <div>
                        <x-h3 value="Info del usuario" />
                        <p class="text-sm text-gray-700">
                            Última actualización: {{ $user->updated_at->diffForHumans() }}
                        </p>
                    </div>
                    <div>
                        <x-button :label="'Editar'" size="sm" variant="primary" />
                    </div>
                </header>
                <x-card-body-grids>
                    <x-card-body-grid class="col-span-full lg:col-span-6" label="Nombre" value="{{ $user->name }}" />
                    <x-card-body-grid class="col-span-full lg:col-span-6" label="Apellido"
                        value="{{ $user->lastname }}" />
                </x-card-body-grids>

                {{-- Responsive when mobile closes md: open  --}}
                <div x-data="{ open: true }" x-init="open = window.innerWidth >= 768;
                window.addEventListener('resize', () => { if (window.innerWidth >= 768) open = true })
                window.addEventListener('resize', () => { if (window.innerWidth < 768) open = false })">
                    <div x-show="open" x-collapse class="mt-2 space-y-2">
                        <x-card-body-grids>
                            <x-card-body-grid class="col-span-12" label="Correo electrónico"
                                value="{{ $user->email }}" />
                            <x-card-body-grid class="col-span-12" label="Número de teléfono"
                                value="{{ $user->phone ?? '...' }}" />
                            <x-card-body-grid class="col-span-12" label="Número de usuario"
                                value="{{ $user->number ?? '...' }}" />
                            <x-card-body-grid class="col-span-6" label="Fecha de nacimiento">
                                <x-date-format date="{{ $user->date_birth }}" format="d/m/Y" />
                            </x-card-body-grid>
                        </x-card-body-grids>
                    </div>
                    <div class="flex md:hidden justify-center mt-2">
                        <button @click="open = !open" class="text-sm text-gray-600 hover:underline cursor-pointer">
                            <span x-show="!open">Ver más</span>
                            <span x-show="open">Ver menos</span>
                        </button>
                    </div>
                </div>
            </x-card>
            
        </div>
        <div class="col-span-full md:col-span-7 space-y-2">
            <!-- Contraseña -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Cambiar contraseña" />     
                    <x-button :label="'Cambiar'" size="sm" variant="primary" />
                </x-card-header>
                <p class="text-sm text-gray-700">
                    Aquí puedes cambiar tu contraseña. Asegúrate de elegir una contraseña segura que contenga una combinación de letras mayúsculas, minúsculas, números y caracteres especiales para proteger tu cuenta.
                </p>
            </x-card>
            <!-- Idioma por defecto -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Idioma por defecto" />   
                    <x-button :label="'Configurar'" size="sm" variant="primary" />
                </x-card-header>
                <p class="text-sm text-gray-700">
                    Aquí puedes configurar tu idioma por defecto. Esto es útil para personalizar tu experiencia en la plataforma y asegurarte de que todas las interfaces y comunicaciones se muestren en el idioma que prefieras.   
                </p>
                <x-card-body-grids>
                    <x-card-body-grid class="col-span-6" label="Idioma actual por defecto">
                        <div class="flex items-center space-x-2">
                            <span>{{ $user->default_language ?? '...' }}</span>
                        </div>
                    </x-card-body-grid>
                </x-card-body-grids>
            </x-card>
            <!-- Cuenta por defecto -->
            <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h3 value="Cuenta por defecto" />   
                    <x-button :label="'Configurar'" size="sm" variant="primary" />
                </x-card-header>
                <p class="text-sm text-gray-700">
                    Aquí puedes configurar tu cuenta por defecto. Esto es útil si tienes varias cuentas asociadas a tu perfil y deseas establecer una como predeterminada para facilitar el acceso y la gestión de tus transacciones.   
                </p>
                <x-card-body-grids>
                    <x-card-body-grid class="col-span-6" label="Cuenta actual por defecto">
                        <div class="flex items-center space-x-2">
                            <span>{{ $user->default_account ?? '...' }}</span>
                        </div>
                    </x-card-body-grid>
                </x-card-body-grids>
            </x-card>
        </div>
    </div>
</div>
`
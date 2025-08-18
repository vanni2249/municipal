<div>
    <x-card>
        <header class="flex items-center justify-between mb-4">
            <h1 class="text-lg font-bold text-gray-900">Editar Usuario</h1>
        </header>
        <form wire:submit.prevent="save">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-full lg:col-span-2">
                    <h2 class="text-lg font-bold text-gray-900">Información de usuario</h2>
                    <p class="text-sm text-gray-600">
                        Aquí puedes editar la información del usuario seleccionado. Asegúrate de que todos los campos
                        sean correctos antes de guardar los cambios.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-2">
                    <div class="col-span-2 lg:col-span-1">
                        <x-label for="name" value="Nombre" />
                        <x-input id="name" type="text" class="w-full" wire:model="name" disabled />
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                        <x-label for="lastname" value="Apellidos" />
                        <x-input id="lastname" type="text" class="w-full" wire:model="lastname" disabled />
                    </div>
                    <div class="col-span-2 lg:col-span-2">
                        <x-label for="email" value="Correo electrónico" />
                        <x-input id="email" type="text" class="w-full" wire:model="email" disabled />
                    </div>
                </div>
                <div class="col-span-full py-4"></div>
                <div class="col-span-full lg:col-span-2">
                    <h2 class="text-lg font-bold text-gray-900">Bloqueo de usuario</h2>
                    <p class="text-sm text-gray-600">
                        Si deseas bloquear al usuario, puedes hacerlo aquí. Un usuario bloqueado no podrá iniciar sesión
                        ni acceder a ninguna funcionalidad del sistema.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
                    <div class="col-span-2 lg:col-span-1">
                        <div class="border border-gray-300 flex items-center space-x-4 p-2 rounded">
                            <x-checkbox id="blocked" wire:model.live="blocked" />
                            <span class="text-gray-800">Bloquear</span>
                        </div>
                    </div>
                    @if ($blocked)
                        <div class="col-span-2">
                            <x-label for="blocked_reason" value="Razón de bloqueo" />
                            <x-textarea id="blocked_reason" wire:model="blocked_reason" class="w-full" />
                            @error('blocked_reason')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                    @endif

                </div>
                <div class="col-span-full py-4"></div>
                <div class="col-span-full lg:col-span-2">
                    <h2 class="text-lg font-bold text-gray-900">Aprobar el usuario</h2>
                    <p class="text-sm text-gray-600">
                        Si deseas aprobar al usuario, puedes hacerlo aquí. Un usuario aprobado podrá iniciar sesión y
                        acceder a las funcionalidades del sistema.
                    </p>
                </div>
                <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
                    <div class="col-span-2 lg:col-span-1">
                        <div class="border border-gray-300 flex items-center space-x-4 p-2 rounded">
                            <x-checkbox id="approved" wire:model.live="approved" />
                            <span class="text-gray-800">{{ $approved_status_words }}</span>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <x-button type="submit" class="w-full md:w-auto">
                            {{ __('Guardar Cambios') }}
                        </x-button>
                    </div>

                    @foreach ($errors->all() as $error)
                        <div class="col-span-full">
                            <x-error message="{{ $error }}" />
                        </div>
                    @endforeach

                </div>
            </div>
        </form>
    </x-card>
</div>

<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Información del empleado</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuación para crear un nuevo empleado. El nombre y apellido no son editable
                una vez creado el empleado.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Nombre e inicial" />
                <x-input wire:model.lazy="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre" disabled="{{ $form->employee }}" />
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Apellidos" />
                <x-input wire:model.lazy="form.lastname" id="lastname" name="lastname" type="text" class="w-full"
                    placeholder="Apellido" disabled="{{ $form->employee }}" />
                @error('form.lastname')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1">
                <x-label value="Fecha de Nacimiento" />
                <x-input wire:model.defer="form.date_of_birth" id="date_of_birth" name="date_of_birth" type="date"
                    class="w-full" />
                @error('form.date_of_birth')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Email" />
                <x-input wire:model.defer="form.email" id="email" name="email" type="email" class="w-full"
                    placeholder="Email" />
                @error('form.email')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Teléfono" />
                <x-input wire:model.defer="form.phone" id="phone" name="phone" type="text" class="w-full"
                    placeholder="Teléfono" />
                @error('form.phone')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full pt-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Información de usuario</h2>
            <p class="text-sm text-gray-500 mt-2">
                El campo se llenara automáticamente con la información del empleado.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Nombre de usuario" />
                <x-input wire:model.defer="form.username" id="username" name="username" type="text" disabled
                    class="w-full" placeholder="Nombre de usuario" />
                @error('form.username')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            @if (!$form->employee)
                <div class="col-span-full flex">
                    <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
                </div>
            @endif
        </div>
        @if ($form->employee)
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
                        <x-checkbox id="blocked" wire:model.live="form.blocked" />
                        <span class="text-gray-800">Bloquear</span>
                    </div>
                </div>
                @if ($form->blocked)
                    <div class="col-span-2">
                        <x-label for="blocked_reason" value="Razón de bloqueo" />
                        <x-textarea id="blocked_reason" wire:model="form.blocked_reason" class="w-full" />
                        @error('form.blocked_reason')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                @endif

                <div class="col-span-full flex">
                    <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
                </div>
            </div>
        @endif
    </div>
</form>

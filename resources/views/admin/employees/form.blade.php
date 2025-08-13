<form wire:submit.prevent="save">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion del empleado</h2>
            <p class="text-sm text-gray-500 mt-2">
                Completa los campos a continuacion para crear un nuevo empleado. El nombre y apellido no son editables una vez creado el empleado.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Nombre e inicial" />
                <x-input wire:model.lazy="form.name" id="name" name="name" type="text" class="w-full"
                    placeholder="Nombre"  disabled="{{ $form->employee }}"/>
                @error('form.name')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full lg:col-span-1 lg:col-start-2">
                <x-label value="Apellidos" />
                <x-input wire:model.lazy="form.lastname" id="lastname" name="lastname" type="text" class="w-full"
                    placeholder="Apellido" disabled="{{ $form->employee }}"/>
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
                <x-label value="Telefono" />
                <x-input wire:model.defer="form.phone" id="phone" name="phone" type="text" class="w-full"
                    placeholder="Telefono" />
                @error('form.phone')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-full pt-4"></div>
        <div class="col-span-full lg:col-span-2">
            <h2 class="font-bold text-gray-600">Informacion de usuario</h2>
            <p class="text-sm text-gray-500 mt-2">
                El campo se llenara automaticamente con la informacion del empleado.
            </p>
        </div>
        <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">
            <div class="col-span-full lg:col-span-1 lg:col-start-1">
                <x-label value="Nombre de usuario" />
                <x-input wire:model.defer="form.username" id="username" name="username" type="text" disabled class="w-full"
                    placeholder="Nombre de usuario" />
                @error('form.username')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="col-span-full flex">
                <x-button type="submit" class="w-full md:w-auto">Enviar</x-button>
            </div>
        </div>
    </div>
</form>

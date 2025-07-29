<form wire:submit.prevent="save">
    <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
            <x-label for="name" value="Nombre" />
            <x-input id="name" type="text" wire:model.defer="form.name"
            @class(['w-full', 'border-red-500' => $errors->has('form.name')])
            />
        </div>
        <div class="col-span-2">
            <x-label for="email" value="Email" />
            <x-input id="email" type="email" wire:model.defer="form.email"
            @class(['w-full', 'border-red-500' => $errors->has('form.email')])
            />
        </div>
        <div class="col-span-2">
            <x-label for="phone" value="Telefono" />
            <x-input id="phone" type="text" wire:model.defer="form.phone"
            @class(['w-full', 'border-red-500' => $errors->has('form.phone')])
            />
        </div>
        <div class="col-span-2">
            <x-label for="address" value="Direccion" />
            <x-input id="address" type="text" wire:model.defer="form.address"
            @class(['w-full', 'border-red-500' => $errors->has('form.address')])
            />
        </div>
        <div class="col-span-1">
            <x-label for="city" value="Ciudad" />
            <x-input id="city" type="text" wire:model.defer="form.city"
            @class(['w-full', 'border-red-500' => $errors->has('form.city')])
            />
        </div>
        <div class="col-span-1">
            <x-label for="postal_code" value="Codigo Postal" />
            <x-input id="postal_code" type="text" wire:model.defer="form.postal_code"
            @class(['w-full', 'border-red-500' => $errors->has('form.postal_code')])
            />
        </div>
        <div class="col-span-2">
            <x-label for="birthdate" value="Fecha de Nacimiento" />
            <x-input type="date" wire:model="form.birthdate"
            @class(['w-full', 'border-red-500' => $errors->has('form.birthdate')])
            />
        </div>
    </div>
    <div class="mt-4">
        <x-button type="submit">Guardar</x-button>
    </div>
</form>
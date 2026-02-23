<form wire:submit.prevent="save">
    @csrf
    <x-form-elements>
        <!-- Account Type -->
        <x-form-element class="col-span-full">
            <x-label for="account_type" value="Tipo de cuenta" />
            <x-select id="account_type" @class([
                'w-full',
                'border-red-400' => $errors->has('form.account_type_id'),
            ]) wire:model.defer="form.account_type_id">
                <option value="">Selecciona un tipo de cuenta</option>
                @foreach ($accountTypes as $accountType)
                    <option value="{{ $accountType->id }}">{{ $accountType->name }}</option>
                @endforeach
            </x-select>
            @error('form.account_type_id')
                <x-error message={{ $message }}
            @enderror
        </x-form-element>
        <!-- Name -->
        <x-form-element class="col-span-6">
            <x-label for="name" value="Nombre" />
            <x-input id="name" type="text" @class([
                'w-full',
                'border-red-400' => $errors->has('form.name'),
            ]) wire:model.defer="form.name" />
        </x-form-element>
        <!-- Lastname -->
        <x-form-element class="col-span-6">
            <x-label for="lastname" value="Apellido" />
            <x-input id="lastname" type="text" @class([
                'w-full',
                'border-red-400' => $errors->has('form.lastname'),
            ]) wire:model.defer="form.lastname" />
        </x-form-element>
        <!-- Email -->
        <x-form-element class="col-span-full">
            <x-label for="email" value="Correo electrónico" />
            <x-input id="email" type="email" @class([
                'w-full',
                'border-red-400' => $errors->has('form.email'),
            ]) wire:model.defer="form.email" />
        </x-form-element>
        <!-- Phone -->
        <x-form-element class="col-span-full lg:col-span-6">
            <x-label for="phone" value="Teléfono" />
            <x-input id="phone" type="text" @class([
                'w-full',
                'border-red-400' => $errors->has('form.phone'),
            ]) wire:model.defer="form.phone" />
        </x-form-element>

        <!-- Button -->
        <x-form-element class="col-span-full">
            <x-button type="submit" label="Guardar" />
        </x-form-element>
    </x-form-elements>
</form>

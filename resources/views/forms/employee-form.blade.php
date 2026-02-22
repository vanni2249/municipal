<form wire:submit.prevent="save">
    @csrf
    <x-form-elements>
        <!-- Name -->
        <x-form-element class="col-span-6">
            <x-label for="name" value="Nombre" />
            <x-input id="name" type="text" @class(['w-full', 'border-red-500' => $errors->has('form.name')]) wire:model.defer="form.name" />
            @error('form.name')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>

        <!-- Last Name -->
        <x-form-element class="col-span-6">
            <x-label for="last_name" value="Apellido" />
            <x-input id="last_name" type="text" @class(['w-full', 'border-red-500' => $errors->has('form.last_name')]) wire:model.defer="form.last_name" />
            @error('form.last_name')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>
        
        <!-- Birth Date -->
        <x-form-element class="col-span-6">
            <x-label for="birth_date" value="Fecha de Nacimiento" />
            <x-input id="birth_date" type="date" @class(['w-full', 'border-red-500' => $errors->has('form.birth_date')]) wire:model.defer="form.birth_date" />
            @error('form.birth_date')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>

        <!-- Gender -->
        <x-form-element class="col-span-6">
            <x-label for="gender" value="Género" />
            <x-select id="gender" @class(['w-full', 'border-red-500' => $errors->has('form.gender')]) wire:model.defer="form.gender">
                <option value="">Seleccione un género</option>
                <option value="male">Masculino</option>
                <option value="female">Femenino</option>
                <option value="other">Otro</option>
            </x-select>
            @error('form.gender')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>

        <!-- Email -->
        <x-form-element class="col-span-12">
            <x-label for="email" value="Correo Electrónico" />
            <x-input id="email" type="email" @class(['w-full', 'border-red-500' => $errors->has('form.email')]) wire:model.defer="form.email" />
            @error('form.email')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>

        <!-- Phone -->
        <x-form-element class="col-span-6">
            <x-label for="phone" value="Teléfono" />
            <x-input id="phone" type="text" @class(['w-full', 'border-red-500' => $errors->has('form.phone')]) wire:model.defer="form.phone" />
            @error('form.phone')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>

        <!-- Hire Date -->
        <x-form-element class="col-span-6 col-start-1">
            <x-label for="hired_at" value="Fecha de Contratación" />
            <x-input id="hired_at" type="date" @class(['w-full', 'border-red-500' => $errors->has('form.hired_at')]) wire:model.defer="form.hired_at" />
            @error('form.hired_at')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>

        <!-- Button -->
        <x-form-element class="col-span-12">
            <x-button type="submit" class="mt-4">Guardar</x-button>
        </x-form-element>
    </x-form-elements>
</form>

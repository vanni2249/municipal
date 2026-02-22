<p class="mb-4">
    Cambiar el estado de la cuenta administrativa asociada a este empleado. Esto afectará el acceso del
    administrador a las funciones administrativas. Asegúrese de seleccionar el estado correcto antes de
    guardar los cambios.
</p>

<form wire:submit.prevent="saveEmployeeAdminStatus">
    @csrf
    <x-form-elements>
        <x-form-element class="col-span-6">
            <x-label value="Número de administrador" />
            <x-input value="{{ $employee->admin->number ?? 'N/A' }}" class="w-full" disabled />
        </x-form-element>
        <x-form-element class="col-span-6">
            <x-label value="Nombre de usuario" />
            <x-input value="{{ $employee->admin->username ?? 'N/A' }}" class="w-full" disabled />
        </x-form-element>
        <x-form-element label="Estado" class="col-span-full md:col-span-6 flex items-center space-x-2">
            @foreach ($statusTypes as $statusType)

                <input type="radio" id="status-{{ $statusType->id }}" name="selectedStatusTypeId"
                    value="{{ $statusType->id }}" wire:model="selectedStatusTypeId"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2" />

                <label for="status-{{ $statusType->id }}" class=" cursor-pointer" class="flex">
                    {{$statusType->name}}
                </label>
            @endforeach
            @error('selectedStatusTypeId')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>
        <x-form-element class="col-span-full">
            <x-button type="submit" class="mt-4">Actualizar estado</x-button>
        </x-form-element>
    </x-form-elements>
</form>

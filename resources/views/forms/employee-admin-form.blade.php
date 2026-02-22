 <form wire:submit.prevent="save">
     @csrf
     <x-form-elements>
        <!-- Employee name disabled -->
        <x-form-element class="col-span-full">
            <x-label for="employee_name" value="Nombre del empleado" />
            <x-input id="employee_name" type="text" value="{{ $form->employee->name }} {{ $form->employee->last_name }}" class="w-full" disabled />
        </x-form-element>
         <!-- Select department -->
        <x-form-element class="col-span-full">
            <x-label for="department_id" value="Departamento" />
            <x-select id="department_id" wire:model.live="form.department_id" @class(['w-full'])>
                <option value="">Seleccione un departamento</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </x-select>
            @error('form.department_id')
                <x-error message="{{ $message }}" />
            @enderror
        </x-form-element>
        <!-- Select position if department is selected -->
        @if ($form->department_id)
            <x-form-element class="col-span-full">
                <x-label for="position_id" value="Puesto" />
                <x-select id="position_id" wire:model="form.position_id" @class(['w-full'])>
                    <option value="">Seleccione un puesto</option>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                    @endforeach
                </x-select>
                @error('form.position_id')
                    <x-error message="{{ $message }}" />
                @enderror
            </x-form-element>
        @endif
     </x-form-elements>
     <x-button type="submit" class="mt-4">Crear cuenta administrativa</x-button>
 </form>

<div>
    <x-card>
        <form wire:submit.prevent="store">
            <x-form-elements>

                <!-- Contractor name -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="contractor_name" value="Nombre del Contratista" />
                    <x-input id="contractor_name" type="text" wire:model="contractor_name"
                        @class([
                            'w-full',
                            'border-red-500' => $errors->has('contractor_name'),
                        ]) />
                    @error('contractor_name')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="contractor_license_number" value="Número de Licencia del Contratista" />
                    <x-input id="contractor_license_number" type="text" wire:model="contractor_license_number"
                        @class([
                            'w-full',
                            'border-red-500' => $errors->has('contractor_license_number'),
                        ]) />
                    @error('contractor_license_number')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                <!-- Project description -->
                <x-form-element class="col-span-full lg:col-span-6 lg:col-start-1">
                    <x-label for="project_description" value="Descripción del Proyecto" />
                    <x-textarea id="project_description" wire:model="project_description" @class([
                        'w-full',
                        'border-red-500' => $errors->has('project_description'),
                    ])
                        rows="4" />
                    @error('project_description')
                        <x-error message="{{ $message }}" />
                    @enderror
                </x-form-element>
                <!-- Submit button -->
                <x-form-element class="col-span-full">
                    <x-button type="submit">
                        Enviar Solicitud
                    </x-button>
                </x-form-element>
            </x-form-elements>
        </form>
    </x-card>
</div>

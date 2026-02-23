<div>

    <x-card>
        <x-card-header>
            <x-h2 value="Detalle del usuario" />
        </x-card-header>
        <x-card-body-grids>
            <!-- Full Name -->
            <x-card-body-grid label="Nombre completo" value="{{ $user->name . ' ' . $user->lastname }}"
                class="col-span-full" />
            <!-- Email -->
            <x-card-body-grid label="Email" value="{{ $user->email }}" class="col-span-full md:col-span-6" />
            <!-- Phone -->
            <x-card-body-grid label="Teléfono" value="{{ $user->phone ?? 'N/A' }}" class="col-span-full md:col-span-6" />
            <!-- Mobile -->
            <x-card-body-grid label="Celular" value="{{ $user->phone ?? 'N/A' }}" class="col-span-full md:col-span-6" />
            <!-- Date of Birth -->
            <x-card-body-grid label="Fecha de nacimiento" class="col-span-full md:col-span-6">
                <x-date-format date="{{ $user->date_of_birth }}" format="d/m/Y" />
            </x-card-body-grid>
            <!-- Created At -->
            <x-card-body-grid label="Fecha de creación" class="col-span-full">
                <x-date-format date="{{ $user->created_at }}" format="d/m/Y h:i a" />
            </x-card-body-grid>
        </x-card-body-grids>
    </x-card>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>

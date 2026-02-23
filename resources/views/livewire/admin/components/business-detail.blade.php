<div>
    <x-card>
        <x-card-header>
            <x-h2>
                Información del negocio
            </x-h2>
        </x-card-header>
        <x-card-body-grids>
            <!-- Business Number -->
            <x-card-body-grid label="Número" :value="$business->number" class="col-span-full lg:col-span-6" />
            <!-- Business Name -->
            <x-card-body-grid label="Nombre" :value="$business->name" class="col-span-full lg:col-span-6" />
            <!-- Business Type -->
            <x-card-body-grid label="Tipo" :value="$business->businessType->name" class="col-span-full" />
            <!-- Address -->
            <x-card-body-grid label="Dirección" :value="$business->address->address" class="col-span-full" />
            <!-- Place -->
            <x-card-body-grid label="Lugar" :value="$business->address->place->name" class="col-span-full lg:col-span-6" />
            <!-- Postal Code -->
            <x-card-body-grid label="Código Postal" :value="$business->address->postal_code" class="col-span-full lg:col-span-6" />
        </x-card-body-grids>
    </x-card>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>

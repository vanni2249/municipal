<div class="">
    <x-card class="">
        <x-card-header>
            <x-h2 value="Sesiones" />
        </x-card-header>
        <x-card-elements-group>
            @for ($i = 0; $i < 10; $i++)
                <x-card-element class="flex justify-between items-center">
                    <div>
                        <strong class="text-sm">Sesión reciente</strong>
                        <br>
                        <span class="text-gray-700">2024-01-01 12:00:00</span>
                    </div>
                    <x-badge variant="success" label="Activa" />
                </x-card-element>
            @endfor
            {{-- <x-card-element class="flex justify-between items-center">
                <div>
                    <strong class="text-sm">Sesión anterior</strong>
                    <br>
                    <span class="text-gray-700">2023-12-31 11:00:00</span>
                </div>
                <x-badge variant="warning" label="Inactiva" />
            </x-card-element> --}}
        </x-card-elements-group>
    </x-card>
</div>

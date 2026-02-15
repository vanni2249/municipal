<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Permisos" />
                <span class="text-sm text-gray-700">Gestiona los permisos emitidos por el ciudadano.</span>
            </div>
        </header>
    </x-card>

    <x-card>
        <header>
            <x-h3>
                Permisos emitidos
            </x-h3>
        </header>
        <x-card-elements-group class="grid grid-cols-1 lg:grid-cols-3 gap-2">

            @forelse ($permits as $permit)
                <x-card-element>
                    <div class="flex items-center justify-between">
                        <ul class="space-y-1">
                            <li class="text-xs font-bold uppercase">
                                {{ $permit->number }}

                            </li>
                            <li class="text-sm text-gray-800">
                                {{ $permit->permitType->name }}
                            </li>
                            <li class="flex flex-col">
                                <span class="text-xs text-gray-600">
                                    Emitido el:
                                </span>
                                <span class="text-sm">
                                    <x-date-format date="{{ $permit->period->start_date }}" format="d M Y" />
                                </span>
                            </li>
                            <li class="flex flex-col">
                                <span class="text-xs text-gray-600">
                                    Vence el:
                                </span>
                                <span class="text-sm">
                                    <x-date-format date="{{ $permit->period->end_date }}" format="d M Y" />
                                </span>
                            </li>
                        </ul>
                        <span>

                        </span>
                    </div>

                </x-card-element>
            @empty
                <x-card-element class="col-span-full">
                    <p class="text-gray-600 text-center">No hay permisos emitidos.</p>
                </x-card-element>
            @endforelse
        </x-card-elements-group>
    </x-card>
</div>

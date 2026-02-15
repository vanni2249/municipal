<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Patentes" />
                <span class="text-sm text-gray-700">Gestiona las patentes de su negocio.</span>
            </div>
        </header>
    </x-card>

    <x-card>
        <header>
            <x-h3>
                Patentes emitidas
            </x-h3>
        </header>
        <x-card-elements-group class="grid grid-cols-1 lg:grid-cols-3 gap-2">

            @forelse ($patents as $patent)
                <x-card-element>
                    <div class="flex items-center justify-between">
                        <ul class="space-y-1">
                            <li class="text-xs font-bold uppercase">
                                {{ $patent->number }}

                            </li>
                            <li class="text-sm text-gray-800">
                                {{ $patent->patentType->name }}
                            </li>
                            <li class="flex flex-col">
                                <span class="text-xs text-gray-600">
                                    Emitido el:
                                </span>
                                <span class="text-sm">
                                    <x-date-format date="{{ $patent->period->start_date }}" format="d M Y" />
                                </span>
                            </li>
                            <li class="flex flex-col">
                                <span class="text-xs text-gray-600">
                                    Vence el:
                                </span>
                                <span class="text-sm">
                                    <x-date-format date="{{ $patent->period->end_date }}" format="d M Y" />
                                </span>
                            </li>
                        </ul>
                        <span>

                        </span>
                    </div>

                </x-card-element>
            @empty
                <x-card-element class="col-span-full">
                    <p class="text-gray-600 text-center">No hay patentes emitidas.</p>
                </x-card-element>
            @endforelse
        </x-card-elements-group>
    </x-card>
</div>

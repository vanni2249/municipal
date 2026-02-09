<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Interacciones" />
                <span class="text-sm text-gray-700">Gestiona las interacciones realizadas por el ciudadano.</span>
            </div>
        </header>
    </x-card>
    <x-card>

        <header>
            <x-h3 value="Interacciones recientes" />
            <span class="text-sm text-gray-700">Aquí puedes ver las interacciones más recientes realizadas por el
                ciudadano.</span>
        </header>
        <x-card-elements-group>
            @forelse ($interactions as $interaction)
                <a href="{{ route('citizens.interactions.show', $interaction->ulid) }}" class="block" wire:navigate>
                    <x-card-element class="hover:bg-gray-200" border="{{ $interaction->status->statusType->variant }}">
                        <div class="grid grid-cols-3 gap-4">
                            <ul class="col-span-2 grid grid-cols-1 lg:grid-cols-4 gap-1 ">
                                <li class="text-gray-900 font-bold uppercase text-sm tracking-wide">
                                    {{ $interaction->number }}
                                </li>
                                <li class="lg:col-span-2 text-sm font-bold text-gray-700">
                                    {{ $interaction->interactionable->service->title }}
                                </li>
                                <li class="text-sm text-gray-700">
                                    {{ $interaction->interactionType->name }}
                                </li>
                            </ul>
                            <div class="col-span-1">
                                <div class="grid grid-cols-1 lg:grid-cols-2 h-auto">
                                    <div class="tracking-wide text-right lg:order-last">
                                        <x-badge label="{{ $interaction->status->statusType->name }}"
                                            variant="{{ $interaction->status->statusType->variant }}" />
                                    </div>
                                    <div class="text-sm text-gray-700 text-right lg:text-center">
                                        <x-date-format :date="$interaction->created_at" format="d/M/Y" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-card-element>
                </a>
            @empty
                <x-card-element>
                    <p class="text-gray-600 text-center">No hay interacciones recientes.</p>
                </x-card-element>
            @endforelse

        </x-card-elements-group>
    </x-card>
</div>

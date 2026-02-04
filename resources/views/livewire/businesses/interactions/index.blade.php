<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-center">
            <div>
                <x-h2>Interacciones</x-h2>
                <p class="text-gray-700 text-sm">
                    Aquí puedes ver y gestionar las interacciones relacionadas con este negocio.
                </p>
            </div>
        </header>
    </x-card>
    <x-card>
        <x-card-elements-group>
            @foreach ($interactions as $interaction)
                <a href="{{ route('businesses.interactions.show', $interaction->ulid) }}" wire:navigate>
                    <x-card-element>
                        <div class="flex flex-row flex-wrap md:flex-nowrap text-sm">
                            <div class="basis-1/2 font-bold">
                                {{ $interaction->number }}
                            </div>
                            <div class="basis-1/2 text-right md:text-left text-gray-900">
                                {{ $interaction->interactionType->name }}
                            </div>
                            <div class="basis-1/2 text-gray-700 text-xs md:text-sm capitalize mt-1 md:mt-0">
                                {{ $interaction->interactionable->getTable() }}
                            </div>
                            <div
                                class="basis-1/2 text-right md:text-left text-xs md:text-sm text-gray-700 flex justify-end md:justify-between space-x-2 mt-1 md:mt-0">
                                <span>
                                    <x-date-format date="{{ $interaction->created_at }}" format="M d, Y" />
                                </span>
                                <span>
                                    <x-badge label="{{ $interaction->status->statusType->name }}"
                                        variant="{{ $interaction->status->statusType->variant }}" />
                                </span>

                            </div>
                        </div>
                    </x-card-element>
                </a>
            @endforeach
        </x-card-elements-group>
    </x-card>
</div>

<div>
    <div class="p-4">
        <x-card>
            <header class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Interacciones recientes
                </h2>
                <div class="flex items-center gap-2">
                    <x-icon-link href="{{ route('users.interactions.create', ['type' => 'call']) }}" icon="phone"/>
                    <x-icon-link href="{{ route('users.interactions.create', ['type' => 'message']) }}" icon="message"/>
                </div>
            </header>
            <div class="grid grid-cols-1 gap-2">
                @forelse ($interactions as $interaction)
                    <a href="{{ route('users.interactions.show', $interaction->id) }}">
                        <x-card color="bg-gray-100" class="hover:bg-gray-200">
                            <header class="flex justify-between items-center">
                                <small class="text-gray-600">{{ $interaction->getTypeNameAttribute() }}</small>
                                <x-badge color="{{ $interaction->getStatusColorAttribute() }}">{{ $interaction->getStatusNameAttribute() }}</x-badge>
                            </header>
                            <div class="flex flex-col lg:flex-row w-full justify-between items-start">
                                <ul class="text-sm pt-2">
                                    <li class="text-gray-800 text-md font-bold">{{ $interaction->service->es_name }}</li>
                                    <li class="line-clamp-2 text-sm mb-2 text-gray-700">{{ $interaction->messages->first()->message }}</li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                            <div class="text-xs text-gray-500">
                                {{ $interaction->created_at->diffForHumans() }}
                            </div>
                        </x-card>
                    </a>
                @empty
                    <div class="text-center text-gray-500">
                        No tienes interacciones recientes.
                    </div>
                @endforelse
            </div>
        </x-card>
    </div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>

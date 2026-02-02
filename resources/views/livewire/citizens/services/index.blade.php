<div class="space-y-4">
    <x-card>
        <header>
            <x-h2>Servicios de ciudadano</x-h2>
            <span class="text-sm text-gray-700">
                Explorar y solicitar los servicios disponibles para su negocio.
            </span>
        </header>
    </x-card>
    <x-card>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2 md:gap-4">
            @foreach ($services as $service)
                <a href="{{ route('citizens.services.create', $service->ulid) }}" class="block" wire:navigate>
                    <x-card-element class="flex flex-col hover:bg-gray-200 h-full" border="secondary">
                        <div class="grow">
                            <div>
                                <span class="text-gray-700 text-xs font-bold uppercase">
                                    {{ $service->serviceType->name }}
                                </span>
                                <br>
                                <span class="text-md font-bold text-gray-900 line-clamp-2">{{ $service->title }}</span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-2 grow mb-2">
                                {{ $service->description }}
                            </p>
                        </div>
                        <div class="mt-4 font-bold text-gray-900">
                            <x-money-format :amount="$service->amount" />
                        </div>
                    </x-card-element>
                </a>
            @endforeach
        </div>
    </x-card>
</div>

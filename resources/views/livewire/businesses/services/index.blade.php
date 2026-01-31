<div class="space-y-4">
    <x-card>
        <header>
            <x-h2>Servicios de negocio</x-h2>
            <span class="text-sm text-gray-700">
                Explorar y solicitar los servicios disponibles para su negocio.    
            </span>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-2 md:gap-4">
        @foreach ($services as $service)
            <x-card class="col-span-full md:col-span-6 lg:col-span-3 flex flex-col">
                <div class="grow">
                    <div>
                        <span class="text-gray-700 text-xs font-bold uppercase">
                            {{ $service->serviceType->name }}
                        </span>
                        <br>
                        <span class="text-md font-bold text-gray-900">{{ $service->title }}</span>
                    </div>
                    <p class="text-sm text-gray-600 line-clamp-3 grow mb-2">
                        {{ $service->description }}
                    </p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <div class="text-sm font-bold text-gray-900">
                        <x-money-format :amount="$service->amount" />
                    </div>
                    <div class="flex justify-end">
                        <x-link-button href="{{ route('businesses.services.create', $service->ulid) }}"
                            variant="primary" wire:navigate>Aplicar</x-link-button>
                    </div>
                </div>
            </x-card>
        @endforeach
    </div>
</div>

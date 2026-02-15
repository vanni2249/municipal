<div class="">
    <div class="grid grid-cols-12 gap-2">
        <x-card class="col-span-full">
            <header>
                <x-h1>Servicios de ciudadano</x-h1>
                <span class="text-sm text-gray-700">
                    Explorar y solicitar los servicios disponibles del ciudadano.
                </span>
            </header>
        </x-card>
        @foreach ($services as $service)
            <a href="{{ route('citizens.services.create', $service->ulid) }}"
                class="block bg-white col-span-6 md:col-span-3 p-2 md:p-4 rounded-xl space-x-4">
                <div class=" flex justify-center flex-col">
                    <div class="flex-1 flex flex-col items-center">
                        <div class="">
                            <x-icon icon="{{ $service->icon }}" height="56" width="56"
                                class="text-gray-800 stroke-1" />

                        </div>
                        <div class="text-center">
                            <span class="py-2 text-xs text-gray-700 tracking-wide">
                                {{ $service->serviceType->name }}
                            </span>
                            <p class="text-sm font-bold text-gray-900">
                                {{ $service->title }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

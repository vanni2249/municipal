<div class="">
    <div class="grid grid-cols-12 gap-2">
        <x-card class="col-span-full">
            <header>
                <x-h2>Servicios de negocio</x-h2>
                <span class="text-sm text-gray-700">
                    Explorar y solicitar los servicios disponibles del negocio.
                </span>
            </header>
        </x-card>
        @foreach ($services as $service)
            <a href="{{ route('businesses.services.create', $service->ulid) }}"
                class="block bg-white hover:shadow col-span-6 md:col-span-4 lg:col-span-3 p-2 rounded-xl space-x-4">
                <x-card-service :service="$service" />
            </a>
        @endforeach
    </div>
</div>

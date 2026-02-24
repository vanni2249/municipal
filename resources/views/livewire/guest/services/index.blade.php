<div class="space-y-2">
    <x-card class="border-b-4 border-blue-300 bg=">
        <x-card-header>
            <x-h1>
                Servicios del {{ $type->name }}
            </x-h1>
            <p class="text-sm text-gray-800">
                Aquí puedes encontrar todos los servicios relacionados con {{ $type->name }}.
            </p>
        </x-card-header>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        @foreach ($type->services()->get() as $service)
            <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                class="block bg-white col-span-6 lg:col-span-3 p-2 hover:shadow md:p-4 rounded-xl space-x-4">
                <x-card-service :service="$service" />
            </a>
        @endforeach
    </div>
</div>

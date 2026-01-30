<div class="space-y-4">
    <header class="px-2">
        <x-h1>Business Services</x-h1>
        <p class="text-sm text-gray-700">Manage the business services offered by your business.</p>
    </header>
    <div class="grid grid-cols-12 gap-2 md:gap-4">
        @foreach ($services as $service)
            <x-card class="col-span-full md:col-span-6 lg:col-span-3 flex flex-col">
                <div class="grow">
                    <div>
                        <small class="text-gray-700">
                            {{ $service->serviceType->name }}
                        </small>
                        <br>
                        <strong class="text-md">{{ $service->title }}</strong>
                    </div>
                    <p class="text-sm text-gray-600 line-clamp-2 grow mb-2">
                        {{ $service->description }}
                    </p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <div class="text-sm text-gray-800">
                        <x-money-format :amount="$service->amount" />
                    </div>
                    <div class="flex justify-end">
                        <x-link-button href="{{ route('businesses.services.show', $service->ulid) }}"
                            variant="light">Aplicar</x-link-button>
                    </div>
                </div>
            </x-card>
        @endforeach
    </div>
</div>

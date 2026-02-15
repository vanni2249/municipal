<div class="space-y-2">
    <x-card class="border-b-4 border-blue-300">
        <header class="">
            <h1 class="text-lg font-bold text-gray-900">
                Servicios del {{ $type->name }}
            </h1>
            <p class="text-sm text-gray-800">
                Aquí puedes encontrar todos los servicios relacionados con {{ $type->name }}. Haz clic en cualquier servicio para obtener más detalles y acceder a sus funcionalidades.
            </p>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        @foreach ($type->services()->get() as $service)
            <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                class="block bg-white col-span-6 md:col-span-3 p-2 md:p-4 rounded-xl space-x-4">
                <div class=" flex justify-center flex-col">
                    <div class="flex-1 flex flex-col items-center">
                        <div class="">
                            <x-icon icon="{{ $service->icon }}" height="56" width="56" class="text-gray-800 stroke-1" />

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

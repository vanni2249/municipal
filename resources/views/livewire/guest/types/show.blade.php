<div>
     <section class="max-w-7xl px-4 mx-auto">
        <header class="mb-4 px-2">
            <h1 class="text-2xl font-bold text-gray-800">Servicios al {{ $type->es_name }}</h1>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            @foreach ($type->services as $service)
            <x-card>
                <header class="text-gray-600 font-bold pb-2">
                    {{ $service->es_name }}
                </header>
                <p class="text-gray-500 text-sm">
                    {{ $service->es_description }}
                </p>
            </x-card>
            @endforeach
        </div>
    </section>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>

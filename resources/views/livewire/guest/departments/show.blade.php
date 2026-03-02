<div class="space-y-2">
    <x-card>
        <x-card-header>
            <x-h1 :value="$department->name" />
            <p class="text-sm text-gray-900">
                {{ $department->description }}
            </p>
            <ul class="py-2 text-sm text-gray-600">
                <li>Teléfono: {{ $department->phone }}</li>
                <li>Correo: {{ $department->email }}</li>
            </ul>
            <ul class="text-sm text-gray-800">
                <li>Dirección: {{ $department->address }}</li>
                <li>Villalba PR 00766</li>
            </ul>
        </x-card-header>
    </x-card>

    <x-card>
        <x-card-header>
            <x-h2 value="Más departamentos" />
        </x-card-header>
        <div class="grid grid-cols-12 gap-2">

            @foreach ($departments as $department)
                <a href="{{ route('departments.show', ['department' => $department->slug]) }}"
                    class="block bg-gray-100 hover:shadow col-span-12 md:col-span-6 lg:col-span-3 p-2 md:p-4 rounded-xl space-x-4"
                    wire:navigate>
                    <div class="flex items-start space-x-4">
                        <div class="rounded-full bg-gray-300 p-1.5">
                            <x-icon icon="building" width="24" height="24" class="text-gray-600" />
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">{{ $department->name }}</h3>
                            <p class="text-xs text-gray-500">{{ $department->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </x-card>
</div>

<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Ciudadanos
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.citizens.edit', ['citizen' => $citizen]) }}" icon="edit" />
                </div>
            </div>
        </header>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($items as $item)
                <ul class="">
                    <li class="text-xs font-bold text-gray-800">{{ $item['label'] }}</li>
                    <li class="text-sm text-gray-600">{{ $item['value'] }}</li>
                </ul>
            @endforeach
        </div>
    </x-card>
</div>

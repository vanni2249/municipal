<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4">
                <h2 class="text-lg font-bold text-gray-900">
                    {{ $citizen->name }} {{ $citizen->lastname }}
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-button @click="$dispatch('open-modal', 'more-detail')" icon="eye" />
                    <x-icon-link href="{{ route('admin.citizens.edit', ['citizen' => $citizen]) }}" icon="edit" />
                </div>
            </div>
            <x-modal name="more-detail" title="Detalles adicionales del ciudadano">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach ($items as $item)
                        <x-detail-item-modal label="{{ $item['label'] }}" value="{{ $item['value'] }}" />
                    @endforeach
                </div>
            </x-modal>
        </header>
        <ul class="flex flex-wrap items-center space-x-2 text-sm text-gray-700">
            <li>{{ $citizen->type->es_name }}</li>
            <li>|</li>
            <li class="capitalize">{{ $citizen->created_by }}</li>
            <li>|</li>
            <li>{{ $citizen->phone }}</li>
            <li>|</li>
            <li>{{ $citizen->place->name }}</li>
        </ul>
    </x-card>
</div>

<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4">
                <h2 class="text-lg font-bold text-gray-900">
                    {{ $citizen->name }} {{ $citizen->lastname }}
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-button @click="$dispatch('open-modal', 'more-detail')" icon="eye" />
                    @if ($citizen->created_by === 'admin')
                        <x-icon-link href="{{ route('admin.citizens.edit', ['citizen' => $citizen]) }}" icon="edit" />
                    @endif
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
        <div class="flex flex-row gap-2">
            <x-badge value="{{ $citizen->type->es_name }}" />
            <x-badge value="{{ $citizen->createdBy() }}" />
        </div>
    </x-card>
</div>

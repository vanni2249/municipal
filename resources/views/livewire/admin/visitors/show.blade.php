<div>
    <x-card>
        <header class="mb-4">
            <div class="flex flex-row justify-between items-center space-x-4">
                <h2 class="text-lg font-bold text-gray-900">
                    {{ $visitor->name . ' ' . $visitor->lastname }}
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-button @click="$dispatch('open-modal', 'more-info')" icon="eye"/>
                    <x-icon-link href="{{ route('admin.visitors.edit', ['visitor' => $visitor]) }}" icon="edit" />
                </div>
            </div>
            <!-- More info modal -->
            <x-modal name="more-info" title="Información detallada del visitante">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($items as $item)
                        <x-detail-item-modal label="{{ $item['label'] }}" value="{{ $item['value'] }}" />
                    @endforeach
                </div>
            </x-modal>
        </header>
        <div class="flex flex-row gap-2">
            <x-badge value="{{ $visitor->code }}" />
            <x-badge value="{{ $visitor->type->es_name }}" />
            <x-badge value="{{ $visitor->createdBy() }}" />
        </div>
    </x-card>
</div>

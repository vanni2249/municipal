<div>
    <div class="p-4">
        <x-card>
            <header class="flex flex-row justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Negocio
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-button @click="$dispatch('open-modal', 'more-detail-modal')" icon="eye" />
                    <x-modal name="more-detail-modal" title="Detalle de negocio">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($items as $item)
                                <x-detail-item-modal label="{{ $item['label'] }}" value="{{ $item['value'] }}" />
                            @endforeach
                        </div>
                    </x-modal>
                    <x-icon-link href="{{ route('users.businesses.edit', ['business' => $business]) }}" />
                </div>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach ($items->take(4) as $item)
                    <x-detail-item label="{{ $item['label'] }}" value="{{ $item['value'] }}" />
                @endforeach
            </div>
        </x-card>
    </div>
</div>

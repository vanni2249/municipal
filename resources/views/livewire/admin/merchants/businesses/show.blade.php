<div>
    <x-card>
        <header class="flex flex-row justify-between items-center mb-4">
            <h2 class="text-lg font-bold text-gray-900">
                {{ $business->name }}
            </h2>
            <div class="flex gap-2">
                <x-icon-button @click="$dispatch('open-modal', 'more-info')" icon="eye" />
                <x-icon-link
                    href="{{ route('admin.merchants.businesses.edit', ['merchant' => $business->register_id, 'business' => $business->id]) }}"
                    icon="edit" />
            </div>
        </header>
        <div class="flex flex-wrap gap-2">
            <x-badge value="{{ $business->code }}" />
            <x-badge value="{{ $business->businessType->es_name }}" />
            <x-badge value="{{ $business->businessCategory->es_name }}" />
        </div>
        <x-modal name="more-info" title="Mas información del negocio">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($items as $item)
                    <x-detail-item-modal label="{!! $item['label'] !!}" value="{!! $item['value'] !!}" />
                @endforeach
            </div>
        </x-modal>
    </x-card>
</div>

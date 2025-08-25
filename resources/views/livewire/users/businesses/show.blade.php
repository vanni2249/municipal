<div>
    <div class="p-4">
        <x-card>
            <header class="flex flex-row justify-between items-center">
                <h2 class="text-lg font-bold text-gray-900">
                    {{ $business->name ?? '...' }}
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
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-icon-button icon="ellipsis-vertical" />
                            </x-slot>
                            <x-slot name="content">
                                @forelse ($services as $service)
                                        <x-dropdown-link href="{{ route('users.businesses.actions.create', ['business' => $business->id ,'service' => $service->id]) }}">
                                            {{ $service->es_name }}
                                        </x-dropdown-link>
                                @empty
                                    
                                @endforelse
                                
                            </x-slot>
                        </x-dropdown>
                </div>
            </header>
            <div class="pt-2 flex flex-wrap gap-2">
                <x-badge value="{{ $business->businessType->es_name }}"/>
                <x-badge value="{{ $business->businessCategory->es_name ?? '...' }}"/>
                <x-badge value="{{ $business->place->name ?? '...' }}"/>
            </div>
        </x-card>
    </div>
</div>

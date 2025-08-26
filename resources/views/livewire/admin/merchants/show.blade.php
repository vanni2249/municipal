<div>
    <div class="space-y-4">

        <x-card>
            <header class="mb-4">
                <div class="flex flex-row justify-between items-center space-x-4">
                    <h2 class="text-lg font-bold text-gray-900 whitespace-nowrap">
                        {{ $merchant->name }} {{ $merchant->lastname }}
                    </h2>
                    <div class="flex items-center space-x-2">
                        <x-icon-button @click="$dispatch('open-modal', 'more-info')" icon="eye" />
                        <x-icon-link href="{{ route('admin.merchants.edit', ['merchant' => $merchant]) }}"
                            icon="edit" />
                    </div>
                </div>
            </header>
            <x-modal name="more-info" title="Detalles adicionales del comerciante">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach ($items as $item)
                        <x-detail-item-modal label="{!! $item['label'] !!}" value="{!! $item['value'] !!}" />
                    @endforeach
                </div>
            </x-modal>
            <div class="flex flex-wrap gap-2">
                <x-badge value="{{ $merchant->code }}" />
                <x-badge value="{{ $merchant->type->es_name }}" />
                <x-badge value="{{ $merchant->createdBy() }}" />
                @if ($merchant->user_id)
                    <x-badge color="green" value="Tiene usuario" />
                @endif
            </div>
        </x-card>
        <x-card>
            <header class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Negocios
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.merchants.businesses.create', ['merchant' => $merchant->id]) }}"
                        icon="plus" />
                </div>
            </header>
            <x-table>
                <x-slot name="head">
                    <tr>
                        <th class="p-4">Nombre</th>
                        <th class="p-4">Tipo</th>
                        <th class="p-4">Categoría</th>
                        <th class="p-4 whitespace-nowrap">Lugar</th>
                        <th class="p-4 text-right w-14">Acción</th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @forelse ($merchant->businesses as $business)
                        <tr class="border-t border-gray-200">
                            <td class="p-4">
                                <span>{{ $business->code }}</span>
                                <br>
                                <span class="text-sm text-gray-600">{{ $business->name }}</span>
                            </td>
                            <td class="p-4">
                                <span class="text-sm text-gray-600">{{ $business->businessType->es_name }}</span>
                            </td>
                            <td class="p-4">{{ $business->businessCategory->es_name }}</td>
                            <td class="p-4">{{ $business->place->name }}</td>
                            <td class="p-4 text-right flex space-x-2 justify-end">
                                <x-icon-link
                                    href="{{ route('admin.merchants.businesses.show', ['merchant' => $merchant->id, 'business' => $business->id]) }}"
                                    icon="eye" />
                                <x-icon-link
                                    href="{{ route('admin.merchants.businesses.edit', ['merchant' => $merchant->id, 'business' => $business->id]) }}"
                                    icon="edit" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">No hay negocios disponibles.</td>
                        </tr>
                    @endforelse
                </x-slot>
            </x-table>
        </x-card>
    </div>
</div>

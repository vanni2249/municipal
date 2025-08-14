<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Comerciante -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comerciante
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-icon-button icon="eye" @click="$dispatch('open-modal', 'more-detail')" />
                            <x-icon-link href="{{ route('users.merchants.edit', ['merchant' => $merchant->id]) }}" />
                        </div>
                        <x-modal name="more-detail" title="Detalles del Comerciante">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach ($this->items() as $item)
                                    <x-detail-item-modal :label="$item['label']" :value="$item['value']" />
                                @endforeach
                            </div>
                        </x-modal>
                    </header>
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                            @foreach ($items->take(4) as $item)
                                <x-detail-item label="{{ $item['label'] }}" :value="$item['value']" />
                            @endforeach
                        </div>
                    </div>
                </x-card>
                <!-- Business -->
                <x-card class="rounded-xl">
                    <header
                        class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Negocios del Comerciante
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-icon-link
                                href="{{ route('users.merchants.businesses.create', ['merchant' => $merchant->id]) }}"
                                icon="plus" />
                        </div>
                    </header>
                    <x-table>
                        <x-slot name="head">
                            <tr>
                                <th class="p-4">Nombre</th>
                                <th class="p-4">Tipo de comercio</th>
                                <th class="p-4">Categoria</th>
                                <th class="p-4">Telefono</th>
                                <th class="p-4">Dirreccion</th>
                                <th class="p-4">Patente</th>
                                <th class="p-4 w-14 text-right">Accion</th>
                            </tr>
                        </x-slot>
                        <x-slot name="body">
                            @forelse ($businesses as $business)
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4">
                                        {{ $business->name }}
                                    </td>
                                    <td class="p-4">...</td>
                                    <td class="p-4">
                                        {{ $business->businessCategory->es_name ?? '...' }}
                                    </td>
                                    <td class="p-4">
                                        ...
                                    </td>
                                    <td class="p-4">...</td>
                                    <td class="p-4">...</td>
                                    <td class="p-2 flex justify-end space-x-2">
                                        <x-icon-link
                                            href="{{ route('users.merchants.businesses.show', ['merchant' => $business->register_id, 'business' => $business->id]) }}"
                                            icon="eye" />
                                    </td>

                                </tr>

                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p-4 text-gray-500">
                                        No hay negocios registrados para este comerciante.
                                    </td>
                                </tr>
                            @endforelse
                        </x-slot>
                    </x-table>
                </x-card>
            </div>
        </div>
    </div>
</div>

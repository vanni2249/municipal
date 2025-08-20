<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Comerciante -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-1">
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ $merchant->name }} {{ $merchant->lastname }}
                            </h2>
                            <span class="text-sm text-gray-800">{{ $merchant->code }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <x-icon-button icon="eye" @click="$dispatch('open-modal', 'more-detail')" />
                            <x-icon-link href="{{ route('users.merchants.edit', ['merchant' => $merchant->id]) }}" />
                        </div>
                        <!-- Detail modal -->
                        <x-modal name="more-detail" title="Detalles del Comerciante">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach ($this->items() as $item)
                                    <x-detail-item-modal :label="$item['label']" :value="$item['value']" />
                                @endforeach
                            </div>
                        </x-modal>
                    </header>
                    <ul class="col-span-full flex items-center space-x-2 text-sm text-gray-800">
                        <li>Comerciante</li>
                        <li>|</li>
                        <li>{{ $merchant->createdBy() }}</li>
                    </ul>
                </x-card>
                <!-- Business -->
                <x-card class="rounded-xl">
                    <header class="flex flex-row justify-between items-center mb-2">
                        <h2 class="text-lg font-bold text-gray-900">
                            Negocios
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-icon-link
                                href="{{ route('users.merchants.businesses.create', ['merchant' => $merchant->id]) }}"
                                icon="plus" />
                        </div>
                    </header>
                    {{-- <x-table>
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
                                            href="{{ route('users.merchants.businesses.show', ['merchant' => $business->merchant_id, 'business' => $business->id]) }}"
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
                    </x-table> --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                        @forelse ($businesses as $business)
                            <a href="{{ route('users.merchants.businesses.show', ['merchant' => $business->register_id, 'business' => $business->id]) }}"
                                class=" bg-gray-100 hover:bg-gray-200 rounded-lg p-4">
                                <x-card-business-user :code="$business->code" :place="$business->place->name" :name="$business->name"
                                    :type="$business->businessType->es_name" :category="$business->businessCategory->es_name" />
                            </a>
                        @empty
                            <div class="col-span-full text-center p-4 text-gray-500">
                                No hay negocios registrados para este comerciante.
                            </div>
                        @endforelse
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>

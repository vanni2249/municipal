<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Comerciante -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-1">
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">
                                {{ $merchant->name ?? '...' }}
                            </h2>
                            <span class="text-xs text-gray-400">Comerciante</span>
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
                    <ul class="col-span-full flex items-center space-x-2 text-xs text-gray-500">
                        <li>{{ $merchant->code ?? '254897' }}</li>
                        <li>|</li>
                        <li>{{ $merchant->phone }}</li>
                        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            @foreach ($items->take(4) as $item)
                                <x-detail-item label="{{ $item['label'] }}" :value="$item['value']" />
                            @endforeach
                        </div> --}}
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
                    <div class="grid grid-cols-1 lg:grid-cols-2">

                        @forelse ($businesses as $business)
                            <a href="{{ route('users.merchants.businesses.show', ['merchant' => $business->merchant_id, 'business' => $business->id]) }}" class="border border-gray-200 hover:bg-gray-200 rounded-lg p-4">
                                <div class="flex flex-col space-x-2">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg text-gray-700 font-light line-clamp-1">{{ $business->name }}</h2>
                                        <x-badge color="blue" label="ID" value="{{ $business->code ?? '...' }}" />
                                    </div>
                                    <div class="pt-2">
                                        <ul class="flex items-center space-x-2 text-xs text-gray-600">
                                            <li>
                                                {{ $business->businessType->es_name }}
                                            </li>
                                            <li>
                                                |
                                            </li>
                                            <li>
                                                {{ $business->businessCategory->es_name ?? '...' }}
                                            </li>
                                            <li>
                                                |
                                            </li>
                                            <li>
                                                {{ $merchant->city ?? '...' }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-center p-4 text-gray-500">
                                No hay negocios registrados para este comerciante.
                            </p>
                        @endforelse
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>

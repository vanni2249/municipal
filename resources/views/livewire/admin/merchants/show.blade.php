<div>
    <div class="space-y-4">

        <x-card>
            <header>
                <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Comerciante
                    </h2>
                    <div class="flex items-center space-x-2">
                        <x-icon-link href="{{ route('admin.merchants.edit', ['merchant' => $merchant]) }}"
                            icon="edit" />
                    </div>
                </div>
            </header>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($items as $item)
                    <ul class="">
                        <li class="text-xs font-bold text-gray-800">{{ $item['label'] }}</li>
                        <li class="text-sm text-gray-600">{{ $item['value'] }}</li>
                    </ul>
                @endforeach
            </div>
        </x-card>
        <x-card>
            <header class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-gray-900 mb-4">
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
                        <th class="p-4">Categoria</th>
                        <th class="p-4">Numero de comercio</th>
                        <th class="p-4 w-14">Accion</th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @forelse ($merchant->businesses as $business)
                        <tr class="border-t border-gray-200">
                            <td class="p-2">
                                <span>...</span>
                                <br>
                                <span class="text-sm text-gray-600">{{ $business->name }}</span>
                            </td>
                            <td class="p-2">
                                <span class="text-sm text-gray-600">{{ $business->businessCategory->es_name }}</span>
                            </td>
                            <td class="p-2">{{ $business->merchant_number }}</td>
                            <td class="p-2 text-right flex space-x-2 justify-end">
                                <x-icon-link href="{{ route('admin.merchants.businesses.show', ['merchant' => $merchant->id, 'business' => $business->id]) }}"
                                    icon="eye" />
                                <x-icon-link href="{{ route('admin.merchants.businesses.edit', ['merchant' => $merchant->id, 'business' => $business->id]) }}"
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

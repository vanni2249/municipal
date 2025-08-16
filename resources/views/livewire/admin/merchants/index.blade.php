<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Comerciantes
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.merchants.create') }}" icon="plus" />
                </div>
            </div>
        </header>
        @if ($head)
            <div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
                <div class="">
                    <x-input placeholder="Buscar" class="w-full" />
                </div>
                <div class="flex space-x-2">
                    <div class="bg-gray-200 rounded-md p-1">
                        <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostra</span>
                        <select class="mx-2 rounded-md text-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div>
                        <x-button variant="light">Filtro</x-button>
                    </div>
                </div>
            </div>
        @endif

        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 ">Nombre</th>
                    <th class="p-2 ">Tipo</th>
                    <th class="p-2 ">Email<br/>Teléfono</th>
                    <th class="p-2 ">Dirección</th>
                    <th class="p-2 ">Creado<br />por</th>
                    <th class="p-2 ">Fecha<br />creación</th>
                    <th class="p-2 text-right">Acción</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($merchants as $merchant)
                    <tr class="border-t border-gray-200">
                        <td class="p-2">
                            <span>
                                {{ $merchant->code }}
                            </span>
                            <br>
                            <span>
                                {{ $merchant->name  }}  {{ $merchant->lastname }}
                            </span>
                        </td>
                        <td class="p-2">{{ $merchant->type->es_name }}</td>
                        <td class="p-2">
                            <span>
                                {{ $merchant->email??'...' }}
                            </span>
                            <br>
                            <span>{{ $merchant->phone }}</span>
                        </td>
                        <td class="p-2">
                            <span>
                                {{ $merchant->address }}
                            </span>
                            <br>
                            <span>
                                {{ $merchant->city?? '...' }} {{ $merchant->postal_code?? '...' }}
                            </span>
                        </td>
                        <td class="p-2">
                            <x-badge label="{{ $merchant->created_by }}"></x-badge>
                        </td>
                        <td class="p-2">{{ $merchant->created_at->format('d/M/Y')}}</td>
                        <td class="p-2 flex justify-end">
                            <x-icon-link href="{{ route('admin.merchants.show', ['merchant' => $merchant->id]) }}"
                                icon="eye" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay comerciantes disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>

</div>
